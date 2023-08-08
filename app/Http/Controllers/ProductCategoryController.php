<?php

namespace App\Http\Controllers;

use App\Models\productCategory;
use App\Http\Requests\StoreproductCategoryRequest;
use App\Http\Requests\UpdateproductCategoryRequest;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(productCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductCategoryRequest $request, productCategory $productCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productCategory $productCategory)
    {
        //
    }
}
