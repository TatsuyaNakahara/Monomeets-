{"filter":false,"title":"welcome.blade.php","tooltip":"/Tasklist/resources/views/welcome.blade.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":0,"column":0},"end":{"row":8,"column":11},"action":"remove","lines":["extends('layouts.app')","","@section('content')","    <div class=\"center jumbotron\">","        <div class=\"text-center\">","            <h1>Welcome to the Tasklist200</h1>","        </div>","    </div>","@endsection"],"id":2},{"start":{"row":0,"column":0},"end":{"row":14,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    @if (Auth::check())","        <?php $user = Auth::user(); ?>","        {{ $user->name }}","    @else","        <div class=\"center jumbotron\">","            <div class=\"text-center\">","                <h1>Welcome to the Microposts</h1>","                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","            </div>","        </div>","    @endif","@endsection"]}],[{"start":{"row":9,"column":44},"end":{"row":9,"column":45},"action":"remove","lines":["s"],"id":3},{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"remove","lines":["t"]},{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"remove","lines":["s"]},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"remove","lines":["o"]},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"remove","lines":["p"]},{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"remove","lines":["o"]},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"remove","lines":["r"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"remove","lines":["c"]},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"remove","lines":["i"]},{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"remove","lines":["M"]}],[{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"insert","lines":["a"],"id":4}],[{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"remove","lines":["a"],"id":5}],[{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"insert","lines":["T"],"id":6},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"insert","lines":["a"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"insert","lines":["s"]},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":["k"]},{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":["l"]},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"insert","lines":["i"]},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["s"]}],[{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"insert","lines":["t"],"id":7}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":5,"column":21},"end":{"row":5,"column":21},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529142816661,"hash":"530c180c251cc1991a87225a01ce8bd2324bae68"}