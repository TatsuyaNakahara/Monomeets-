{"filter":false,"title":"users.blade.php","tooltip":"/microposts/resources/views/users/users.blade.php","undoManager":{"mark":6,"position":6,"stack":[[{"start":{"row":0,"column":0},"end":{"row":20,"column":6},"action":"remove","lines":["@if (count($users) > 0)","<ul class=\"media-list\">","@foreach ($users as $user)","    <li class=\"media\">","        <div class=\"media-left\">","            <img class=\"media-object img-rounded\" src=\"{{ Gravatar::src($user->email, 50) }}\" alt=\"\">","        </div>","        <div class=\"media-body\">","            <div>","                {{ $user->name }}","            </div>","            <div>","                <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>","            </div>","        </div>","    </li>","<! - Omission ->","@endforeach","</ul>","{!! $users->render() !!}","@endif"],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":19,"column":6},"action":"insert","lines":["@if (count($users) > 0)","<ul class=\"media-list\">","@foreach ($users as $user)","    <li class=\"media\">","        <div class=\"media-left\">","            <img class=\"media-object img-rounded\" src=\"{{ Gravatar::src($user->email, 50) }}\" alt=\"\">","        </div>","        <div class=\"media-body\">","            <div>","                {{ $user->name }}","            </div>","            <div>","                <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>","            </div>","        </div>","    </li>","@endforeach","</ul>","","@endif"],"id":4}],[{"start":{"row":16,"column":0},"end":{"row":19,"column":6},"action":"remove","lines":["@endforeach","</ul>","","@endif"],"id":6},{"start":{"row":16,"column":0},"end":{"row":20,"column":6},"action":"insert","lines":["<! - Omission ->","@endforeach","</ul>","{!! $users->render() !!}","@endif"]}],[{"start":{"row":16,"column":15},"end":{"row":16,"column":16},"action":"remove","lines":[">"],"id":7},{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"remove","lines":["-"]},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"remove","lines":[" "]},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"remove","lines":["n"]},{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"remove","lines":["o"]},{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"remove","lines":["i"]},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"remove","lines":["s"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"remove","lines":["s"]},{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"remove","lines":["i"]},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"remove","lines":["m"]},{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"remove","lines":["O"]},{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"remove","lines":[" "]},{"start":{"row":16,"column":3},"end":{"row":16,"column":4},"action":"remove","lines":["-"]},{"start":{"row":16,"column":2},"end":{"row":16,"column":3},"action":"remove","lines":[" "]},{"start":{"row":16,"column":1},"end":{"row":16,"column":2},"action":"remove","lines":["!"]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"remove","lines":["<"],"id":8},{"start":{"row":15,"column":9},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":19,"column":6},"action":"remove","lines":["@if (count($users) > 0)","<ul class=\"media-list\">","@foreach ($users as $user)","    <li class=\"media\">","        <div class=\"media-left\">","            <img class=\"media-object img-rounded\" src=\"{{ Gravatar::src($user->email, 50) }}\" alt=\"\">","        </div>","        <div class=\"media-body\">","            <div>","                {{ $user->name }}","            </div>","            <div>","                <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>","            </div>","        </div>","    </li>","@endforeach","</ul>","{!! $users->render() !!}","@endif"],"id":9},{"start":{"row":0,"column":0},"end":{"row":19,"column":6},"action":"insert","lines":["@if (count($users) > 0)","<ul class=\"media-list\">","@foreach ($users as $user)","    <li class=\"media\">","        <div class=\"media-left\">","            <img class=\"media-object img-rounded\" src=\"{{ Gravatar::src($user->email, 50) }}\" alt=\"\">","        </div>","        <div class=\"media-body\">","            <div>","                {{ $user->name }}","            </div>","            <div>","                <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>","            </div>","        </div>","    </li>","@endforeach","</ul>","","@endif"]}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":24},"action":"insert","lines":["{!! $users->render() !!}"],"id":10}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":6},"end":{"row":19,"column":6},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":6,"state":"start","mode":"ace/mode/php"}},"timestamp":1528681467691,"hash":"40cb01b40d641d8c0f1750f529cbbcd3899f4423"}