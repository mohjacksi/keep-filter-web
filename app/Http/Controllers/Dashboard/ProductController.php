<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\CarCategory;
use App\Models\FilterCategory;
use App\Models\TypeCategory;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Car_product;
use App\Models\Filter_product;
use App\Models\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$t = Product::find(1);
        //dd($t->First_Image()->first()->id);
        $car_category     = CarCategory::all();
        $filter_category  = FilterCategory::all();
        $type_category    = TypeCategory::all();
        
        $products = Product::all();
        return view('dashboard.products.IndexProduct' , compact('products','car_category','filter_category','type_category'));
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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //return back();
        //dd($request->all());

        $product = new Product;
        $product->title             = $request->name;
        $product->quantity         = $request->quantity;
        $product->price            = $request->price;
        $product->code             = $request->code;
        $product->type_category_id = $request->type_category_id;
        $product->description       = $request->description;

        $product->save();

        // Product Filters
        foreach ($request->filter_category_id as $data) {

            $Filter    = new Filter_product;
            $Filter->filter_category_id = $data;
            $Filter->product_id = $product->id;;
            $Filter->save();
        }


        // Product Cars
        foreach ($request->car_category_id as $data) {

            $Car    = new Car_product();
            $Car->car_category_id = $data;
            $Car->product_id = $product->id;;
            $Car->save();
        }

        // Product Images

        foreach ($request->images as $data) {

            $postImage = new Image;
            $imageName =  $product->id.  '_' . rand(11111, 99999) . time() . '.' .  $data->getClientOriginalName();
            $postImage->image = $imageName;
            $postImage->Product_id = $product->id;
            $postImage->save();
            $data->move(public_path('dashboard/images/products/' . $product->id . '/'), $imageName);

        }


        return back()->with(['insert' => 'done']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //dd($product);
        return view('dashboard.products.ShowProduct',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //$selected = explode(",", $product->cars()->id);
        $car_category     = CarCategory::all();
        $filter_category  = FilterCategory::all();
        $type_category    = TypeCategory::all();
        //dd($product->cars);
        
        return view('dashboard.products.EditProduct',compact(/* 'selected', */'product','filter_category','car_category','type_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * insert the specified resource in storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function insertImage( Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        //dd($product);
        foreach ($request->images as $data) {

            $postImage = new Image;
            $imageName =  $product->id.  '_' . rand(11111, 99999) . time() . '.' .  $data->getClientOriginalName();
            $postImage->image = $imageName;
            $postImage->Product_id = $product->id;
            $postImage->save();
            $data->move(public_path('dashboard/images/products/' . $product->id . '/'), $imageName);

        }
        return back()->with(['insert' => 'done']);
    }

    /**
     * delete the specified resource in storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function deleteImage( Request $request)
    {
        $img = Image::findOrFail($request->img_id);
        //dd($img->product_id);
        
        \File::delete(public_path('dashboard/images/products/' . $img->product_id . '/' . $img->image));
        $img->delete();
        return back()->with(['delete' => 'done']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {



        //dd($product->Cars);

            //destroy filters data
           /*  foreach($product->Filters as $filter){
                    $filter->delete();
            }

            // destroy cars data
            foreach($product->Cars as $car){
                $car->delete();
            }  */  


            foreach($product->Images as $img){
                $img->delete();
            }
            \File::deleteDirectory(public_path('dashboard/images/products/' . $product->id));
            $product->delete();
            return back()->with(['delete' => 'done']);

    }
}
