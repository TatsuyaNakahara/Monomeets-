{"filter":false,"title":"MicropostsController.php","tooltip":"/microposts/app/Http/Controllers/MicropostsController.php","ace":{"folds":[],"scrolltop":203.63636779785156,"scrollleft":0,"selection":{"start":{"row":28,"column":5},"end":{"row":28,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"57ead1827fd956f81568eecedefa6935111907d4","undoManager":{"mark":8,"position":8,"stack":[[{"start":{"row":0,"column":0},"end":{"row":9,"column":1},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","class MicropostsController extends Controller","{","    //","}"],"id":2},{"start":{"row":0,"column":0},"end":{"row":32,"column":1},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","use App\\Http\\Controllers\\Controller;","","class MicropostsController extends Controller","{","    /**","     * Display a listing of the resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function index()","    {","        $data = [];","        if (\\Auth::check()) {","            $user = \\Auth::user();","            $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);","","            $data = [","                'user' => $user,","                'microposts' => $microposts,","            ];","            $data += $this->counts($user);","            return view('users.show', $data);","        }else {","            return view('welcome');","        }","    }","}"]}],[{"start":{"row":32,"column":1},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":33,"column":0},"end":{"row":34,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":33,"column":0},"end":{"row":34,"column":0},"action":"remove","lines":["",""],"id":4},{"start":{"row":32,"column":1},"end":{"row":33,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":31,"column":5},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":4},"end":{"row":33,"column":0},"action":"insert","lines":["",""]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":33,"column":4},"end":{"row":44,"column":5},"action":"insert","lines":["public function store(Request $request)","    {","        $this->validate($request, [","            'content' => 'required|max:191',","        ]);","","        $request->user()->microposts()->create([","            'content' => $request->content,","        ]);","","        return redirect()->back();","    }"],"id":6}],[{"start":{"row":44,"column":5},"end":{"row":45,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"insert","lines":["    "]},{"start":{"row":45,"column":4},"end":{"row":46,"column":0},"action":"insert","lines":["",""]},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":45,"column":4},"end":{"row":46,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":46,"column":4},"end":{"row":55,"column":5},"action":"insert","lines":["public function destroy($id)","    {","        $micropost = \\App\\Micropost::find($id);","","        if (\\Auth::id() === $micropost->user_id) {","            $micropost->delete();","        }","","        return redirect()->back();","    }"],"id":9}],[{"start":{"row":15,"column":4},"end":{"row":31,"column":5},"action":"remove","lines":["public function index()","    {","        $data = [];","        if (\\Auth::check()) {","            $user = \\Auth::user();","            $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);","","            $data = [","                'user' => $user,","                'microposts' => $microposts,","            ];","            $data += $this->counts($user);","            return view('users.show', $data);","        }else {","            return view('welcome');","        }","    }"],"id":10},{"start":{"row":15,"column":4},"end":{"row":28,"column":5},"action":"insert","lines":["public function index()","    {","        $data = [];","        if (\\Auth::check()) {","            $user = \\Auth::user();","            $microposts = $user->feed_microposts()->orderBy('created_at', 'desc')->paginate(10);","","            $data = [","                'user' => $user,","                'microposts' => $microposts,","            ];","        }","        return view('welcome', $data);","    }"]}]]},"timestamp":1529478896967}