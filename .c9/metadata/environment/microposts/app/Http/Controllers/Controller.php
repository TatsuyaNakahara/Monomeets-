{"filter":false,"title":"Controller.php","tooltip":"/microposts/app/Http/Controllers/Controller.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":9,"column":0},"end":{"row":13,"column":0},"action":"remove","lines":["class Controller extends BaseController","{","    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;","}",""],"id":2},{"start":{"row":9,"column":0},"end":{"row":20,"column":1},"action":"insert","lines":["class Controller extends BaseController","{","    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;","","    public function counts($user) {","        $count_microposts = $user->microposts()->count();","","        return [","            'count_microposts' => $count_microposts,","        ];","    }","}"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":20,"column":1},"end":{"row":20,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":6,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1528680281673,"hash":"b8a1d3f8690fa4b630fa8896a14e07c93fdeda64"}