<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Lista os clientes
     *
     * @return View
     */
    function index(): View 
    {
        $clients = Client::get();
        
        return view('clients.index')->with('clients', $clients);
    }
    
    /**
     * Mostra um cliente expecifico
     *
     * @param integer $id
     * @return View
     */
    function show(int $id): View 
    {
        $client = Client::find($id);
        
        return view('clients.show')->with('client', $client);
    }
    
    /**
     * Exibe o formulário de criação
     *
     * @return View
     */
    function create(): View {        
        return view('clients.create');
    }

    /**
     * Cria um cliente no banco de dados
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $dados = $request->except('_token');

        Client::create($dados);

        return redirect('/clients');
    }
    
    /**
     * Exibe o formuláro para edição
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $client = Client::find($id);

        return view('clients.edit', [
            "client" => $client
        ]);
    }
    
    /**
     * Atualiza o cliente no banco de dados
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $client = Client::find($id);

        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);
        
        return redirect('/clients');
    }

    /**
     * Apaga um cliente no banco de dados
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $client = Client::find($id);

        $client->delete();

        return redirect('/clients');
    }
}