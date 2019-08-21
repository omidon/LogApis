<?php



Route::get('/', function () {
    /* return view('welcome');*/
    echo 'Hello from the LogApis package';
});



Route::get('/LogMe', 'LogApisController@LogMe');

Route::get('add/{a}/{b}', 'Radicloud\LogApis\LogApisController@add');
Route::get('subtract/{a}/{b}', 'Radicloud\LogApis\LogApisController@subtract');

?>
