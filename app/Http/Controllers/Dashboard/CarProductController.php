<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Car_product;
use App\Http\Requests\StoreCar_productRequest;
use App\Http\Requests\UpdateCar_productRequest;

class CarProductController extends Controller
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
     * @param  \App\Http\Requests\StoreCar_productRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCar_productRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car_product  $car_product
     * @return \Illuminate\Http\Response
     */
    public function show(Car_product $car_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car_product  $car_product
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_product $car_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCar_productRequest  $request
     * @param  \App\Models\Car_product  $car_product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCar_productRequest $request, Car_product $car_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car_product  $car_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_product $car_product)
    {
        //
    }
}
