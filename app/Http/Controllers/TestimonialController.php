<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    public function index(){
        $ga = DB::table('testimonials')->orderBy('placement')->paginate('6')->oneachSide(2);
        return view('testimonial',[
            'ga'=>$ga,
        ]);
    }
}
