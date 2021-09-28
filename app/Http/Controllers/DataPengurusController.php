<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DataPengurusController extends Controller
{
    public function index(){
        $pengurus = DB::table('pengurus')->get();

        return view('indexPengurus',['pengurus' => $pengurus]);
    }
}
