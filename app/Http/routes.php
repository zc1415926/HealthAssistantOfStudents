<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('student', function () {
    return view('student.index');
});

Route::post('student/add', array(
    'as'    => 'student.add',
    'uses'  => 'StudentController@add'
));

Route::post('student/delete', array(
    'as'    => 'student.delete',
    'uses'  => 'StudentController@delete'
));

Route::get('student/admin', array(
    'as'    => 'student.admin',
    'uses'  => 'StudentController@admin'
));

Route::get('comment', function(){
    return view('comment.index');
});

Route::post('comment/add', array(
    'as'    => 'comment.add',
    'uses'  => 'CommentController@add'
));