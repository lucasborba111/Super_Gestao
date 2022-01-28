<form method="POST" action="{{route('app.pedido_produto.store', ['pedido'=>$pedido])}}">
    @csrf

    <select name="produto_id"  class="borda-preta">
        @foreach ($produtos as $produto)
            <option placeholder="Produto"  value="{{$produto->id}}"> {{$produto->nome}}</option>
        @endforeach
    </select>
    <input type="number" name="quantidade"  placeholder="Quantidade"> 

            <input type="hidden" name="pedido_id"  placeholder="Pedido"  value="{{$pedido->id}}"> 
    <button type="submit" class="borda-preta">Adicionar</button>
</form>