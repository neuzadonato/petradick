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
        // Quando o usuário acessa a rota '/pets/novo' o controller PetsController irá executar a função create. A função create irá retornar a view gatos.create.
        return view('pets.create');
    }

    /**
     * Armazena um novo pet
     */
    
    public function store(Request $requisicao)

    {
        // cria um novo objeto do tipo pets em branco
        $pet = new Pet();

        // preenche os camposdo objeto com os dados da requisição
        $pet->nome = $requisicao->nome;
        $pet->raca = $requisicao->raca;
        $pet->idade = $requisicao->idade;
        $pet->sexo = $requisicao->sexo;
        $pet->cor = $requisicao->cor;
        $pet->pesgrafia = $requisicao->petsgrafia;

        // Salva o objeto no banco de dados 
        $pet->save();

        // Redireciona para a página de detalhes do pet
        return redirect()->route('pets.show', $pet->id);

    }

    /**
     * Mostra um pet específico
     */
    public function show($id)
    {
        //
    }

    /**
     * Mostra o formulário para editar um pet específico
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
