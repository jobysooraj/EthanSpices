<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PromocodeService;
use App\Http\Requests\PromocodeRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Promocode;
use Illuminate\Support\Str;

class PromocodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $promocodeService;

    public function __construct(PromocodeService $promocodeService)
    {
        $this->promocodeService = $promocodeService;
    }

    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Promocode', 'url' => route('promocodes.index')],
            ['name' => 'Lists', 'url' => null] // Null for the current page
        ];
        if ($request->ajax()) {
            $promocodes = $this->promocodeService->getAllpromocodes();
            
            return DataTables::of($promocodes)
                ->addIndexColumn() // Adds an index column if needed
               
                ->addColumn('status', function ($row) {
                    return $row->status ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('promocodes.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('promocodes.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action','status']) // Allows HTML rendering in the action column
                ->make(true);
        }
    
        return view('admin.promocodes.index', compact('breadcrumbs')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Promocodes', 'url' => route('promocodes.index')],
            ['name' => 'Create', 'url' => null] // Null for the current page
        ];
        return view('admin.promocodes.create', compact('breadcrumbs'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PromocodeRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();         
            if ($data['discount_type'] === 'percentage') {
                $data['amount'] = $data['amount'] / 100; // 20% -> 0.2
            } 
            $this->promocodeService->createPromocode($data);

            DB::commit();
            return redirect()->route('promocodes.index')->with('success', 'Promocode Created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating Promocode. Please try again.');
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
    public function edit(Promocode $promocode)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Promocode', 'url' => route('promocodes.index')],
            ['name' => 'Edit', 'url' => null] // Null for the current page
        ];
        return view('admin.promocodes.edit', compact('promocode','breadcrumbs'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PromocodeRequest $request, Promocode $promocode)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
            if ($data['discount_type'] === 'percentage') {
                $data['amount'] = $data['amount'] / 100; // 20% -> 0.2
            } 
            $this->promocodeService->updatePromocode($promocode->id, $data);

            DB::commit();
            return redirect()->route('promocodes.index')->with('success', 'Promocode updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            
            return redirect()->back()->withErrors('Error updating Promocode. Please try again.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promocode $promocode)
    {
        DB::beginTransaction();
        try {
            $this->promocodeService->deletePromocode($promocode->id);

            DB::commit();
            return redirect()->route('promocodes.index')->with('success', 'Promocode deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Promocode deletion failed: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error deleting Promocode. Please try again.');
        }

    }
}
