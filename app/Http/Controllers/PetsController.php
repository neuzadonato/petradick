<?php

namespace App\Http\Controllers;

use App\Models\Pet;

use Illuminate\Http\Request;

class PetsController extends Controller
{
    /**
     * 
     * lista todos os pets cadastrados
    */

    public function index()
    {
        // Pega todos os registos da tabela relacionada ao modelo Pet
        $pets = Pet::all();

        return view('pets.index', compact('pets'));
    }

    /**
     * Mostra o formulário para criar um novo pet
     */
    public function create()
    {
        //
    }

    /**
     * Armazena um novo pet
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Mostra um pet específico
     */
    public function show($id)
    {
        //
    }

    /**
     * Mostra o formulário para editar um gato específico
     */
    public function edit($id)
    {
        //
    }

    /**
     * Atualiza um pet específico
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove um pet específico
     */
    public function destroy($id)
    {

    }
}
