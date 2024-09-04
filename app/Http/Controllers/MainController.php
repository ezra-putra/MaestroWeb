<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class MainController extends Controller
{
    public function index()
    {
        $category = Category::all();

        return view('welcome');
    }

    public function priceList()
    {
        $product = Product::all();
        return view('product.pricelist', compact('product'));
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        $recProduct = Product::where('id', '!=' , $id)->get();
        return view('product.details', compact('product', 'recProduct'));
    }

    public function soundSystem()
    {
        $product = Product::where('category_id', 1)->get();
        //dd($product);
        return view('product.pricelistcategorized', compact('product'));

    }

    public function lighting()
    {
        $product = Product::where('category_id', 2)->get();
        //dd($product);
        return view('product.pricelistcategorized', compact('product'));

    }
}
