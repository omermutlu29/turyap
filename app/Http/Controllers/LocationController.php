<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Town;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getCities(Country $country)
    {
        $vars=City::where('countryID',$country->countryID)->get();
        $str='';
        foreach ($vars as $var){
            $str.='<option value="'.$var->cityID.'">'.$var->city.'</option>';
        }
        return $str;
    }

    public function getTowns(City $city)
    {
        $vars=Town::where('cityID',$city->cityID)->get();
        $str='';
        foreach ($vars as $var){
            $str.='<option value="'.$var->townID.'">'.$var->town.'</option>';
        }
        return $str;
    }
}
