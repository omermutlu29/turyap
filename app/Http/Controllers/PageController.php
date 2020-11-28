<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Degree;
use App\Models\FormPage;
use App\Models\Franchise;
use App\Models\HomePageAdType;
use App\Models\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PageController extends Controller
{

    public function index(){
        $rentings= Product::where('KATEGORI_ID',1)->limit(10)->get();
        $sellings= Product::where('KATEGORI_ID',2)->limit(10)->get();
        $homePageAds=HomePageAdType::where('type','ad')->limit(2)->get();
        $homePageThreePage=HomePageAdType::where('type','three_page')->limit(3)->get();
        $homePageTwoPage=HomePageAdType::where('type','two_page')->limit(2)->get();
        $degrees=Degree::limit(3)->get();
        $title='Anasayfa';
        return view('index',compact('title','sellings','rentings','homePageAds','homePageThreePage','homePageTwoPage','degrees'));
    }





    public function contact(){
        $title='İletişim';
        return view('contact',compact('title'));
    }

    public function page($page){

        $page=Page::where('slug',$page)->firstOrFail();
        $title=$page->title;
        return view('page',compact('page','title'));
    }

    public function franchise(){
        $title='Franchise';
        return view('franchise',compact('title'));
    }

    public function franchise_post(Request $request){
        $saved=Franchise::create($request->all());
        if ($saved){
            return redirect()->back()->with('notification','Başvurunuz gönderildi');
        }else{
            return redirect()->back()->with('notification','Başvurunuz gönderilemedi.');

        }
    }

}
