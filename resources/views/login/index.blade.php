@extends('layouts.login')
@section('content')
    <div class="ui two column middle aligned very relaxed stackable grid">
        <div class="center aligned column">
            <img class="logo" src="../images/enera_logo.png" alt="">
        </div>
        <div class="ui vertical divider" style="padding: 0px !important;">
            <span style="width: 0px; border-right: 0px solid rgba(34,36,38,0.15);
            border-left: 1px solid rgba(34,36,38,0.15); margin-left: 2px; padding: 6px 0px;"></span>
        </div>
        <div class="column">
            @if(Session::has('error'))
                <span style="color:red;">{{ Session::get('error') }}</span>
            @endif

            {!! Form::open(['route'=>'auth.login']) !!}
            <div class="ui form">
                <div class="field">
                    <label>Username</label>

                    <div class="ui left icon input">
                        {!! Form::text('email',null,['placeholder'=>'Correo']) !!}
                        <i class="at icon"></i>
                    </div>
                    @foreach($errors->get('email') as $error)
                        <span style="color:red;">{{ $error }}</span>
                    @endforeach
                </div>
                <div class="field">
                    <label>Password</label>

                    <div class="ui left icon input">
                        {!! Form::password('password',['placerholder'=>'Contraseña']) !!}
                        <i class="lock icon"></i>
                    </div>
                    @foreach($errors->get('password') as $error)
                        <span style="color:red;">{{ $error }}</span>
                    @endforeach
                </div>
                <button type="submit" class="ui blue submit button">Login</button>
                <div class="ui bulleted right">
                    <a class="item" href="#link"> Olvidaste tu contraseña?</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop