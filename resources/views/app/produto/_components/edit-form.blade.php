<form method="POST" action="{{route('produto.update', ['produto'=>$produto->id])}}">
    @method('PUT')
    @csrf

    <input type="text" value="{{$produto->nome ?? old('nome')}}" name="nome" placeholder="Nome" class="borda-preta">
    {{$errors->has('nome') ? $errors->first('nome') : ''}}
    <input type="text" value="{{$produto->descricao ?? old('descricao')}}" name="descricao"placeholder="descricao" class="borda-preta">
    {{$errors->has('descricao') ? $errors->first('descricao') : ''}}

    <input type="text" value="{{$produtoo->peso ?? old('peso')}}" name="peso"placeholder="peso" class="borda-preta">
    {{$errors->has('peso') ? $errors->first('peso') : ''}}

    <select name="unidade_id">
        <option>Selecione uma unidade</option>
        @foreach($unidades as $unidade)
        <option value="{{$unidade->id}}" {{($produto->unidade_id ?? old('unidade_id'))==$unidade->id ? 'selected' : ''}}>{{$unidade->id}}</option>
        @endforeach
    </select>
    <button type="submit" class="borda-preta">Adicionar</button>
</form>
