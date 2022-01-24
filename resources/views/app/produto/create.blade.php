@extends('app.layouts.basico')
@section('titulo', 'Adicionar Produto ')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>Produtos</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('produto.index')}}">Voltar</a></li>
                <li><a href="">Consulta</a></li>

            </ul>
        </div>
        <div class="informacao-pagina" >           
                <div style="width: 30%; margin-left:auto;margin-right:auto;">
                    <form method="POST" action="{{route('produto.store')}}">
                        @csrf

                        <input type="text" name="nome" placeholder="Nome" class="borda-preta">
                        {{$errors->has('nome') ? $errors->first('nome') : ''}}
                        <input type="text" name="descricao"placeholder="descricao" class="borda-preta">
                        {{$errors->has('descricao') ? $errors->first('descricao') : ''}}

                        <input type="text" name="peso"placeholder="peso" class="borda-preta">
                        {{$errors->has('peso') ? $errors->first('peso') : ''}}

                        <select name="unidade_id">
                            <option>Selecione uma unidade</option>
                            @foreach($unidades as $unidade)
                            <option value="{{$unidade->id}}" {{old('unidade_id')==$unidade->id ? 'selected' : ''}}>{{$unidade->id}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="borda-preta">Adicionar</button>
                    </form>

                </div>
        </div>
    </div>
    @endsection