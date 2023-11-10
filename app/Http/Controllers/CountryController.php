<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    function countriesInV4() {
        $countries = array('Hungary', 'Slovakia', 'Poland', 'Czech Republic');
        return DB::table("country")
                ->select("country_id")
                ->whereIn("country", $countries)
                ->get();
    }

    
}
