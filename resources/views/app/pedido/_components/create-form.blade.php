<form method="POST" action="{{route('pedido.store')}}">
    @csrf

    <input type="text" name="cliente_id" placeholder="cliente_id" class="borda-preta">
    <button type="submit" class="borda-preta">Adicionar</button>
</form>