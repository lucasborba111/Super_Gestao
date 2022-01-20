@extends('app.layouts.basico')
@section('titulo', 'Fornecedor')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>Fornecedores</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href=" {{ route('app.fornecedor.listar') }}">Consulta</a></li>

            </ul>
        </div>
        <div class="informacao-pagina" >            

                <div style="width: 30%; margin-left:auto;margin-right:auto;">
                    {{$msg}}
                    <form method="POST" action="{{ route('app.fornecedor.adicionar') }}">
                        <input type="hidden" name="id" value="{{$fornecedor->id ?? old('id')}}">

                        @csrf

                        <input type="text" name="nome" value="{{$fornecedor->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
                        {{ $errors->has('nome') ? $errors->first('nome') : ''}}
                        <input type="text" name="site" value="{{ $fornecedor->site ?? old('site') }}" placeholder="Site" class="borda-preta">
                        {{ $errors->has('site') ? $errors->first('site') : ''}}
                        <input type="text" name="uf" value="{{ $fornecedor->uf ?? old('uf') }}" placeholder="uf" class="borda-preta">
                        {{ $errors->has('uf') ? $errors->first('uf') : ''}}
                        <input type="text" name="email" value="{{ $fornecedor->email ?? old('email') }}" placeholder="email" class="borda-preta">
                        {{ $errors->has('email') ? $errors->first('email') : ''}}
                        <button type="submit" class="borda-preta">Adicionar</button>
                    </form>

                </div>
        </div>
    </div>
    @endsection