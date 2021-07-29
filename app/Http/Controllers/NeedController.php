<?php

namespace App\Http\Controllers;

use App\Models\Need;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NeedController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('Admin/Need/index',[
            'all'=>Need::all(),
        ]);
    }

    public function create(){
        return view('Admin/Need/create');
    }

    public function show($id){
        return view('Admin/Need/show',[
            'need'=>Need::findOrFail($id),
        ]);
    }

    public function edit($id){
        return view('Admin/Need/edit',[
            'need'=>Need::findOrFail($id),
        ]);
    }

    public function store(){
        $data = request()->validate([
            'Title'=>'required',
        ]);

        Need::create([
            'title'=>$data['Title'],
            'description'=>request('Description'),
        ]);

        return redirect('/admin/needs');

    }

    public function update(){
        $data = request()->validate([
            'Title'=>'required',
        ]);
        $id = request('id');
        $p = Need::findOrFail($id);

        $p->update([
            'title'=>$data['Title'],
            'description'=>request('Description'),
        ]);
        return redirect('/admin/needs');
    }

    public function destroy(){
        $id = request('id');
        $p = Need::findOrFail($id);
        $p->delete();
        return redirect('admin/needs');
    }
}
