<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
{!! HTML::style('semantic.min.css') !!}
{!! HTML::style('css/home.css') !!}

{!! HTML::script('semantic.min.js') !!}
</head>
<body>



<div class="ui inverted menu fixed">
    <div class="ui inverted menu barra ">
        <img style="height: 40px;margin-right: 10px;" src="{!! URL::to('images/logo_enera_blanco.png') !!}" alt="">
        <a class="active item">Home </a>
        <a class="active item">Estado de servicios </a>
        <a class="item">Control de proyectos </a>
        <a class="item">about us </a>

        <div class="right menu">
            <a class="item">Sign out</a >
            <i class="sign out icon big icono"></i>
            <a class="item">Help</a>
        </div>

    </div>
</div>


<div class="ContenedorMain">
    @yield('content')

    @include('footer.footer')
</div>


</body>
</html>

