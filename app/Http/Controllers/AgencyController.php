<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Product;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        $agencies= Agency::with('city','country','town')->limit(10)->get();
        return view('agency_list',compact('agencies'));
    }

    public function show(Request $request)
    {
        $agency= Agency::where('SIRKET_ID', $request->id)->with('agents','city','country','town')->firstOrFail();
        $products=Product::where('SIRKET_ID',$request->id)->with(Product::relationships())->get();
        return view('agency_profile',compact('agency','products'));
    }

    public function products(Request $request)
    {
        return Agency::where('SIRKET_ID', $request->id)->with('products')->firstOrFail();
    }

    public function agents(Request $request)
    {
        return Agency::where('SIRKET_ID', $request->id)->with('agents')->firstOrFail();
    }
}
