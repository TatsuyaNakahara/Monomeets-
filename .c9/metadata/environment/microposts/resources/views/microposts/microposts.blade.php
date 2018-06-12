{"filter":false,"title":"microposts.blade.php","tooltip":"/microposts/resources/views/microposts/microposts.blade.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":18,"column":29},"action":"insert","lines":["<ul class=\"media-list\">","@foreach ($microposts as $micropost)","    <?php $user = $micropost->user; ?>","    <li class=\"media\">","        <div class=\"media-left\">","            <img class=\"media-object img-rounded\" src=\"{{ Gravatar::src($user->email, 50) }}\" alt=\"\">","        </div>","        <div class=\"media-body\">","            <div>","                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class=\"text-muted\">posted at {{ $micropost->created_at }}</span>","            </div>","            <div>","                <p>{!! nl2br(e($micropost->content)) !!}</p>","            </div>","        </div>","    </li>","@endforeach","</ul>","{!! $microposts->render() !!}"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":18,"column":29},"action":"remove","lines":["<ul class=\"media-list\">","@foreach ($microposts as $micropost)","    <?php $user = $micropost->user; ?>","    <li class=\"media\">","        <div class=\"media-left\">","            <img class=\"media-object img-rounded\" src=\"{{ Gravatar::src($user->email, 50) }}\" alt=\"\">","        </div>","        <div class=\"media-body\">","            <div>","                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class=\"text-muted\">posted at {{ $micropost->created_at }}</span>","            </div>","            <div>","                <p>{!! nl2br(e($micropost->content)) !!}</p>","            </div>","        </div>","    </li>","@endforeach","</ul>","{!! $microposts->render() !!}"],"id":2},{"start":{"row":0,"column":0},"end":{"row":25,"column":29},"action":"insert","lines":["<ul class=\"media-list\">","@foreach ($microposts as $micropost)","    <?php $user = $micropost->user; ?>","    <li class=\"media\">","        <div class=\"media-left\">","            <img class=\"media-object img-rounded\" src=\"{{ Gravatar::src($user->email, 50) }}\" alt=\"\">","        </div>","        <div class=\"media-body\">","            <div>","                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class=\"text-muted\">posted at {{ $micropost->created_at }}</span>","            </div>","            <div>","                <p>{!! nl2br(e($micropost->content)) !!}</p>","            </div>","            <div>","                @if (Auth::user()->id == $micropost->user_id)","                    {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}","                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}","                    {!! Form::close() !!}","                @endif","            </div>","        </div>","    </li>","@endforeach","</ul>","{!! $microposts->render() !!}"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":25,"column":29},"end":{"row":25,"column":29},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":6,"state":"start","mode":"ace/mode/php"}},"timestamp":1528680064458,"hash":"9f1af76019386167bc8b9e18b6bee5e313e9bd0b"}