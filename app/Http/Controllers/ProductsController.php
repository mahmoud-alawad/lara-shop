<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  // Show all products
  public function index()
  {
    return view('products.index', ['products' => Product::all()]);
  }
  // Show create product
  public function showCreate()
  {
    return view('products.create');
  }


  public function store(Request $request)
  {
    $product = new Product();
    $validatedData = $request->validate([
      'name' => 'required',
      'description' => 'required',
      'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:3000',

    ]);
    if ($request->file('image')) {
      $file = $request->file('image');
      $filename = date('YmdHi') . $file->getClientOriginalName();
      $file->move(public_path('public/Image'), $filename);
      $product['imgpath'] = $filename;
    }

    $product->name = $validatedData['name'];
    $product->description = $validatedData['description'];
    $product->save();

    return redirect(app()->getLocale() . '/products')->with('message', __('image has been uploaded'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function edit(Product $product)
  {
    return view('products.edit', compact('product'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
    $product = Product::findOrFail($request['id']);
    $formFields = $request->validate([
      'name' => 'required',
      'description' => ['required'],
    ]);

    if ($request->file('image')) {
      $file = $request->file('image');
      $filename = date('YmdHi') . $file->getClientOriginalName();
      $file->move(public_path('public/Image'), $filename);
      $product['imgpath'] = $filename;
    }


    $product->update($formFields);


    return redirect(app()->getLocale() . '/products')
      ->with('message', 'Product updated successfully');
  }

  // Delete Product
  public function destroy(Request $request)
  {
    $product = Product::findOrFail($request['id']);
    $product ? $product->delete() : abort('404');
    return redirect()->route('dashboard.products', app()->getLocale())->with('message', __('product' . $product['name'] . ' deleted with success'));
  }
}
