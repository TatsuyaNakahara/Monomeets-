{"filter":false,"title":"web.php","tooltip":"/message-board/routes/web.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":13,"column":0},"end":{"row":15,"column":3},"action":"remove","lines":["Route::get('/', function () {","    return view('welcome');","});"],"id":2},{"start":{"row":13,"column":0},"end":{"row":15,"column":50},"action":"insert","lines":["Route::get('/', 'MessagesController@index');","","Route::resource('messages', 'MessagesController');"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":50},"end":{"row":15,"column":50},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527815276033,"hash":"5380e41ec283bc709282894f210aea6eb2192d52"}