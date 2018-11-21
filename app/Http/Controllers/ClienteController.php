<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Endereco;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente-novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->telefone = $request->input('telefone');
        $cliente->email = $request->input('email');
        
        $endereco = new Endereco();
        $endereco->rua = $request->input('rua');
        $endereco->cidade = $request->input('cidade');
        $endereco->bairro = $request->input('bairro');
        $endereco->numero = $request->input('numero');
        $endereco->uf = $request->input('uf');
        $endereco->cep = $request->input('cep');

        $cliente->save();
        $cliente->endereco()->save($endereco);
        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c = Cliente::find($id);
        return view('cliente-editar', compact('c'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->nome = $request->input('nome');
        $cliente->telefone = $request->input('telefone');
        $cliente->email = $request->input('email');
        
        $endereco = ['rua' => $request->input('rua'),
                        'cidade'=> $request->input('cidade'),
                        'bairro'=> $request->input('bairro'),
                        'numero'=> $request->input('numero'),
                        'uf'=> $request->input('uf'),
                        'cep'=> $request->input('cep')
                    ];
                    
        $cliente->save();
        $cliente->endereco()->update($endereco);
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->endereco()->delete();
        $cliente->delete();
        return redirect('/clientes');
    }
}
