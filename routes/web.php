<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get( '/', [ 'uses' => 'ExportController@viewStudents', 'as' => 'view' ] );
Route::post( 'export', [ 'uses' => 'ExportController@exportStudentsToCSV', 'as' => 'export' ] );
Route::get( 'export-attendence',
	[ 'uses' => 'ExportController@exporttCourseAttendenceToCSV', 'as' => 'export.attendence' ] );
Route::post( 'search', [ 'uses' => 'ExportController@search', 'as' => 'search' ] );