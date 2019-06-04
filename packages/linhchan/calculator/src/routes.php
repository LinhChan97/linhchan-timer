<?php
Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'Linhchan\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Linhchan\Calculator\CalculatorController@subtract');