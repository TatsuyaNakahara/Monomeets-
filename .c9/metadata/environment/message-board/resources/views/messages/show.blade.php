{"filter":false,"title":"show.blade.php","tooltip":"/message-board/resources/views/messages/show.blade.php","undoManager":{"mark":8,"position":8,"stack":[[{"start":{"row":0,"column":0},"end":{"row":8,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","@endsection"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":8,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","@endsection"],"id":2},{"start":{"row":0,"column":0},"end":{"row":10,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージを編集', ['id' => $message->id]) !!}","","@endsection"]}],[{"start":{"row":0,"column":0},"end":{"row":10,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージを編集', ['id' => $message->id]) !!}","","@endsection"],"id":3},{"start":{"row":0,"column":0},"end":{"row":14,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}","","    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}","        {!! Form::submit('削除') !!}","    {!! Form::close() !!}","","@endsection"]}],[{"start":{"row":0,"column":0},"end":{"row":14,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}","","    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}","        {!! Form::submit('削除') !!}","    {!! Form::close() !!}","","@endsection"],"id":4},{"start":{"row":0,"column":0},"end":{"row":15,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>タイトル: {{ $message->title }}</p>","    <p>メッセージ: {{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}","","    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}","        {!! Form::submit('削除') !!}","    {!! Form::close() !!}","","@endsection"]}],[{"start":{"row":0,"column":0},"end":{"row":15,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>タイトル: {{ $message->title }}</p>","    <p>メッセージ: {{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}","","    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}","        {!! Form::submit('削除') !!}","    {!! Form::close() !!}","","@endsection"],"id":5},{"start":{"row":0,"column":0},"end":{"row":15,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>タイトル: {{ $message->title }}</p>","    <p>メッセージ: {{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}","","    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}","        {!! Form::submit('削除') !!}","    {!! Form::close() !!}","","@endsection"]}],[{"start":{"row":6,"column":4},"end":{"row":7,"column":41},"action":"remove","lines":["<p>タイトル: {{ $message->title }}</p>","    <p>メッセージ: {{ $message->content }}</p>"],"id":6},{"start":{"row":6,"column":4},"end":{"row":19,"column":12},"action":"insert","lines":["<table class=\"table table-bordered\">","        <tr>","            <th>id</th>","            <td>{{ $message->id }}</td>","        </tr>","        <tr>","            <th>タイトル</th>","            <td>{{ $message->title }}</td>","        </tr>","        <tr>","            <th>メッセージ</th>","            <td>{{ $message->content }}</td>","        </tr>","    </table>"]}],[{"start":{"row":21,"column":4},"end":{"row":22,"column":0},"action":"remove","lines":["{!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}",""],"id":7},{"start":{"row":21,"column":4},"end":{"row":21,"column":112},"action":"insert","lines":["{!! link_to_route('messages.edit', 'このメッセージを編集', ['id' => $message->id], ['class' => 'btn btn-default']) !!}"]}],[{"start":{"row":21,"column":112},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":23,"column":4},"end":{"row":25,"column":25},"action":"remove","lines":["{!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}","        {!! Form::submit('削除') !!}","    {!! Form::close() !!}"],"id":9},{"start":{"row":23,"column":4},"end":{"row":25,"column":25},"action":"insert","lines":["{!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}","        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}","    {!! Form::close() !!}"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":40},"end":{"row":6,"column":40},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527824770986,"hash":"c696d5cc2f89a2a142cb18576aadda40fc2142f7"}