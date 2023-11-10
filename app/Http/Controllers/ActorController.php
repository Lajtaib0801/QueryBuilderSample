<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller
{
    function actors() {
        $actors = DB::table('actor')->get();
        return $actors;
    }

    function actorsByFirstname($firstname) {
        $actors = DB::table('actor')
                    ->where('first_name', '=', $firstname)
                    ->get();
        return $actors;
    }

    function actorsByName($firstname, $lastname) {
        $actors = DB::table('actor')
                    ->where('first_name', '=', $firstname)
                    ->where('last_name', $lastname)
                    ->get();
        return $actors;
    }

    function actorsCount() {
        return DB::table('actor')->count();
    }

    function actorsCountByFirstname($firstname) {
        return DB::table('actor')
                ->where('first_name', $firstname)
                ->count();
    }

    function actorsCountByName() {
        return DB::table('actor')
                ->select('first_name', DB::raw('COUNT(*) AS countActors'))
                ->groupBy('first_name')
                ->orderBy('countActors', 'desc')
                ->get();
    }
}
