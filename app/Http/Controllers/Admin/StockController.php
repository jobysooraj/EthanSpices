<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\StockService;
use App\Services\CategoryService;
use App\Http\Requests\StockRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Stock;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class StockController extends Controller
{
    protected $productService;
    
    protected $categoryService;
    protected $stockService;
    public function __construct(ProductService $productService,StockService $stockService,CategoryService $categoryService)
    {
        $this->productService   = $productService;
        $this->stockService = $stockService;
        $this->categoryService  =$categoryService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    { 
        $breadcrumbs = [
        ['name' => 'Dashboard', 'url' => route('admin.home')],
        ['name' => 'Stock', 'url' => route('stocks.index')],
        ['name' => 'Lists', 'url' => null] // Null for the current page
        ];
        if ($request->ajax()) {
            $stocks = $this->stockService->getAllStocks();
            
            return DataTables::of($stocks)
                ->addIndexColumn() // Adds an index column if needed
                ->addColumn('image', function ($row) {
                    $imageUrl = asset('storage/'.$row->image); // Adjust path based on storage
                    return '<img src="'.$imageUrl.'" alt="Category Image" width="50" height="50" />';
                })
                ->addColumn('products', function ($row) {
                    // Retrieve the names of products associated with the combo
                    $productNames = $row->products->pluck('name')->toArray();
                    return implode(', ', $productNames); // Display product names as a comma-separated string
                })
                ->addColumn('status', function ($row) {
                    return $row->status ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('stocks.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('stocks.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action','image','status']) // Allows HTML rendering in the action column
                ->make(true);
        }

        return view('admin.stock.index', compact('breadcrumbs')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Stock', 'url' => route('stocks.index')],
            ['name' => 'Create', 'url' => null] // Null for the current page
        ];
       
        $products = $this->productService->getAllProducts();
        $categories = $this->categoryService->getAllCategories();
        return view('admin.stock.create', compact('breadcrumbs','products','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StockRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
            $data['used_quantity'] = $data['used_quantity'] ?? 0;
            $this->stockService->createStock($data);
            
            DB::commit();
            return redirect()->route('categories.index')->with('success', 'Category Created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating category. Please try again.');
        }
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
    public function edit(Stock $stock)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Stock', 'url' => route('stocks.index')],
            ['name' => 'Edit', 'url' => null] // Null for the current page
        ];
      
        $products   = $this->productService->getAllProducts();
        $products = $this->productService->getAllProducts();
        $categories = $this->categoryService->getAllCategories();
        
        return view('admin.stock.edit', compact('stock','breadcrumbs','products','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StockRequest $request, Stock $stock)
    {
        DB::beginTransaction();
        try {
            // Validate the incoming request data
            $data = $request->validated();
    
            // Ensure used quantity does not exceed total quantity
            if ($data['used_quantity'] > $data['total_quantity']) {
                return redirect()->back()->withErrors('Used quantity cannot be greater than total quantity.');
            }
    
            // Recalculate balanced quantity
            $data['balanced_quantity'] = $data['total_quantity'] - $data['used_quantity'];
    
            // Update the stock record
            $this->stockService->updateStock($data);
    
            DB::commit();
            return redirect()->route('stock.index')->with('success', 'Stock updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Stock update failed: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error updating stock. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stock $stock)
    {
        DB::beginTransaction();
        try {
            $this->stockService->deleteStock($stock->id);
            DB::commit();
            return redirect()->route('stock.index')->with('success', 'Stock deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Stock deletion failed: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error deleting Stock. Please try again.');
        }

    
    }
}
