<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrudsController extends Controller
{
    public function index()
    {
        $cruds = Crud::orderBy('first_name', 'asc')->paginate(8);
        return view('cruds.index', compact('cruds', $cruds));
    }

    public function create()
    {
        return view('cruds.create');
    }

    public function store(Request $request, Crud $crud)
    {
        $request->validate([
            'first_name' => 'required|min:2',
            'last_name' => 'required',
            'email' => 'required',
            'user_type' => 'required'
        ]);

        Crud::create(request(['first_name', 'last_name', 'email', 'user_type']));

        $request->session()->flash('message', 'User Info Added!');
        return redirect('/cruds');
    }

    public function show(Crud $crud)
    {
        $result = Crud::find($crud);
        return view('cruds.show', compact('crud', $result));
    }

    public function edit(Crud $crud)
    {
        return view('cruds.edit', compact('crud', $crud));
    }

    public function update(Crud $crud)
    {
        request()->validate([
            'email' => 'required',
            'user_type' => 'required'
        ]);

        $crud->update(request(['email', 'user_type']));
        
        request()->session()->flash('message', 'User info updated!');
        return redirect('/cruds');
    }

    public function destroy(Crud $crud)
    {
        $crud->delete();
        request()->session()->flash('message', 'Successfully deleted!');
        return redirect('/cruds');
    }
}
