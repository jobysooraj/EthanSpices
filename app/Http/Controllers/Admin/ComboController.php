<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ComboService;
use App\Services\ProductService;
use App\Services\GstTaxService;
use App\Services\UnitService;
use App\Http\Requests\ComboRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Combo;
use App\Models\Product;
use Illuminate\Support\Str;

class ComboController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $comboService;
    protected $productService;
    protected $gstService;
    protected $unitService;
    public function __construct(ComboService $comboService,ProductService $productService,GstTaxService $gstService,UnitService $unitService)
    {
        $this->comboService     = $comboService;
        $this->productService   = $productService;
        $this->gstService       = $gstService;
        $this->unitService      = $unitService;
    }

    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Combos', 'url' => route('combos.index')],
            ['name' => 'Lists', 'url' => null] // Null for the current page
        ];
        if ($request->ajax()) {
            $combos = $this->comboService->getAllCombos();
            
            return DataTables::of($combos)
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
                    return '<a href="'.route('combos.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('combos.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action','image','status']) // Allows HTML rendering in the action column
                ->make(true);
        }
    
        return view('admin.combos.index', compact('breadcrumbs')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Combo', 'url' => route('combos.index')],
            ['name' => 'Create', 'url' => null] // Null for the current page
        ];
        $gstTaxes = $this->gstService->getAllGstTaxes();
        $products = $this->productService->getAllProducts();
        $units    = $this->unitService->getAllUnits();
        return view('admin.combos.create', compact('breadcrumbs','gstTaxes','products','units'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComboRequest $request)
    {
        DB::beginTransaction();
        try {
            // Validate request data
            $data = $request->validated();
    
            // Handle image upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs('combos', $filename, 'public');
                $data['image'] = $filePath;
            }
    
            // Generate unique combo code
            $data['code'] = $this->generateUniqueComboCode($data['name']);
    
            // Save combo data (without product_id)
            $combo = $this->comboService->createCombo($data);
    
            // Get the product IDs from the request and associate with the combo
            $productIds = $request->product_id; // This is an array of product IDs
            $combo->products()->sync($productIds); // Sync the product relationships with the combo
    
            DB::commit();
    
            return redirect()->route('combos.index')->with('success', 'Combo created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating Combo. Please try again.');
        }
    }
    

    public function generateUniqueComboCode($name)
    {
        do {
            $code = 'COMBO-' . strtoupper(substr($name, 0, 6));
        } while (Combo::where('code', $code)->exists());

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
    public function edit(Combo $combo)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Combo', 'url' => route('combos.index')],
            ['name' => 'Edit', 'url' => null] // Null for the current page
        ];
        $gstTaxes   = $this->gstService->getAllGstTaxes();
        $products   = $this->productService->getAllProducts();
        $units      = $this->unitService->getAllUnits();
        return view('admin.combos.edit', compact('combo','breadcrumbs','gstTaxes','products','units'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComboRequest $request, Combo $combo)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();

            if ($request->hasFile('image')) {
                $file           = $request->file('image');
                $filename       = time() . '.' . $file->getClientOriginalExtension();
                $filePath       = $file->storeAs('combos', $filename, 'public');
                $data['image']  = $filePath;
            }

            $this->comboService->updateCombo($combo->id, $data);
            DB::commit();
            return redirect()->route('combos.index')->with('success', 'Combo updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Combo update failed: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error updating Combo. Please try again.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Combo $combo)
    {
        DB::beginTransaction();
        try {
            $this->comboService->deleteCombo($combo->id);
            DB::commit();
            return redirect()->route('combos.index')->with('success', 'Combo deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Combo deletion failed: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error deleting Combo. Please try again.');
        }

    }
}
