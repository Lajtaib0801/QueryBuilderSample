<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    function actors() {
        $actors = DB::table('actor')->get();
        return $actors;
    }
}
