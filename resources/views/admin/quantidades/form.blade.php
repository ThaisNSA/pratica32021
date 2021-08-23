@extends('admin.layouts.principal')

@section('conteudo-principal')

<section class="section">

    <form action="{{$action}}" method= "POST">
        @csrf

        <div class="input-field">
            <input type="text" name="titulo" id="titulo"/>
            <label for="titulo">Recado</label>
        </div>


        <div class="input-field">
            <select name="flor_id" id="flor_id">
                <option value="" disabled selected> Selecione uma Flor</option>


            @foreach ($flores as $flor)
            <option value="{{$flor->id}}">{{$flor->nome}}</option>
            @endforeach

        </select>

        <label for="flor_id">Flor</label>

        </div>

        <div class="input-field">
            <select name="tipo_id" id="tipo_id">
                <option value="" disabled selected> Selecione um Ambiente</option>


            @foreach ($tipos as $tipo)
            <option value="{{$tipo->id}}">{{$tipo->nome}}</option>
            @endforeach
            </select>

            <select name="tamanho" id="tamanho">
                <option value="" disabled selected> Selecione um Tamanho</option>


            @foreach ($tamanhos as $tamanho)
            <option value="{{$tamanho->id}}">{{$tamanho->nome}}</option>
            @endforeach

        </select>

        <label for="tipo_id">Ambiente</label>

        </div>

        <div>
            @foreach ($finalidades as $finalidade)
            <span>
                <label stylo="margin-right:30px">
                    <input type="radio" name="finalidade_id" id="finalidade_id"
                    class="with-gap" value="{{$finalidade->id}}"/>
                    <span>{{$finalidade->nome}}</span>
                </label>
            </span>

            @endforeach


        </div>

        <div class="row">


            <div class="input-field col s4">
                <input type="number" name="unidade" id="unidade"/>
                <label for="unidade">Unidades de Flores</label>
            </div>

            <div class="input-field col s4">
                <input type="number" name="Buque" id="Buque"/>
                <label for="Buque">Buquê</label>
            </div>

             <div class="input-field col s4">
                <input type="number" name="sementes" id="sementes"/>
                <label for="sementes">Sementes</label>
            </div>
        </div>


        <div class="row">
            <div class="input-field col s4">
                <input type="text" name="rua" id="rua"/>
                <label for="rua">Rua</label>
            </div>

            <div class="input-field col s2">
                <input type="number" name="numero" id="numero"/>
                <label for="numero">Número</label>
            </div>

            <div class="input-field col s2">
                <input type="text" name="complemento" id="complemento"/>
                <label for="complemento">Complemento</label>
            </div>

            <div class="input-field col s4">
                <input type="text" name="bairro" id="bairro"/>
                <label for="bairro">Bairro</label>
            </div>

            <div class="input-field col s12">
                <textarea name="referencia" id="referencia" class="materialize-textarea"></textarea>
                <label for="referencia">Ponto de Referência</label>
            </div>
        </div>

        <div class="right-align">
    <a class="btn-flat waves-effect" href="{{route('admin.quantidades.index')}}">Cancelar</a>
    <button class="btn waves-effect waves-light" type="submit">
        Salvar
    </button>
</div>
    </form>
</section>

@endsection
