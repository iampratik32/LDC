<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $gAll = DB::table('galleries')->orderBy('placement')->get();
        return view('Admin/Gallery/index',[
            'all'=>Gallery::hydrate($gAll->all()),
        ]);
    }

    public function create(){
        return view('Admin/Gallery/create');
    }

    public function store(){
        $data = request()->validate([
            'Caption'=>'required',
            'Category'=>'required',
            'Image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $shown = false;
        if (request('Show')!=null){
            $shown=true;
        }
        $imagePath = request('Image')->store('uploads','public');

        $newImage = new Gallery();
        $newImage->create([
            'caption'=>$data['Caption'],
            'image'=>$imagePath,
            'category'=>$data['Category'],
            'shown'=>$shown,
            'placement'=>sizeof(Gallery::all()),
        ]);

        return redirect('/admin/gallery');
    }

    public function show($id){
        return view('Admin/Gallery/show',[
            'image'=>Gallery::findOrFail($id),
        ]);
    }

    public function destroy(){
        $id = request('id');
        $img = Gallery::findOrFail($id);
        $img->delete();
        return redirect('admin/gallery');
    }

    public function edit($id){
        return view('Admin/Gallery/edit',[
            'image'=>Gallery::findOrFail($id),
        ]);
    }

    public function update(){
        $data = request()->validate([
            'Caption'=>'required',
            'Category'=>'required',
        ]);
        $img = request('Image');
        $id = request('id');
        $imagePath="";
        $g = Gallery::findOrFail($id);
        if($img!=null){
            $imagePath = request('Image')->store('uploads','public');
            Storage::delete($g->image);
        }
        else{
            $imagePath=$g->image;
        }

        $shown = false;
        if (request('Show')!=null){
            $shown=true;
        }

        $g->update([
            'caption'=>$data['Caption'],
            'image'=>$imagePath,
            'category'=>$data['Category'],
            'shown'=>$shown,
        ]);

        return redirect('/admin/gallery');

    }

}
