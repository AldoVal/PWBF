<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// use illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class dataSantriController extends Controller
{
    public function index(){
        $santri = DB::table('santri')->get();

        return view('index',['santri' => $santri]);
    }
}
