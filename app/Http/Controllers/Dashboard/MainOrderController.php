<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Main_order;
use App\Http\Requests\StoreMain_orderRequest;
use App\Http\Requests\UpdateMain_orderRequest;

class MainOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Main_order::all();
        dd($orders);
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
     * @param  \App\Http\Requests\StoreMain_orderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMain_orderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Main_order  $main_order
     * @return \Illuminate\Http\Response
     */
    public function show(Main_order $main_order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Main_order  $main_order
     * @return \Illuminate\Http\Response
     */
    public function edit(Main_order $main_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMain_orderRequest  $request
     * @param  \App\Models\Main_order  $main_order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMain_orderRequest $request, Main_order $main_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Main_order  $main_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Main_order $main_order)
    {
        //
    }
}
