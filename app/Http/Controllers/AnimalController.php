<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('welcome', compact('animals'));
    }

    public function create()
    {
        return view('pages/create');
    }

    public function store(Request $request)
    {
        $store = new Animal;
        $store->animal = $request->animal;
        $store->genre = $request->genre;
        $store->age = $request->age;

        $store->save();
        return redirect()->back();
    }

    public function show($id)
    {
        $show = Animal::find($id);
        return view('pages/show', compact('show'));
    }

    public function edit($id)
    {
        $edit = Animal::find($id);
        return view('pages/edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = Animal::find($id);
        $update->animal = $request->animal;
        $update->genre = $request->genre;
        $update->age = $request->age;

        $update->save();
        return redirect('/show-animal/'.$update->id);
    }

    public function destroy($id)
    {
        $destroy = Animal::find($id);
        $destroy->delete();
        return redirect('/');
    }
}
