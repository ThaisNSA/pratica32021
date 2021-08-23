<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    <title>Cantinho das Flores</title>
</head>
<body>
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="index" class="brand-logo">Cantinho das Flores</a>
                <ul class="right">
                    <li>
                        <a href="{{route('admin.quantidades.index')}}">Modelos</a>
                    </li>

                    <li>
                        <a href="{{route('admin.flores.index')}}">Encomendas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('conteudo-principal')
    </div>

{{--<div>
    @yield('secundario')
</div>--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    @if (session('sucesso'))

            M.toast({html:"{{session('sucesso')}}"});
    @endif

    document.addEventListener('DOMContentLoaded', function (){
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
    });

</script>
</body>
</html>
