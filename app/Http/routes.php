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

//----------- The block of student ------------------------------------

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

Route::get('student/export', array(
    'as'    => 'student.export',
    'uses'  => 'StudentController@export'
));

//----------- The block of comment ------------------------------------

Route::get('comment', function(){
    return view('comment.index');
});

Route::post('comment/add', array(
    'as'    => 'comment.add',
    'uses'  => 'CommentController@add'
));

Route::get('comment/admin', array(
    'as'    => 'comment.admin',
    'uses'  => 'CommentController@admin'
));

Route::post('comment/delete', array(
    'as'    => 'comment.delete',
    'uses'  => 'CommentController@delete'
));

//----------- The block of authentication ------------------------------------

Route::get('auth/index', function () {
    return view('auth.index');
});

Route::post('auth/login', array(
    'as'    => 'auth.login',
    'uses'  => 'AuthController@login'
));

Route::get('auth/logout', array(
    'as'    => 'auth.logout',
    'uses'  => 'AuthController@logout'
));