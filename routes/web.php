<?php

Route::get( '/' , 'Main@index' );
Route::get( '/about' , 'Main@about' );
Route::get( '/contact' , 'Main@contact' );
Route::get( '/portfolio' , 'Main@cv' );
Route::get( '/adaptative-query' , 'Main@asql' );
