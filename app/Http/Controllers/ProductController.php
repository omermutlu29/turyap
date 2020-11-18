<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function filter(Request $request)
    {
        $query = Product::query();

        if ($request->has('search_text') && $request->search_text != ""){
            $query->where('tanim','like','%'.$request->search_text.'%');
        }
        if ($request->has('category') && $request->category != "") {
            $query->where('kategori_id', $request->category);
        }

        if ($request->has('type') && $request->type != "") {
            $query->where('cinsi_id', $request->type);
        }

        if ($request->has('bath_count') && $request->bath_count != "") {
            $query->where('banyo_sayisi_id', $request->bath_count);
        }

        if ($request->has('room_count') && $request->room_count != "") {
            $query->where('oda_sayisi_id', $request->room_count);
        }

        dd($query->get());


    }

    public function index()
    {
        $relationships = Product::relationships();
        return (Product::with($relationships)->limit(5)->get());
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
