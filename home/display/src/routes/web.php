<?php
Route::get('myhome', 'Home\Display\DisplayController@index');

Route::get('login', 'Home\Display\DisplayController@login');

Route::get('members', 'Home\Display\DisplayController@members');

Route::get('submit', 'Home\Display\DisplayController@submit');

Route::get('teacher', 'Home\Display\DisplayController@teacher');

Route::get('admin', 'Home\Display\DisplayController@admin');

