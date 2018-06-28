<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'Patricmutwiri\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Patricmutwiri\Calculator\CalculatorController@subtract');
