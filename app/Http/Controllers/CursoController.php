<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJersey;
use App\Models\Jersey;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $jerseys = Jersey::orderBy('id', 'desc')->paginate();
        return view('jerseys.index', compact('jerseys'));
    }

    public function create()
    {

        return view('jerseys.create');;
    }

    public function store(StoreJersey $request)
    {
        $jersey = new Jersey();

        $jersey->name = $request->name;
        $jersey->description  = $request->description;
        $jersey->categoria = $request->categoria;

        $jersey->save();
        return redirect()->route('jerseys.show', $jersey);
    }

    public function show(Jersey $jersey)
    {
        return view('jerseys.show', compact('jersey'));
    }

    public function edit(Jersey $jersey)
    {
        return view('jerseys.edit', compact('jersey'));
    }

    public function update(Request $request, Jersey $jersey)
    {
        $request->validate([

            'name' => 'required|min:3',
            'description' => 'required',
            'categoria' => 'required'

        ]);

        $jersey->name = $request->name;
        $jersey->description  = $request->description;
        $jersey->categoria = $request->categoria;

        $jersey->save();
        return redirect()->route('jerseys.show', $jersey);
    }
}
