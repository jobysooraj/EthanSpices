<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SupplierService;
use App\Http\Requests\SupplierRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Supplier;

class SupplierController extends Controller
{
    protected $supplierService;

    public function __construct(SupplierService $supplierService)
    {
        $this->supplierService = $supplierService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Supplier', 'url' => route('suppliers.index')],
            ['name' => 'Lists', 'url' => null] // Null for the current page
        ];
        if ($request->ajax()) {
            $suppliers = $this->supplierService->getAllSuppliers();
            
            return DataTables::of($suppliers)
                ->addIndexColumn() // Adds an index column if needed
               
                
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('suppliers.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('suppliers.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action']) // Allows HTML rendering in the action column
                ->make(true);
        }
    
        return view('admin.supplier.index', compact('breadcrumbs')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Suppler', 'url' => route('suppliers.index')],
            ['name' => 'Create', 'url' => null] // Null for the current page
        ];
        return view('admin.supplier.create', compact('breadcrumbs'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupplierRequest $request)
    {
       
        DB::beginTransaction();
        try {
            $data = $request->validated();
          
            $this->supplierService->createSupplier($data);
            
            DB::commit();
            return redirect()->route('suppliers.index')->with('success', 'Supplier Created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating units. Please try again.');
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
    public function edit(Supplier $supplier)
    {
        
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Suppliers', 'url' => route('suppliers.index')],
            ['name' => 'Edit', 'url' => null] // Null for the current page
        ];
        return view('admin.supplier.edit', compact('supplier','breadcrumbs'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupplierRequest $request, Supplier $supplier)
    {
        
        DB::beginTransaction();
        try {
            $data = $request->validated();
           
            $this->supplierService->updateSupplier($supplier->id, $data);
            
            DB::commit();
            return redirect()->route('suppliers.index')->with('success', 'supplier updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
        
            return redirect()->back()->withErrors('Error updating supplier. Please try again.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        DB::beginTransaction();
        try {
            $this->supplierService->deleteSupplier($supplier->id);

            DB::commit();
            return redirect()->route('suppliers.index')->with('success', 'Supplier deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error deleting Supplier. Please try again.');
        }

    }
}
