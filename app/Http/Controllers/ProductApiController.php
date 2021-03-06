<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(['message' => 'success','data' => $products]);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json(['message' => 'Data Has Been Inserted','data' => $product]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json(['message' => 'success','data' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return response()->json(['message' => 'Data Has Been Updated','data' => $product]);
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(['message' => 'Data Has Been Deleted','data' => null]);
    }
}
