{"changed":true,"filter":false,"title":"character.php","tooltip":"/RPG/character.php","value":"<?php\n\nnamespace \\RPG\\Characters;\n\nclass Character {\n    // クラス変数\n    public static $type = '{\\';\n\n    public $hp = 1;\n    public $power = 1;\n\n    function __construct($hp, $power) {\n        $this->hp = $hp;\n        $this->power = $power;\n    }\n\n    function name() {\n        // $this:: によってインスタンス変数ではなく、クラス変数を呼び出している\n        return $this::$type;\n    }\n\n    function attack($character) {\n        $character->hp = $character->hp - $this->power;\n        print $this->name() . 'が' . $character->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;\n\n        if ($character->hp <= 0) {\n            $this->defeat($character);\n        }\n    }\n\n    function defeat($character) {\n        print $this->name() . 'は' . $character->name() . 'を倒した！' . PHP_EOL;\n    }\n}","undoManager":{"mark":3,"position":6,"stack":[[{"start":{"row":0,"column":0},"end":{"row":33,"column":1},"action":"insert","lines":["<?php","","namespace TechAcademy\\RPG\\Characters;","","class Character {","    // クラス変数","    public static $type = '';","","    public $hp = 1;","    public $power = 1;","","    function __construct($hp, $power) {","        $this->hp = $hp;","        $this->power = $power;","    }","","    function name() {","        // $this:: によってインスタンス変数ではなく、クラス変数を呼び出している","        return $this::$type;","    }","","    function attack($character) {","        $character->hp = $character->hp - $this->power;","        print $this->name() . 'が' . $character->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;","","        if ($character->hp <= 0) {","            $this->defeat($character);","        }","    }","","    function defeat($character) {","        print $this->name() . 'は' . $character->name() . 'を倒した！' . PHP_EOL;","    }","}"],"id":1}],[{"start":{"row":2,"column":20},"end":{"row":2,"column":21},"action":"remove","lines":["y"],"id":2},{"start":{"row":2,"column":19},"end":{"row":2,"column":20},"action":"remove","lines":["m"]},{"start":{"row":2,"column":18},"end":{"row":2,"column":19},"action":"remove","lines":["e"]},{"start":{"row":2,"column":17},"end":{"row":2,"column":18},"action":"remove","lines":["d"]},{"start":{"row":2,"column":16},"end":{"row":2,"column":17},"action":"remove","lines":["a"]},{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"remove","lines":["c"]},{"start":{"row":2,"column":14},"end":{"row":2,"column":15},"action":"remove","lines":["A"]},{"start":{"row":2,"column":13},"end":{"row":2,"column":14},"action":"remove","lines":["h"]},{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"remove","lines":["c"]},{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"remove","lines":["e"]},{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"remove","lines":["T"]}],[{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"insert","lines":["t"],"id":3},{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"insert","lines":["a"]},{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"insert","lines":["t"]},{"start":{"row":2,"column":13},"end":{"row":2,"column":14},"action":"insert","lines":["s"]},{"start":{"row":2,"column":14},"end":{"row":2,"column":15},"action":"insert","lines":["u"]},{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"insert","lines":["y"]},{"start":{"row":2,"column":16},"end":{"row":2,"column":17},"action":"insert","lines":["a"]},{"start":{"row":2,"column":17},"end":{"row":2,"column":18},"action":"insert","lines":["."]},{"start":{"row":2,"column":18},"end":{"row":2,"column":19},"action":"insert","lines":["n"]}],[{"start":{"row":2,"column":19},"end":{"row":2,"column":20},"action":"insert","lines":["a"],"id":4},{"start":{"row":2,"column":20},"end":{"row":2,"column":21},"action":"insert","lines":["k"]},{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"insert","lines":["a"]},{"start":{"row":2,"column":22},"end":{"row":2,"column":23},"action":"insert","lines":["h"]},{"start":{"row":2,"column":23},"end":{"row":2,"column":24},"action":"insert","lines":["a"]},{"start":{"row":2,"column":24},"end":{"row":2,"column":25},"action":"insert","lines":["r"]},{"start":{"row":2,"column":25},"end":{"row":2,"column":26},"action":"insert","lines":["a"]}],[{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":["{"],"id":5},{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"insert","lines":["\\"]}],[{"start":{"row":2,"column":17},"end":{"row":2,"column":18},"action":"remove","lines":["."],"id":6}],[{"start":{"row":2,"column":10},"end":{"row":2,"column":25},"action":"remove","lines":["tatsuyanakahara"],"id":7}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":2,"column":10},"end":{"row":2,"column":10},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1526455364597}