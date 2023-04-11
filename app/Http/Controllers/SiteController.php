<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * mostra a página home
     *
     * @return void
     */
    public function index()
    {
        return view('home');
    }

    /**
     * mostra a página sobre
     *
     * @return void
     */
    public function sobre()
    {
        $soma = 10 + 20;
        echo "Página sobre $soma";
    }

    /**
     * mostra a página contato
     *
     * @return void
     */
    public function contato()
    {
        echo 'Página contato';
    }

    /**
     * mostra um serviço por id
     *
     * @return void
     */
    public function servico(int $id)
    {
        $servicos = [
            1 => [
                "nome" => "Lavagem de roupa",
                "descricao" => "Descrição longa..."
            ],
            2 => [
                "nome" => "Lavagem de coberta",
                "descricao" => "Descrição longa..."
            ],
            3 => [
                "nome" => "Lavagem de camisa",
                "descricao" => "Descrição longa..."
            ]
        ];

        return view('site.servico', [
            'servico' => $servicos[$id] 
        ]);
    }

    /**
     * mostra a página servicos
     *
     * @return void
     */
    public function servicos()
    {
        echo 'Página servicos';
    }
}