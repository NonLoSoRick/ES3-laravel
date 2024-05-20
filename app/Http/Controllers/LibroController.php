<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Autore;
use App\Models\Categoria;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libri = Libro::all();
        return view('libri.index', compact('libri'));
    }

    public function create()
    {
        $autori = Autore::all();
        $categorie = Categoria::all();
        return view('libri.create', compact('autori', 'categorie'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titolo' => 'required',
            'autore_id' => 'required',
            'categorie' => 'required|array'
        ]);

        $libro = Libro::create($request->all());
        $libro->categorie()->attach($request->categorie);

        return redirect()->route('libri.index');
    }

    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libri.show', compact('libro'));
    }

    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        $autori = Autore::all();
        $categorie = Categoria::all();
        return view('libri.edit', compact('libro', 'autori', 'categorie'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titolo' => 'required',
            'autore_id' => 'required',
            'categorie' => 'required|array'
        ]);

        $libro = Libro::findOrFail($id);
        $libro->update($request->all());
        $libro->categorie()->sync($request->categorie);

        return redirect()->route('libri.index');
    }

    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return redirect()->route('libri.index');
    }
}
