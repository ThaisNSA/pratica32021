@extends('admin.layouts.principal')

@section('conteudo-principal')

<section class="section">

<form action="{{$action}}" method="POST">

    @csrf
@isset($flor)
@method('PUT')

@endisset

<div class="input-field">
    <input type="text" name="nome" id="nome" value="{{old('nome', $flor->nome ?? '')}}"/>
    <label for="nome">Nome</label>
    @error('nome')
        <span class="pink-text text-acent-4"><small>{{$message}}</small></span>
    @enderror
</div>

<div class="input-field">
    <input type="text" name="cor" id="cor" value="{{old('cor', $flor->cor ?? '')}}"/>
    <label for="cor">Cor</label>
    @error('cor')
    <span class="pink-text text-acent-4"><small>{{$message}}</small></span>
@enderror
</div>

<div class="input-field">
    <input type="text" name="preco" id="preco" value="{{old('preco', $flor->preco ?? '')}}" />
    <label for="preco">Preço(R$)</label>
    @error('preco')
    <span class="pink-text text-acent-4"><small>{{$message}}</small></span>
@enderror
</div>

<div class="right-align">
    <a class="btn-flat waves-effect" href="{{route('admin.flores.index')}}">Cancelar</a>
    <button class="btn waves-effect waves-light" type="submit">
        Salvar
    </button>
</div>

</form>

</section>

@endsection
