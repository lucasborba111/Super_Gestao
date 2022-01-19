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
            <form action="app.fornecedor.editar" method="post">
     
            <table class="table table-hover" border="1" style="width: 80%; margin-left:auto;margin-right:auto;">
                    <tr>
                        <th>Nome</th>
                        <th>Site</th>
                        <th>Uf</th>
                        <th>E-mail</th>
                    </tr>

                    <tr>
                            @csrf
                            <td><input type="text" name="nome" placeholder="Nome" value="{{$fornecedor->nome}}"></td>
                            <td><input type="text" name="nome" placeholder="Nome" value="{{$fornecedor->site}}"></td>
                            <td><input type="text" name="nome" placeholder="Nome" value="{{$fornecedor->uf}}"></td>
                            <td><input type="text" name="nome" placeholder="Nome" value="{{$fornecedor->email}}"></td>
                    </tr>
                </table>     

                    <button type="submit" class="borda-preta">Atualizar</button>

        </form>

        </div>
    </div>
    @endsection