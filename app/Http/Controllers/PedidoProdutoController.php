<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\PedidoProduto;
use App\Produto;
class PedidoProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Pedido $pedido)
    {
        //
        $produtos = Produto::all();
        $pedido->produtos;
        return view('app.pedido_produto.create', ['pedido'=>$pedido,'produtos'=>$produtos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pedido $pedido)
    {
        //
        /*
        $pedido_produto = new PedidoProduto();
        $pedido_produto->produto_id = $request->get('produto_id');
        $pedido_produto->pedido_id = $request->get('pedido_id');
        $pedido_produto->quantidade = $request->get('quantidade');
        
        $pedido_produto->save();
        */
        $pedido->produtos()->attach([
            $request->get('produto_id')=>['quantidade'=>$request->get('quantidade')]]);
        return redirect()->route('app.pedido_produto.create', ['pedido'=>$pedido]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
        $pedido->produtos()->detach($pedido->id);
        return redirect()->route('app.pedido_produto.create',['pedido'=>$pedido]);
    }
}
