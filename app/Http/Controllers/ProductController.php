<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('admin.product-list', compact('product'));
    }

    public function create()
    {
        $category = Category::all();

        return view('admin.add-product', compact('category'));
    }

    public function store(Request $request)
    {
        $pricetoInt = preg_replace('/[^\d]/', '', $request->input('price'));
        $price = (int)$pricetoInt;

        $product = new Product;
        $product->name = $request->input('name');
        $product->category_id = $request->input('cat');
        $product->price = $price;
        $product->description = $request->input('desc');
        $product->terms = $request->input('terms');
        $product->information = $request->input('inf');
        $product->save();

        $id = $product->id;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = $id.'-'.Carbon::now()->format('ymd').'.'.$image->getClientOriginalExtension();
            $image->move(public_path("upload/product/$id"), $name);

            $productImage = Product::findOrFail($id);
            $productImage->image = $name;
            $productImage->save();
        }

        return redirect('/product-list')->with('success', 'Product Succesfully Added!');
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', 'Item Deleted!');
    }
}
