@extends('app.layouts.basico')
@section('titulo', 'Adicionar produtos ao pedido ')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>pedidos</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="">Voltar</a></li>
                <li><a href="">Consulta</a></li>

            </ul>
        </div>
        <div class="informacao-pagina" >           

                <div style="width: 30%; margin-left:auto;margin-right:auto;">
                    <table class="table table-hover">
                      
                       
                        <tr>
                            <td>
                                Id
                            </td>
                            <td>
                                Nome do Produto
                            </td>
                            <td>
                                Data de inclusão
                            </td>
                        </tr>
                        @foreach ($pedido->produtos as $item)
                        <tr>
                            <td>
                                {{$item->id}}
                            </td>
                            <td>
                                {{$item->nome}}
                            </td>
                            <td>
                                {{$item->created_at->format('d/m/Y')}},
                            </td>
                            <td>
                                <form id="form_{{$pedido->id}}_{{$produto->id}}" method="post" action="{{route('app.pedido_produto.destroy', ['pedido'=>$pedido,'produto'=>$produto])}}">
                                    @method('DELETE')
                                    @csrf
                                    <a href="" onclick="document.getElementById('form_{{$pedido->id}}_{{$produto->id}}').submit()">
                                        Excluir
                                    </a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>                    <br>
                    <br>                    <br>
                    @include('app.pedido_produto._components.create-form')
                </div>
        </div>
    </div>
    @endsection