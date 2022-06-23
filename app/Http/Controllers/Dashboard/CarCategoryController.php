<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CarCategory;
use Illuminate\Support\Facades\File; 

use App\Http\Requests\StoreCarCategoryRequest;
use App\Http\Requests\UpdateCarCategoryRequest;

class CarCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carCategories = CarCategory::all();
        return view('dashboard.Car_Category.Index_Car_Category', compact('carCategories'));
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
     * @param  \App\Http\Requests\StoreCarCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarCategoryRequest $request)
    {

        //dd($request->all());
        $car = new CarCategory;
        $car->name = $request->name;
        $imageName = time().'.'.$request->img->getClientOriginalExtension();
        $car->img = $imageName;
        $car->save();
        $request->img->move(public_path('dashboard/images/categories/car_images'), $imageName);

        return back()->with(['insert'=>'done']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarCategory  $carCategory
     * @return \Illuminate\Http\Response
     */
    public function show(CarCategory $carCategory)
    {
        //dd($carCategory->Products);
        return view('dashboard.Car_Category.Show_Car',compact('carCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarCategory  $carCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(CarCategory $carCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarCategoryRequest  $request
     * @param  \App\Models\CarCategory  $carCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarCategoryRequest $request, CarCategory $carCategory)
    {

        //dd($request->all());

        $carCategory->name = $request->name;
        
        if($request->img != ''){
            \File::delete(public_path('dashboard/images/categories/car_images'.$carCategory->img));
            $imageName = time().'.'.$request->img->getClientOriginalExtension();
            $request->img->move(public_path('dashboard/images/categories/car_images'), $imageName);
            $carCategory->img = $imageName;
        }

        $carCategory->save();
        return back()->with(['update'=>'done']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarCategory  $carCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarCategory $carCategory)
    {

        //dd($carCategory);
        \File::delete(public_path('dashboard/images/categories/car_images/'.$carCategory->img));
        $carCategory->delete();
        return back()->with(['delete'=>'done']);
    }
}
