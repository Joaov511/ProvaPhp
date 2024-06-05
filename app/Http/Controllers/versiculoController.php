<?php

namespace App\Http\Controllers;

use App\Models\Versiculo;
use Illuminate\Http\Request;

class VersiculoController extends Controller
{
    public function index()
    {
        $versiculos = Versiculo::all();
        return view('versiculos.index', compact('versiculos'));
    }

    public function create()
    {
        return view('versiculos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'passagem' => 'required|string',
            'texto' => 'required|string',
        ]);

        Versiculo::create($request->all());

        return redirect()->route('versiculos.index')->with('success', 'Versículo criado com sucesso!');
    }

    public function destroy($id)
    {
        $versiculo = Versiculo::findOrFail($id);
        $versiculo->delete();

        return redirect()->route('versiculos.index')->with('success', 'Versículo deletado com sucesso!');
    }

    public function edit($id)
    {
        $versiculo = Versiculo::findOrFail($id);
        return view('versiculos.edit', compact('versiculo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'passagem' => 'required|string',
            'texto' => 'required|string',
        ]);

        $versiculo = Versiculo::findOrFail($id);
        $versiculo->update($request->all());

        return redirect()->route('versiculos.index')->with('success', 'Versículo atualizado com sucesso.');
    }
}