<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class dataSantriController extends Controller
{
    public function index(){
        $santri = DB::table('santri')->get();

        return view('index',['santri' => $santri]);
    }
}
