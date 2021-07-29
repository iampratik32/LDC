<?php

namespace App\Http\Controllers;

use App\Models\Help;
use App\Models\Program;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('Admin/Help/index',[
            'all'=>Help::all(),
        ]);
    }

    public function create(){
        return view('Admin/Help/create');
    }

    public function show($id){
        return view('Admin/Help/show',[
            'help'=>Help::findOrFail($id),
        ]);
    }

    public function store(){
        $data = request()->validate([
            'Description'=>'required',
        ]);

        Help::create([
            'description'=>$data['Description']
        ]);
        return redirect('/admin/helps');

    }

    public function edit($id){
        return view('Admin/Help/edit',[
            'help'=>Help::findOrFail($id),
        ]);
    }

    public function update(){
        $data = request()->validate([
            'Description'=>'required',
        ]);
        $id = request('id');
        $p = Help::findOrFail($id);

        $p->update([
            'description'=>$data['Description'],
        ]);

        return redirect('/admin/helps');

    }

    public function destroy(){
        $id = request('id');
        $p = Help::findOrFail($id);
        $p->delete();
        return redirect('admin/helps');
    }
}
