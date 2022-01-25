@if(isset($produto_detalhe->id))
<form method="POST" action="{{route('produto_detalhe.update', ['produto_detalhe'=>$produto_detalhe->id])}}">
    @method('PUT')
    <h5>Informações do produto</h5>
    <p>Nome: {{$produto_detalhe->produto->nome}}</p>
    <p>Descrição: {{$produto_detalhe->produto->descricao}}</p>

@else
<form method="POST" action="{{route('produto_detalhe.store')}}">
@endif
    @csrf
    <input type="text" name="produto_id" placeholder="Produto Id" class="borda-preta">
    
    <input type="text" name="comprimento" placeholder="Comprimento" class="borda-preta">
    
    <input type="text" name="largura" placeholder="Largura" class="borda-preta">
   
    <input type="text" name="altura" placeholder="Altura" class="borda-preta">
         
    <select name="unidade_id">
        <option>Selecione uma unidade</option>
        @foreach($unidades as $unidade)
        <option value="{{$unidade->id}}" {{old('unidade_id')==$unidade->id ? 'selected' : ''}}>{{$unidade->id}}</option>
        @endforeach
    </select>

    <button type="submit" class="borda-preta">Adicionar</button>
</form>