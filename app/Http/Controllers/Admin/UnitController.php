<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UnitService;
use App\Http\Requests\UnitRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Unit;

class UnitController extends Controller
{
    protected $unitService;

    public function __construct(UnitService $unitService)
    {
        $this->unitService = $unitService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Unit', 'url' => route('units.index')],
            ['name' => 'Lists', 'url' => null] // Null for the current page
        ];
        if ($request->ajax()) {
            $units = $this->unitService->getAllUnits();
            
            return DataTables::of($units)
                ->addIndexColumn() // Adds an index column if needed
               
                ->addColumn('status', function ($row) {
                    return strtolower($row->status) === 'active' 
                    ? '<span class="badge bg-success">Active</span>' 
                    : '<span class="badge bg-danger">Blocked</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('units.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('units.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action','status']) // Allows HTML rendering in the action column
                ->make(true);
        }
    
        return view('admin.units.index', compact('breadcrumbs')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Units', 'url' => route('units.index')],
            ['name' => 'Create', 'url' => null] // Null for the current page
        ];
        return view('admin.units.create', compact('breadcrumbs'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UnitRequest $request)
    {
       
        DB::beginTransaction();
        try {
            $data = $request->validated();
          
            $this->unitService->createUnit($data);
            
            DB::commit();
            return redirect()->route('units.index')->with('success', 'Units Created successfully!');
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
    public function edit(Unit $unit)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Units', 'url' => route('units.index')],
            ['name' => 'Edit', 'url' => null] // Null for the current page
        ];
        return view('admin.units.edit', compact('unit','breadcrumbs'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UnitRequest $request, Unit $unit)
    {
        
        DB::beginTransaction();
        try {
            $data = $request->validated();
            
            $this->unitService->updateUnit($unit->id, $data);
            DB::commit();
            return redirect()->route('units.index')->with('success', 'unit updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Unit update failed: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error updating unit. Please try again.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        DB::beginTransaction();
        try {
            $this->unitService->deleteUnit($unit->id);

            DB::commit();
            return redirect()->route('units.index')->with('success', 'Unit deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Unit deletion failed: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error deleting unit. Please try again.');
        }

    }
    public function getConversionFactor(Request $request)
    {
        $unit = Unit::find($request->unit_id);

        if (!$unit) {
            return response()->json(['success' => false, 'message' => 'Unit not found.']);
        }

        return response()->json(['success' => true, 'conversion_factor' => $unit->title]);
    }
}
