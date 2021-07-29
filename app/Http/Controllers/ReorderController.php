<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReorderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('Admin/reorder');
    }

    public function update(Request $request){
        $ids = $request->get('id');
        $pos = $request->get('pos');
//        $what=  "";
//        for ($i=0; $i<sizeof($value);$i++){
//            $what=$value[$i]->key;
//        }
        for ($i=0; $i<sizeof($ids);$i++){
            $g = Gallery::findOrFail($ids[$i]);
            if($g->placement!=$pos[$i]){
                //update
                $g->update([
                    'placement'=>$pos[$i],
                ]);
            }
        }

        return response()->json(['response' => $ids[0].'and'.$pos[0]]);
    }
}
