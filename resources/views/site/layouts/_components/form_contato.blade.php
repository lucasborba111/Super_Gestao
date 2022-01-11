{{ $slot }}
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="telefone" value="{{ old('telefone') }}"  type="text" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" value="{{ old('email ') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="motivo_contato" class="{{ $classe }}">
    <option >Motivo do contato</option>
    @foreach($motivo_contatos as $index=>$value)
        <option value="{{$value->id}}" {{old('motivo_contato') == $value->id ? 'selected' : ''}}>{{$value->motivo_contato}}</option>
    @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}">
            {{ (old('mensagem')!='') ? old('mensagem') : 'Preencha a caixa de mensagem!'}}

    </textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
<pre>
        {{print_r($errors)}}
</pre>