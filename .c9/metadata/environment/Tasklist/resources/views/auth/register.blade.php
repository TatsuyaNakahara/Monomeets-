{"filter":false,"title":"register.blade.php","tooltip":"/Tasklist/resources/views/auth/register.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":35,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"text-center\">","        <h1>Sign up</h1>","    </div>","","    <div class=\"row\">","        <div class=\"col-md-6 col-md-offset-3\">","","            {!! Form::open(['route' => 'signup.post']) !!}","                <div class=\"form-group\">","                    {!! Form::label('name', 'Name') !!}","                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}","                </div>","","                <div class=\"form-group\">","                    {!! Form::label('email', 'Email') !!}","                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}","                </div>","","                <div class=\"form-group\">","                    {!! Form::label('password', 'Password') !!}","                    {!! Form::password('password', ['class' => 'form-control']) !!}","                </div>","","                <div class=\"form-group\">","                    {!! Form::label('password_confirmation', 'Confirmation') !!}","                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}","                </div>","","                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}","            {!! Form::close() !!}","        </div>","    </div>","@endsection"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":11},"end":{"row":0,"column":11},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528776416480,"hash":"26bc767bce1a56214716d185fd921273d7699f68"}