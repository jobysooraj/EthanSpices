<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Discount;
use App\Http\Requests\DiscountRequest;
Use App\Services\DiscountService;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class DiscountController extends Controller
{
    protected $discountService;

    public function __construct(DiscountService $discountService)
    {
        $this->discountService = $discountService;
    }
    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Discounts', 'url' => route('discounts.index')],
            ['name' => 'Lists', 'url' => null] // Null for the current page
        ];
        if ($request->ajax()) {
            $taxes = $this->discountService->getAllDiscounts();
            
            return DataTables::of($taxes)
                ->addIndexColumn() // Adds an index column if needed
                
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('discounts.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('discounts.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action']) // Allows HTML rendering in the action column
                ->make(true);
        }
    
        return view('admin.discounts.index', compact('breadcrumbs')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Discounts', 'url' => route('discounts.index')],
            ['name' => 'Create', 'url' => null] // Null for the current page
        ];
        return view('admin.discounts.create', compact('breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DiscountRequest $request)
    {
       
        DB::beginTransaction();
        try {
            $data = $request->validated();     
            if ($data['discount_type'] === 'percentage') {
                $data['amount'] = $data['amount'] / 100; // 20% -> 0.2
            }      
            $this->discountService->createDiscount($data);
           
            DB::commit();
            return redirect()->route('discounts.index')->with('success', 'Discount Created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating discount. Please try again.');
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
    public function edit(Discount $discount)
    {
        
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Discounts', 'url' => route('discounts.index')],
            ['name' => 'Edit', 'url' => null] // Null for the current page
        ];
        return view('admin.discounts.edit', compact('discount','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DiscountRequest $request, Discount $discount)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
            if ($data['discount_type'] === 'percentage') {
                $data['amount'] = $data['amount'] / 100; // 20% → 0.2
            }
            $this->discountService->updateDiscount($discount->id, $data);

            DB::commit();
            return redirect()->route('discounts.index')->with('success', 'Discount updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
        
            return redirect()->back()->withErrors('Error updating Discount. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discount $discount)
    {
        DB::beginTransaction();
        try {
            $this->discountService->deleteDiscount($discount->id);

            DB::commit();
            return redirect()->route('discounts.index')->with('success', 'Discount deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
          
            return redirect()->back()->withErrors('Error deleting Discount. Please try again.');
        }

    }
}
