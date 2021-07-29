<?php

namespace App\Http\Controllers;

use App\Models\Need;
use App\Models\Objective;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ObjectiveController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('Admin/Objective/index',[
            'all'=>Objective::all(),
        ]);
    }

    public function create(){
        return view('Admin/Objective/create');
    }

    public function show($id){
        return view('Admin/Objective/show',[
            'objective'=>Objective::findOrFail($id),
        ]);
    }

    public function edit($id){

        return view('Admin/Objective/edit',[
            'objective'=>Objective::findOrFail($id),
        ]);
    }

    public function store(){
        $data = request()->validate([
            'Title'=>'required',
        ]);

        Objective::create([
            'title'=>$data['Title'],
            'description'=>request('Description'),
        ]);

        return redirect('/admin/objectives');

    }

    public function update(){
        $data = request()->validate([
            'Title'=>'required',
        ]);
        $id = request('id');
        $p = Objective::findOrFail($id);
        $p->update([
            'title'=>$data['Title'],
            'description'=>request('Description'),
        ]);
        return redirect('/admin/objectives');
    }

    public function destroy(){
        $id = request('id');
        $p = Objective::findOrFail($id);
        $p->delete();
        return redirect('admin/objectives');
    }
}
