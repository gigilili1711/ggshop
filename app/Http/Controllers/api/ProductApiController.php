<?php

namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\File;
use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return product::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        return Product::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show( Product $Product )
    {
        return $Product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $Product )
    {
        $data = $request->all();
        return $Product->update($data);
    }

    /**
     * Remove the specified resource from storage.s
     */
    public function destroy( Product $Product )
    {
        return $Product->delete();
    }
}
