<?php

namespace App\Http\Controllers;

use App\Models\Need;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserHelpController extends Controller
{
    public function index(){
        $gallery = DB::table('galleries')->where('category','=','Help')->get();
        return view('help',[
            'gallery'=>$gallery,
        ]);
    }
}
