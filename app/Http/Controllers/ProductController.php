<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id){
        $product=Product::query()->with('category')->find($id);
        return response()->json($product);

    }




    public function store(StoreProductRequest $request){
        Product::query()->create($request->validated());
    }



    


}
