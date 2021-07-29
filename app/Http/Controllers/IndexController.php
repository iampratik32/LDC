<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sarfraznawaz2005\VisitLog\Facades\VisitLog;

class IndexController extends Controller
{
    public function index(){
        VisitLog::save();
        $obj = DB::table('objectives')->limit(3)->get();
        $gAll = DB::table('galleries')->orderBy('placement')->where('category','=','Objectives')
            ->where('shown','=',true)->limit(6)->get();
        return view('welcome',[
            'gallery'=>$gAll,
            'obj'=>$obj,
        ]);
    }

}
