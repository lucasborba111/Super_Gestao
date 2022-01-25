<?php

namespace App\Http\Controllers;

use App\Produto;
use App\ProdutoDetalhe;
use App\Unidade;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $produtos = Produto::with('produto_detalhe')->paginate(10);

       /* foreach($produtos as $index => $produto){
            $produto_detalhe = ProdutoDetalhe::where('produto_id', $produto->id)->first();
            if(isset($produto_detalhe)){
                $produtos[$index]['altura'] = $produto_detalhe->altura;
                $produtos[$index]['largura'] = $produto_detalhe->largura;
                $produtos[$index]['comprimento'] = $produto_detalhe->comprimento;
            }
        }*/
        return view('app.produto.index', ['produtos'=>$produtos, 'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = Unidade::all();
        return view('app.produto.create', compact('unidades'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = ['nome'=>'required|min:3|string', 
                'descricao'=>'required|min:5|max:300|string',
                'peso'=>'required|integer',
                'unidade_id'=>'exists:unidades,id'];
        $feedback = ['required'=>'O campo deve ser preenchido',
                    'peso.integer'=>'O peso deve ser inserido somente em números',
                    'descricao.min'=>'Requer uma descrição mais detalhada',
                    'descricao.string'=>'O campo não pode ser preenchido dessa forma',
                    'unidade_id.exists'=>'A unidade informada não existe'];
                    $request->validate($rules, $feedback);
        Produto::create($request->all());
        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
        return view('app.produto.show', ['produto'=>$produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
        $unidade = Unidade::all();
        return view('app.produto.edit', ['produto'=>$produto, 'unidades'=>$unidade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
        $produto->update($request->all());
        return redirect()->route('produto.show', ['produto'=>$produto->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
        $produto->delete();
        return redirect()->route('produto.index');
    }
}
