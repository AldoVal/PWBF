<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;

class DetailPeran extends Controller
{
    public function index(){
        $user = DB::table('detailperan')->get();
        return view('detailperan',['detailperan'=>$user]);
    }
}
