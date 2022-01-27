<form method="POST" action="{{route('cliente.update', ['cliente'=>$cliente->id])}}">
    @method('PUT')
    @csrf

    <input type="text" value="{{$cliente->nome ?? old('nome')}}" name="nome" placeholder="Nome" class="borda-preta">
    {{$errors->has('nome') ? $errors->first('nome') : ''}}
    <button type="submit" class="borda-preta">Adicionar</button>
</form>
