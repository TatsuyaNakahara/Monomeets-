{"filter":false,"title":"edit.blade.php","tooltip":"/message-board/resources/views/messages/edit.blade.php","undoManager":{"mark":9,"position":9,"stack":[[{"start":{"row":0,"column":0},"end":{"row":15,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}","","@endsection"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":15,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}","","@endsection"],"id":2},{"start":{"row":0,"column":0},"end":{"row":24,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    @if (count($errors) > 0)","        <ul>","            @foreach ($errors->all() as $error)","                <li>{{ $error }}</li>","            @endforeach","        </ul>","    @endif","","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}","","@endsection"]}],[{"start":{"row":0,"column":0},"end":{"row":24,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    @if (count($errors) > 0)","        <ul>","            @foreach ($errors->all() as $error)","                <li>{{ $error }}</li>","            @endforeach","        </ul>","    @endif","","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}","","@endsection"],"id":3},{"start":{"row":0,"column":0},"end":{"row":15,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}","","@endsection"]}],[{"start":{"row":0,"column":0},"end":{"row":15,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}","","@endsection"],"id":4},{"start":{"row":0,"column":0},"end":{"row":18,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('title', 'タイトル:') !!}","        {!! Form::text('title') !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}","","@endsection"]}],[{"start":{"row":0,"column":0},"end":{"row":18,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('title', 'タイトル:') !!}","        {!! Form::text('title') !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}","","@endsection"],"id":5},{"start":{"row":0,"column":0},"end":{"row":15,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}","","@endsection"]}],[{"start":{"row":0,"column":0},"end":{"row":15,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}","","@endsection"],"id":6},{"start":{"row":0,"column":0},"end":{"row":18,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('title', 'タイトル:') !!}","        {!! Form::text('title') !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}","","@endsection"]}],[{"start":{"row":4,"column":47},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "]},{"start":{"row":5,"column":4},"end":{"row":6,"column":0},"action":"insert","lines":["",""]},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":6,"column":4},"end":{"row":13,"column":0},"action":"insert","lines":["@if (count($errors) > 0)","        <ul>","            @foreach ($errors->all() as $error)","                <li>{{ $error }}</li>","            @endforeach","        </ul>","    @endif",""],"id":8}],[{"start":{"row":6,"column":4},"end":{"row":12,"column":10},"action":"remove","lines":["@if (count($errors) > 0)","        <ul>","            @foreach ($errors->all() as $error)","                <li>{{ $error }}</li>","            @endforeach","        </ul>","    @endif"],"id":9},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"remove","lines":["    "]},{"start":{"row":5,"column":4},"end":{"row":6,"column":0},"action":"remove","lines":["",""]},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"remove","lines":["    "]},{"start":{"row":4,"column":47},"end":{"row":5,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":7,"column":4},"end":{"row":17,"column":25},"action":"remove","lines":["{!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('title', 'タイトル:') !!}","        {!! Form::text('title') !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}"],"id":11},{"start":{"row":7,"column":4},"end":{"row":24,"column":10},"action":"insert","lines":["<div class=\"row\">","        <div class=\"col-xs-6\">","            {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","                <div class=\"form-group\">","                    {!! Form::label('title', 'タイトル:') !!}","                    {!! Form::text('title', null, ['class' => 'form-control']) !!}","                </div>","        ","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","        ","                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}","        ","            {!! Form::close() !!}","        </div>","    </div>"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":24,"column":10},"end":{"row":24,"column":10},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527825239687,"hash":"8dfd1fbb199f5e2e497adf138894c1829d0331c6"}