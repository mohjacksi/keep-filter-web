<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TypeCategory;
use App\Http\Requests\StoreTypeCategoryRequest;
use App\Http\Requests\UpdateTypeCategoryRequest;

class TypeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeCategories = TypeCategory::all();
        return view('dashboard.Type_Category.Index_Type_Category', compact('typeCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypeCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeCategoryRequest $request)
    {
        $typeCategory = new TypeCategory();
        $typeCategory->name = $request->name;
        $typeCategory->save();
        return back()->with(['insert' => 'done']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeCategory  $typeCategory
     * @return \Illuminate\Http\Response
     */
    public function show(TypeCategory $typeCategory)
    {
        //dd($typeCategory->Products);
        return view('dashboard.Type_Category.Show_Type',compact('typeCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeCategory  $typeCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeCategory $typeCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeCategoryRequest  $request
     * @param  \App\Models\TypeCategory  $typeCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeCategoryRequest $request, TypeCategory $typeCategory)
    {
        $typeCategory->name = $request->name;
        $typeCategory->save();
        return back()->with(['update' => 'done']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeCategory  $typeCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeCategory $typeCategory)
    {
        $typeCategory->delete();
        return back()->with(['delete'=>'done']);
    }
}
