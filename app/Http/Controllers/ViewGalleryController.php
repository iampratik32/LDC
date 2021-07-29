<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewGalleryController extends Controller
{
    public function index(){
        $ga = DB::table('galleries')
            ->where('shown','=',true)->orderBy('placement')->paginate('12')->oneachSide(3);
        return view('gallery',[
            'gallery'=>$ga,
        ]);
    }
}
