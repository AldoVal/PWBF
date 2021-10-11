<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;

class EditSantri extends Controller
{
    public function index(){
        $santri = DB::table('santri')->get();
        return view('editsantri',['santri'=>$santri]);
    }
}
