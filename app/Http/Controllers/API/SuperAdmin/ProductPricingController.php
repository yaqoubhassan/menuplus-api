<?php

namespace App\Http\Controllers\API\SuperAdmin;

use Illuminate\Http\Request;
use App\Models\ProductPricing;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductPricingRequest;
use App\Http\Resources\ProductPricingResource;
use App\Http\Resources\ProductPricingCollection;

class ProductPricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productPricing = ProductPricing::paginate();
        return new ProductPricingCollection($productPricing);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductPricingRequest $request)
    {
        $productPricing = new ProductPricing;
        $productPricing->product_id = $request->input('product_id');
        $productPricing->name = $request->input('name');
        $productPricing->duration = $request->input('duration');
        $productPricing->pricing = $request->input('pricing');
        $productPricing->save();

        return new ProductPricingResource($productPricing);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
