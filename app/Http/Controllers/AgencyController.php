<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Product;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        $title='Ofislerimiz';
        $agencies= Agency::with('city','country','town')->paginate(10);
        return view('agency_list',compact('agencies','title'));
    }

    public function show(Request $request)
    {
        $title='Ofis Bilgileri';
        $agency= Agency::where('SIRKET_ID', $request->id)->with('agents','city','country','town')->firstOrFail();
        $products=Product::where('SIRKET_ID',$request->id)->with(Product::relationships())->paginate(10);
        return view('agency_profile',compact('agency','products','title'));
    }


}
