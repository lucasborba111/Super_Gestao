@extends('app.layouts.basico')
@section('titulo', 'Adicionar cliente ')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>clientes</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('cliente.index')}}">Voltar</a></li>
                <li><a href="">Consulta</a></li>

            </ul>
        </div>
        <div class="informacao-pagina" >           
                <div style="width: 30%; margin-left:auto;margin-right:auto;">
                    @include('app.cliente._components.edit-form')
                </div>
        </div>
    </div>
    @endsection