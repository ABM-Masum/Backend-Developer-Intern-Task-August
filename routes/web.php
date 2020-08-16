<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('students', 'StudentsController@index')->name('students.index');

Route::post('students', 'StudentsController@store');

Route::get('students/create', 'StudentsController@create');

Route::get('students/{student}', 'StudentsController@show');

Route::get('students/{student}/edit', 'StudentsController@edit');

Route::put('students/{student}', 'StudentsController@update');



Route::get('courses', 'CoursesController@index')->name('courses.index');

Route::get('courses/create', 'CoursesController@create');

Route::post('courses', 'CoursesController@store');

Route::get('select', 'CoursesSelectController@create');

Route::post('students/{student}/select', 'CoursesSelectController@store');