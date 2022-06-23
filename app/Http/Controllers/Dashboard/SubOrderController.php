<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Sub_order;
use App\Http\Requests\StoreSub_orderRequest;
use App\Http\Requests\UpdateSub_orderRequest;

class SubOrderController extends Controller
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
     * @param  \App\Http\Requests\StoreSub_orderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSub_orderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sub_order  $sub_order
     * @return \Illuminate\Http\Response
     */
    public function show(Sub_order $sub_order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sub_order  $sub_order
     * @return \Illuminate\Http\Response
     */
    public function edit(Sub_order $sub_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSub_orderRequest  $request
     * @param  \App\Models\Sub_order  $sub_order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSub_orderRequest $request, Sub_order $sub_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sub_order  $sub_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sub_order $sub_order)
    {
        //
    }
}
