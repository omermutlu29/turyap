<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function filter(Request $request)
    {
        $query = Product::query();

        if ($request->has('search_text') && $request->search_text != "") {
            $query->where('TANIM', 'like', '%' . $request->search_text . '%');
        }
        if ($request->has('category') && $request->category != "") {
            $query->where('KATEGORI_ID', $request->category);
        }

        if ($request->has('type') && $request->type != "") {
            $query->where('CINSI_ID', $request->type);
        }

        if ($request->has('bath_count') && $request->bath_count != "") {
            $query->where('BANYO_SAYISI_ID', $request->bath_count);
        }

        if ($request->has('room_count') && $request->room_count != "") {
            $query->where('ODA_SAYISI_ID', $request->room_count);
        }

        if ($request->has('min_price') && $request->min_price != "") {
            $query->where('FIYAT', '>=', $request->min_price);
        }

        if ($request->has('max_price') && $request->max_price != "") {
            $query->where('FIYAT', '<=', $request->max_price);
        }

        if ($request->has('min_place') && $request->min_place != "") {
            $query->where('ALAN', '>=', $request->min_place);
        }

        if ($request->has('max_place') && $request->max_place != "") {
            $query->where('ALAN', '<=', $request->max_place);
        }

        if($request->has('country') && $request->country !=""){
            $query->where('ULKE_ID', $request->country);
        }

        if($request->has('city') && $request->city !=""){
            $query->where('IL_ID', $request->city);
        }

        if($request->has('town') && $request->town !=""){
            $query->where('ILCE_ID', $request->town);
        }

        $products = ($query->paginate(10));

        return view('list', compact('products'));


    }

    public function index()
    {
        $relationships = Product::relationships();
        $products = (Product::with($relationships)->paginate(10));
        return view('list', compact('products'));
    }

    public function show(Request $request)
    {
        $product = Product::where('URUN_ID', $request->id)->with(Product::relationships())->firstOrFail();
        $arr = ($product->product_fields()->first());
        $fields = $arr->getAttributes();

        foreach ($fields as $key => $value) {
            if ($key == 'id' || $key == 'TUR_ID' || $key == 'KAYIT_ID') {
                unset($fields[$key]);
            }
            if ($arr[$key] == null) {
                unset($fields[$key]);
            }
        }
        return view('detail', compact('product', 'fields'));
    }
}
