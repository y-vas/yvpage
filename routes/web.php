<?php

Route::get( '/' , 'Main@index' );
// Route::get( '/about' , 'Main@about' );
Route::get( '/contact' , 'Main@contact' );
Route::get( '/cv' , 'Main@cv' );
Route::get( '/adaptative-query' , 'Main@asql' );
Route::post('/send' , 'Main@send' );
