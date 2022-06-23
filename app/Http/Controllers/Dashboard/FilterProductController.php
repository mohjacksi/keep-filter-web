<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Filter_product;
use App\Http\Requests\StoreFilter_productRequest;
use App\Http\Requests\UpdateFilter_productRequest;

class FilterProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreFilter_productRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFilter_productRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filter_product  $filter_product
     * @return \Illuminate\Http\Response
     */
    public function show(Filter_product $filter_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filter_product  $filter_product
     * @return \Illuminate\Http\Response
     */
    public function edit(Filter_product $filter_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFilter_productRequest  $request
     * @param  \App\Models\Filter_product  $filter_product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFilter_productRequest $request, Filter_product $filter_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filter_product  $filter_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filter_product $filter_product)
    {
        //
    }
}
