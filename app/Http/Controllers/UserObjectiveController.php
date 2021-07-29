<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserObjectiveController extends Controller
{
    public function index(){
        $gallery = DB::table('galleries')->where('category','=','Objectives')->get();
        return view('objective',[
            'obj'=>Objective::all(),
            'gallery'=>$gallery,
        ]);
    }
}
