<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Http\Requests\CategoryRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Categories', 'url' => route('categories.index')],
            ['name' => 'Lists', 'url' => null] // Null for the current page
        ];
        if ($request->ajax()) {
            $categories = $this->categoryService->getAllCategories();
    
            return DataTables::of($categories)
                ->addIndexColumn() // Adds an index column if needed
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('categories.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('categories.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action']) // Allows HTML rendering in the action column
                ->make(true);
        }
    
        return view('admin.categories.index', compact('breadcrumbs')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Categories', 'url' => route('categories.index')],
            ['name' => 'Create', 'url' => null] // Null for the current page
        ];
        return view('admin.categories.create', compact('breadcrumbs'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs('categories', $filename, 'public');
                $data['image'] = $filePath;
            }
            $data['slug']=$this->generateUniqueCategoryCode();
         
            $this->categoryService->createCategory($data);

            DB::commit();
            return redirect()->route('categories.index')->with('success', 'Category Created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating category. Please try again.');
        }

    }
    public function generateUniqueCategoryCode()
    {
        do {
            $code = 'CAT-' . strtoupper(Str::random(6)); // Example: CAT-AB12CD
        } while (Category::where('slug', $code)->exists());

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
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs('categories', $filename, 'public');
                $data['image'] = $filePath;
            }

            $this->categoryService->updateCategory($category->id, $data);

            DB::commit();
            return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Category update failed: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error updating category. Please try again.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        DB::beginTransaction();
        try {
            $this->categoryService->deleteCategory($category->id);

            DB::commit();
            return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Category deletion failed: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error deleting category. Please try again.');
        }

    }
}
