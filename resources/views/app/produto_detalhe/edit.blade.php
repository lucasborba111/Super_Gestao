@extends('app.layouts.basico')
@section('titulo', 'Detalhes do Produto')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>Detalhes do Produto</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('produto_detalhe.index')}}">Voltar</a></li>
                <li><a href="">Consulta</a></li>

            </ul>
        </div>
        <div class="informacao-pagina" >           
                <div style="width: 30%; margin-left:auto;margin-right:auto;">
                    @include('app.produto_detalhe._components.create-form')
                </div>
        </div>
    </div>
    @endsection