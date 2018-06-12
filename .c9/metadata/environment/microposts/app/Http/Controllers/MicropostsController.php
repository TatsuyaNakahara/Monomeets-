{"filter":false,"title":"MicropostsController.php","tooltip":"/microposts/app/Http/Controllers/MicropostsController.php","undoManager":{"mark":17,"position":17,"stack":[[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["/"],"id":2},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":8,"column":4},"end":{"row":41,"column":0},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","use App\\Http\\Controllers\\Controller;","","class MicropostsController extends Controller","{","    /**","     * Display a listing of the resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function index()","    {","        $data = [];","        if (\\Auth::check()) {","            $user = \\Auth::user();","            $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);","","            $data = [","                'user' => $user,","                'microposts' => $microposts,","            ];","            $data += $this->counts($user);","            return view('users.show', $data);","        }else {","            return view('welcome');","        }","    }","}",""],"id":3}],[{"start":{"row":40,"column":0},"end":{"row":40,"column":1},"action":"remove","lines":["}"],"id":4},{"start":{"row":39,"column":5},"end":{"row":40,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":39,"column":5},"end":{"row":40,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"insert","lines":["    "]},{"start":{"row":40,"column":4},"end":{"row":41,"column":0},"action":"insert","lines":["",""]},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"remove","lines":["    "],"id":6},{"start":{"row":40,"column":4},"end":{"row":41,"column":0},"action":"remove","lines":["",""]},{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":39,"column":5},"end":{"row":40,"column":0},"action":"remove","lines":["",""],"id":7}],[{"start":{"row":39,"column":5},"end":{"row":40,"column":0},"action":"remove","lines":["",""],"id":8}],[{"start":{"row":39,"column":5},"end":{"row":40,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":40,"column":4},"end":{"row":51,"column":5},"action":"insert","lines":["public function store(Request $request)","    {","        $this->validate($request, [","            'content' => 'required|max:191',","        ]);","","        $request->user()->microposts()->create([","            'content' => $request->content,","        ]);","","        return redirect()->back();","    }"],"id":10}],[{"start":{"row":39,"column":5},"end":{"row":40,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":52,"column":5},"end":{"row":53,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":4},"end":{"row":54,"column":0},"action":"insert","lines":["",""]},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":54,"column":4},"end":{"row":63,"column":5},"action":"insert","lines":["public function destroy($id)","    {","        $micropost = \\App\\Micropost::find($id);","","        if (\\Auth::user()->id === $micropost->user_id) {","            $micropost->delete();","        }","","        return redirect()->back();","    }"],"id":13}],[{"start":{"row":0,"column":0},"end":{"row":7,"column":1},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","class MicropostsController extends Controller","{"],"id":14}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":15}],[{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"remove","lines":[" "],"id":16}],[{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"remove","lines":[" "],"id":17},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"remove","lines":["<"]}],[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"remove","lines":[" "],"id":18},{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"],"id":19}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":9,"column":1},"end":{"row":9,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":6,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1528680498409,"hash":"6a0c01438047ccc6e24519715e60e5c5394d5a03"}