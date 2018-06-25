{"filter":false,"title":"2018_06_20_145546_create_user_follow_table.php","tooltip":"/microposts/database/migrations/2018_06_20_145546_create_user_follow_table.php","ace":{"folds":[],"scrolltop":128,"scrollleft":0,"selection":{"start":{"row":30,"column":26},"end":{"row":30,"column":26},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":7,"state":"php-start","mode":"ace/mode/php"}},"hash":"57e5f61c7cde186d6ee6d33c21dc3f0992c6a26d","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":13,"column":4},"end":{"row":29,"column":5},"action":"remove","lines":["public function up()","    {","        Schema::create('user_follow', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('user_follow');","    }"],"id":6},{"start":{"row":13,"column":4},"end":{"row":33,"column":5},"action":"insert","lines":["public function up()","    {","        Schema::create('user_follow', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->integer('follow_id')->unsigned()->index();","            $table->timestamps();","","            // Foreign key setting","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","            $table->foreign('follow_id')->references('id')->on('users')->onDelete('cascade');","","            // Do not allow duplication of combination of user_id and follow_id","            $table->unique(['user_id', 'follow_id']);","        });","    }","","    public function down()","    {","        Schema::dropIfExists('user_follow');","    }"]}]]},"timestamp":1529474450635}