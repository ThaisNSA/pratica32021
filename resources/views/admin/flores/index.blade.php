@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <table class="highlight">
            <thead>
                <tr>
                    <th>Tipos de Flores</th>
                    <th>Cor</th>
                    <th>Preço(R$)</th>


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

                            <a href="{{route('admin.flores.edit', $flor->id)}}">
                            <span>
                                <i class="material-icons pink-text text-lighten-3">edit</i>
                            </span>
                        </a>

                            <form action="{{route('admin.flores.destroy', $flor->id)}}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')

                                <button style="border:0;background:transparent;" type="submit">
                                    <span style="cursor: pointer">
                                        <i class="material-icons purple-text text-darken-4">delete_forever</i>
                                    </span>
                                </button>
                            </form>

                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="2"> Não existem flores cadastradas.</td>
                    </tr>

                @endforelse

            </tbody>

        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.flores.create')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>



    </section>

@endsection

{{--@section('secundario')
    <p>Texto Secundário</p>
@endsection--}}
