<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Product;

class ProductController extends Controller
{

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{

		$product = new Product();
		$product->pro_name	= $request->pro_name;
		$product->pro_price	= $request->pro_price;
		$product->pro_qty	= $request->pro_qty;

		$product->save();
	}


	/**
	 * Display the specified resource.
	 */
	public function show()
	{
		$product = Product::all();

		return response()->json([
			'status' => 200,
			'allProduct' => $product
		]);
	}


	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit($id)
	{
		$product = Product::find($id);
		return response()->json([
			'allProduct' => $product
		]);
	}


	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($id)
	{
		$product = Product::find($id);
		$product->delete();
	}


	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, string $id)
	{
		$product = Product::find($id);
		$product->pro_name	= $request->pro_name;
		$product->pro_price	= $request->pro_price;
		$product->pro_qty	= $request->pro_qty;
		$product->status	= $request->status;
		$product->update();
	}


	/**
	 * Active update the specified resource in storage.
	 */
	public function isActive($id)
	{
		$product = Product::find($id);
		$product->status = '0';
		$product->update();
	}


	/**
	 * Inactive update the specified resource in storage.
	 */
	public function inActive($id)
	{
		$product = Product::find($id);
		$product->status = '1';
		$product->update();
	}
}
