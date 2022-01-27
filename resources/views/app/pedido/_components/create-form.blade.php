<form method="POST" action="{{route('pedido.store')}}">
    @csrf

    <select name="cliente_id"  class="borda-preta">
        @foreach ($info_cliente as $item)
            <option placeholder="cliente_id"  value="{{$item->id}}"> {{$item->nome}}</option>
        @endforeach
    </select>
    <button type="submit" class="borda-preta">Adicionar</button>
</form>