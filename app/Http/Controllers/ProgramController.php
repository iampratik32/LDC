<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('Admin/Program/index',[
            'all'=>Program::all(),
        ]);
    }

    public function create(){
        return view('Admin/Program/create');
    }

    public function show($id){
        return view('Admin/Program/show',[
            'program'=>Program::findOrFail($id),
        ]);
    }

    public function destroy(){
        $id = request('id');
        $p = Program::findOrFail($id);
        $p->delete();
        return redirect('admin/programs');
    }

    public function edit($id){
        return view('Admin/Program/edit',[
            'program'=>Program::findOrFail($id),
        ]);
    }

    public function update(){
        $data = request()->validate([
            'Title'=>'required',
            'Description'=>'required',
        ]);
        $id = request('id');
        $p = Program::findOrFail($id);

        $p->update([
            'title'=>$data['Title'],
            'description'=>$data['Description'],
        ]);

        return redirect('/admin/programs');

    }

    public function store(){
        $data = request()->validate([
            'Title'=>'required',
            'Description'=>'required',
        ]);

        Program::create([
            'title'=>$data['Title'],
            'description'=>$data['Description'],
        ]);

        return redirect('/admin/programs');
    }
}
