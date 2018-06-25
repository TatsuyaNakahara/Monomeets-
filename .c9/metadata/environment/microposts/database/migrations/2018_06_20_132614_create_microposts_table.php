{"filter":false,"title":"2018_06_20_132614_create_microposts_table.php","tooltip":"/microposts/database/migrations/2018_06_20_132614_create_microposts_table.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":13,"column":4},"end":{"row":30,"column":1},"action":"remove","lines":["public function up()","    {","        Schema::create('microposts', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('microposts');","    }","}"],"id":2},{"start":{"row":13,"column":4},"end":{"row":29,"column":5},"action":"insert","lines":["public function up()","    {","        Schema::create('microposts', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->string('content');","            $table->timestamps();","","            // Foreign key constraint","            $table->foreign('user_id')->references('id')->on('users');","        });","    }","","    public function down()","    {","        Schema::dropIfExists('microposts');","    }"]}],[{"start":{"row":29,"column":5},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"remove","lines":["    "],"id":4}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"insert","lines":["}"],"id":6}]]},"ace":{"folds":[],"scrolltop":73,"scrollleft":0,"selection":{"start":{"row":21,"column":37},"end":{"row":21,"column":37},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529468871866,"hash":"55ef4cfef2df807b5abb389fa1ef15663290facb"}