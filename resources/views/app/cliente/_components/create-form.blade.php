<form method="POST" action="{{route('cliente.store')}}">
    @csrf

    <input type="text" name="nome" placeholder="Nome" class="borda-preta">
    <button type="submit" class="borda-preta">Adicionar</button>
</form>