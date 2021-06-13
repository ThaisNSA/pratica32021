@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <table class="highlight">
            <thead>
                <tr>
                    <th>Tipos de Flores</th>
                    <th>Cor</th>
                    <th>Preço</th>


                    <th class="right-align">Opções</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($flores as $flor)
                    <tr>
                        <td>{{$flor->nome}}</td>
                        <td>{{$flor->cor}}</td>
                        <td>{{$flor->preco}}</td>

                        <td class="right-align">
                            <a class="waves-effect waves-light #f48fb1 pink lighten-3
                            btn-small">Editar</a>
                            <a class="waves-effect waves-light black btn-small">Deletar</a>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="2"> Não existem flores cadastradas.</td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </section>

@endsection

{{--@section('secundario')
    <p>Texto Secundário</p>
@endsection--}}
