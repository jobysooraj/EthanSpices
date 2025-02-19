<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GstTax;
use App\Http\Requests\TaxRequest;
Use App\Services\GstTaxService;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class TaxController extends Controller
{
    protected $gstTaxService;

    public function __construct(GstTaxService $gstTaxService)
    {
        $this->gstTaxService = $gstTaxService;
    }
    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Taxes', 'url' => route('taxes.index')],
            ['name' => 'Lists', 'url' => null] // Null for the current page
        ];
        if ($request->ajax()) {
            $taxes = $this->gstTaxService->getAllGstTaxes();
            
            return DataTables::of($taxes)
                ->addIndexColumn() // Adds an index column if needed
                
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('taxes.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('taxes.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action','image','status']) // Allows HTML rendering in the action column
                ->make(true);
        }
    
        return view('admin.Tax.index', compact('breadcrumbs')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Taxes', 'url' => route('taxes.index')],
            ['name' => 'Create', 'url' => null] // Null for the current page
        ];
        return view('admin.Tax.create', compact('breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaxRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();                   
            $this->gstTaxService->createGstTax($data);

            DB::commit();
            return redirect()->route('taxes.index')->with('success', 'Tax Created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating taxes. Please try again.');
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
    public function edit(GstTax $tax)
    {
        
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Taxes', 'url' => route('taxes.index')],
            ['name' => 'Edit', 'url' => null] // Null for the current page
        ];
        return view('admin.Tax.edit', compact('tax','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaxRequest $request, GstTax $tax)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
           
            $this->gstTaxService->updateGstTax($tax->id, $data);

            DB::commit();
            return redirect()->route('taxes.index')->with('success', 'Gst Tax updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
        
            return redirect()->back()->withErrors('Error updating category. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GstTax $tax)
    {
        DB::beginTransaction();
        try {
            $this->gstTaxService->deleteGstTax($tax->id);

            DB::commit();
            return redirect()->route('taxes.index')->with('success', 'Tax deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
          
            return redirect()->back()->withErrors('Error deleting category. Please try again.');
        }

    }
}
