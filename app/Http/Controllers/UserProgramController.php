<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProgramController extends Controller
{
    public function index(){
        $gallery = DB::table('galleries')->where('category','=','Programs')->get();
        return view('program',[
            'obj'=>Program::all(),
            'gallery'=>$gallery,
        ]);
    }
}
