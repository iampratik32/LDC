<?php

namespace App\Http\Controllers;

use App\Models\Need;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminTestimonialController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('Admin/Testimonial/index',[
            'all'=>DB::table('testimonials')->orderBy('placement')->get(),
        ]);
    }
    public function create(){
        return view('Admin/Testimonial/create');
    }

    public function update(){
        $data = request()->validate([
            'Title'=>'required',
            'Country'=>'required',
        ]);
        $id = request('id');
        $img = request('Image');
        $imagePath ="";
        $test = Testimonial::findOrFail($id);
        if($img!=null){
            $imagePath = request('Image')->store('uploads','public');
            Storage::delete($test->image);
        }
        else{
            $imagePath=$test->image;
        }

        $test->update([
            'name'=>$data['Title'],
            'country'=>$data['Country'],
            'date'=>request('Date'),
            'description'=>request('Description'),
            'purpose'=>request('Purpose'),
            'image'=>$imagePath
        ]);

        return redirect('/admin/testimonial');

    }

    public function store(){
        $data = request()->validate([
            'Title'=>'required',
            'Country'=>'required',
        ]);
        $img = request('Image');
        $imagePath="";
        if ($img!=null){
            $imagePath = request('Image')->store('uploads','public');
        }
        $test = new Testimonial();
        $test->create([
            'name'=>$data['Title'],
            'country'=>$data['Country'],
            'purpose'=>request('Purpose'),
            'date'=>request('Date'),
            'description'=>request('Description'),
            'image'=>$imagePath,
            'placement'=>sizeof(Testimonial::all()),
        ]);

        return redirect('/admin/testimonial');
    }

    public function show($id){
        return view('Admin/Testimonial/show',[
            'need'=>Testimonial::findOrFail($id),
        ]);
    }

    public function destroy(){
        $id = request('id');
        $p = Testimonial::findOrFail($id);
        $p->delete();
        return redirect('admin/testimonial');
    }

    public function edit($id){
        return view('Admin/Testimonial/edit',[
            'need'=>Testimonial::findOrFail($id),
        ]);
    }

}
