<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;

class DetailKemajuan extends Controller
{
    public function index(){
        $santri = DB::table('detailkemajuan')->get();
        return view('detailkemajuan',['detailkemajuan'=>$santri]);
    }
}
