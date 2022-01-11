{{ $slot }}
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    {{$errors->has('nome') ? $errors->first('nome') : ''}}

    <br>
    <input name="telefone" value="{{ old('telefone') }}"  type="text" placeholder="Telefone" class="{{ $classe }}">
        {{$errors->has('telefone') ? $errors->first('telefone') : ''}}
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    {{$errors->has('email') ? $errors->first('email') : ''}}

    <br>
    <select name="motivo_contato_id" class="{{ $classe }}">
    <option value="">Motivo do contato</option>
    @foreach($motivo_contatos as $index=>$value)
        <option value="{{$value->id}}" {{old('motivo_contato_id') == $value->id ? 'selected' : ''}}>{{$value->motivo_contato}}</option>
    @endforeach

    </select>

    <br>
    <textarea name="mensagem" class="{{ $classe }}">
            {{ (old('mensagem')!='') ? old('mensagem') : 'Preencha a caixa de mensagem!'}}

    </textarea>
    {{$errors->has('mensagem') ? $errors->first('mensagem') : ''}}

    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
