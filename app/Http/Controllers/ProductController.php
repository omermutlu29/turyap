<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function filter(Request $request)
    {
        $query=Product::query();

    }

    public function index()
    {
        $relationships = Product::relationships();
        return ( Product::with($relationships)->limit(5)->get());
    }

    public function show(Request $request)
    {
        $product = Product::where('URUN_ID', $request->id)->with(Product::relationships())->firstOrFail();
        $arr =($product->product_fields()->first());
        $fields= $arr->getAttributes();

        foreach ($fields as $key => $value) {
            if ($key=='id' || $key=='TUR_ID' || $key=='KAYIT_ID'){
                unset($fields[$key]);
            }
            if ($arr[$key] == null) {
                unset($fields[$key]);
            }
        }
        return view('detail', compact('product','fields'));
    }
}
