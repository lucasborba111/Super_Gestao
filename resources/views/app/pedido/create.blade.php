@extends('app.layouts.basico')
@section('titulo', 'Adicionar pedidos ')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>pedidos</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('pedido.index')}}">Voltar</a></li>
                <li><a href="">Consulta</a></li>

            </ul>
        </div>
        <div class="informacao-pagina" >           
                <div style="width: 30%; margin-left:auto;margin-right:auto;">
                    @include('app.pedido._components.create-form')
                </div>
        </div>
    </div>
    @endsection