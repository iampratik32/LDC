<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sarfraznawaz2005\VisitLog\Facades\VisitLog;
use Sarfraznawaz2005\VisitLog\Models\VisitLog as ModelsVisitLog;

class ViewerController extends Controller
{
    public function index(){
        $vi = DB::table('visitlogs')->orderByDesc('id')->limit(50)->get();
        $total = VisitLog::all();
        $tv = sizeof($total);
        $v2 = DB::table('visitlogs')->select('os',DB::raw('count(*) as total'))->groupBy('os')
        ->limit(50)->get();

        return view('Admin/viewers',[
            'visitors'=>$vi,
            'tc'=>$v2,
            'tv'=>$tv,
        ]);
    }
}
