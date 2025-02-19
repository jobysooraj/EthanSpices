<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\CategoryService;
use App\Services\GstTaxService;
use App\Services\SupplierService;
use App\Http\Requests\ProductRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $productService;
    protected $categoryService;
    protected $supplierService;
    protected $gstService;

    public function __construct(ProductService $productService, CategoryService $categoryService,SupplierService $supplierService, GstTaxService $gstService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
        $this->supplierService = $supplierService;
        $this->gstService = $gstService;
    }

    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Product', 'url' => route('products.index')],
            ['name' => 'Lists', 'url' => null] // Null for the current page
        ];
        if ($request->ajax()) {
            $products = $this->productService->getAllproducts();
            
            return DataTables::of($products)
                ->addIndexColumn() // Adds an index column if needed
               
                ->addColumn('status', function ($row) {
                    return $row->status ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('products.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('products.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action','status']) // Allows HTML rendering in the action column
                ->make(true);
        }
    
        return view('admin.products.index', compact('breadcrumbs')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Products', 'url' => route('products.index')],
            ['name' => 'Create', 'url' => null] // Null for the current page
        ];
        $categories = $this->categoryService->getAllCategories();
        $suppliers = $this->supplierService->getAllsuppliers();
        $gstTaxes = $this->gstService->getAllGstTaxes();
        return view('admin.products.create', compact('breadcrumbs','categories','suppliers','gstTaxes'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        
        DB::beginTransaction();
        try {
            $data = $request->validated(); 
            $data['slug']=$this->generateUniqueProductCode($data['name']); 
            $product=$this->productService->createProduct($data);
          
            if ($request->hasFile('image')) {
                $imagePaths = [];

            foreach ($request->file('image') as $image) {
                // Generate a unique filename
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                // Store the image in the 'public/products' directory
                $path = $image->storeAs('products', $filename,'public');

                // Save the image path relative to the storage
                $imagePaths[] = [
                    'product_id' => $product->id,
                    'image_path' => 'products/' . $filename,                   
                ];
            }

            ProductImage::insert($imagePaths);

            }
            
            DB::commit();
            return redirect()->route('products.index')->with('success', 'Product Created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating Product. Please try again.');
        }

    }
   
    public function generateUniqueProductCode($name)
    {
        do {
            $truncatedName = strtoupper(Str::limit(Str::slug($name, ''), 5, ''));
            $code = 'PRO-' . strtoupper(Str::random(3)).'-'.$truncatedName; // Example: CAT-AB12CD
        } while (Product::where('slug', $code)->exists());

        return $code;
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Produt', 'url' => route('products.index')],
            ['name' => 'Edit', 'url' => null] // Null for the current page
        ];
        $categories = $this->categoryService->getAllCategories();
        $suppliers = $this->supplierService->getAllsuppliers();
        $gstTaxes = $this->gstService->getAllGstTaxes();
        $productImages=ProductImage::where('product_id',$product->id)->get();
        return view('admin.products.edit', compact('categories','suppliers','gstTaxes','product','productImages','breadcrumbs'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
            $request->validate([              
                'remove_images' => 'array',
                'remove_images.*' => 'exists:product_images,id',
               
            ]);
            if ($request->has('remove_images')) {
                foreach ($request->remove_images as $imageId) {
                    $image = ProductImage::find($imageId);
                    if ($image) {
                        Storage::delete('public/' . $image->path); // Delete image file
                        $image->delete(); // Remove database record
                    }
                }
            }
            if ($request->hasFile('image')) {
                $imagePaths = [];

            foreach ($request->file('image') as $image) {
                // Generate a unique filename
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                // Store the image in the 'public/products' directory
                $path = $image->storeAs('products', $filename,'public');

                // Save the image path relative to the storage
                $imagePaths[] = [
                    'product_id' => $product->id,
                    'image_path' => 'products/' . $filename,                   
                ];
            }

            ProductImage::insert($imagePaths);

            }
            
            $this->productService->updateProduct($product->id, $data);

            DB::commit();
            return redirect()->route('products.index')->with('success', 'Product updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            
            return redirect()->back()->withErrors('Error updating Product. Please try again.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        DB::beginTransaction();
        try {
            ProductImage::where('product_id',$product->id)->delete();
            $this->productService->deleteProduct($product->id);

            DB::commit();
            return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error deleting Product. Please try again.');
        }

    }
}
