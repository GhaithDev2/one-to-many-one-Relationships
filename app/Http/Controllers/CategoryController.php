<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function store(StoreCategoryRequest $request){
        $category=Category::query()->create($request->validated());
        return response()->json($category);
    }




    public function show($id){
        $category=Category::query()->with('products')->find($id);
        return response()->json($category);
    }




    public function destroy($id){
        $category=Category::query()->with('products')->findOrFail($id);
        if($category->products->isNotEmpty()){
            return response()->json([
                'message'=>"can not delete category because it has related products"
            ],422);


            $category->delete();
            return response()->json([
                'message'=>"category deleted successfully"
            ]);
        }


    }




}
