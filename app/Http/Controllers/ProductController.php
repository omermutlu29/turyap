<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function filter(Request $request)
    {

        if ($request->has('search') && $request->search != '') {
            if ($request->search != 'danisman') {
                $title = 'İlanlar';
                $query = Product::query();
                if ($request->has('search_text') && $request->search_text != "") {
                    $query->where('TANIM', 'like', '%' . $request->search_text . '%');
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

                if ($request->has('country') && $request->country != "") {
                    $query->where('ULKE_ID', $request->country);
                }

                if ($request->has('city') && $request->city != "") {
                    $query->where('IL_ID', $request->city);
                }

                if ($request->has('town') && $request->town != "") {
                    $query->where('ILCE_ID', $request->town);
                }
                if ($request->search == 'satilik') {
                    $query->where('KATEGORI_ID', 2);
                } else if ($request->search == 'kiralik') {
                    $query->where('KATEGORI_ID', 1);
                } else if ($request->search == 'office') {

                    $query->where('CINSI_ID', 2);
                }
                $products = $query->paginate(10);
                return view('list', compact('products', 'title'));

            } else {
                return $this->filterAgent($request);
            }
        }else{
            return redirect(route('index'));
        }
    }


    public function index()
    {
        $title = 'İlanlar';
        $relationships = Product::relationships();
        $products = (Product::with($relationships)->paginate(10));
        return view('list', compact('products', 'title'));
    }

    public function show(Request $request)
    {
        $title = 'İlan Detay';
        $product = Product::where('URUN_ID', $request->id)->with(Product::relationships())->firstOrFail();

        $arr = ($product->product_fields()->first());
        $fields = $arr->getAttributes();

        foreach ($fields as $key => $value) {
            if ($key == 'ID' || $key == 'TUR_ID' || $key == 'KAYIT_ID') {
                unset($fields[$key]);
            }
            if ($arr[$key] == null) {
                unset($fields[$key]);
            }
        }
        return view('detail', compact('product', 'fields', 'title'));
    }

    public function filterAgent(Request $request)
    {
        $title = 'Danışmanlar';
        $agents = Agent::where('ADI', 'like', '%' . $request->search_text . '%')->paginate(10);
        return view('agents_list', compact('agents', 'title'));
    }
}
