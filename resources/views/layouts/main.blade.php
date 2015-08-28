<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
{!! HTML::style('semantic.min.css') !!}
{!! HTML::style('css/home.css') !!}

{!! HTML::script('semantic.min.js') !!}
{!! HTML::script('js/jquery-2.1.4.min.js') !!}
{!! HTML::script('js/main.js') !!}

</head>
<body>



<div class="ui inverted menu fixed">
    <div class="ui inverted menu barra ">
        <img style="height: 40px;margin-right: 10px;" src="{!! URL::to('images/logo_enera_blanco.png') !!}" alt="">
        <a id="home" url="test" class="active item">Home </a>
        <a id="estado" url="inspector" class="item">Estado de servicios </a>
        <a id="proyectos" url="test" class="item">Control de proyectos </a>
        <a id="menu" url="about" class="item">about us </a>

        <div class="right menu">
            <a id="salir" url="logout" class="item chico " salir="logout" >Sign out <i class="sign out icon big icono"></i></a >
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

