<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    function replacementCost() {
        return DB::table("film")
                ->select("film_id", "title", "replacement_cost")
                ->whereBetween("replacement_cost", [20,30])
                ->orderBy("title")
                ->get();
    }

    function filmByMinMax($min, $max) {
        return DB::table("film")
                ->select("film_id", "title", "replacement_cost")
                ->whereBetween("replacement_cost", [$min,$max])
                ->orderBy("title")
                ->get();
    }
}
