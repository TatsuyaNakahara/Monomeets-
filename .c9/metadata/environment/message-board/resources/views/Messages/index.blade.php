{"filter":false,"title":"index.blade.php","tooltip":"/message-board/resources/views/Messages/index.blade.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":14,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>メッセージ一覧</h1>","","    @if (count($messages) > 0)","        <ul>","            @foreach ($messages as $message)","                <li>{{ $message->content }}</li>","            @endforeach","        </ul>","    @endif","","@endsection"],"id":1}],[{"start":{"row":8,"column":12},"end":{"row":10,"column":23},"action":"remove","lines":["@foreach ($messages as $message)","                <li>{{ $message->content }}</li>","            @endforeach"],"id":3},{"start":{"row":8,"column":12},"end":{"row":10,"column":23},"action":"insert","lines":["@foreach ($messages as $message)","                <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->content }}</li>","            @endforeach"]}],[{"start":{"row":12,"column":10},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":4},"end":{"row":13,"column":58},"action":"insert","lines":["{!! link_to_route('messages.create', '新規メッセージの投稿') !!}"],"id":5}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":0},"end":{"row":14,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527579117900,"hash":"7c20109d1bd9ccbdced4843a97b884b3c60facd0"}