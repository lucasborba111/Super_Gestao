<form method="POST" action="{{route('pedido.update', ['pedido'=>$pedido->id])}}">
    @method('PUT')
    @csrf

    <input type="text" value="{{$pedido->cliente_id ?? old('cliente_id')}}" name="cliente_id" placeholder="{{$pedido->cliente_id ?? old('cliente_id')}}" class="borda-preta">
    <button type="submit" class="borda-preta">Editar</button>
</form>
