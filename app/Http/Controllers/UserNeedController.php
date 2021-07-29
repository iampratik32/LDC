<?php

namespace App\Http\Controllers;

use App\Models\Need;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserNeedController extends Controller
{
    public function index(){
        $gallery = DB::table('galleries')->where('category','=','Needs')->get();
        return view('needs',[
            'obj'=>Need::all(),
            'gallery'=>$gallery,
        ]);
    }
}
