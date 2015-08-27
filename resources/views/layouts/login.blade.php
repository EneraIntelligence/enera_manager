<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    {!! HTML::style('semantic.min.css') !!}
    {!! HTML::style('css/login.css') !!}

    {!! HTML::script('semantic.min.js') !!}
</head>
<body>
<div class="contenedorLogin">
    @yield('content')
</div>
@include('footer.footer')
</body>

</html>