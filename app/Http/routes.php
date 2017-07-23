<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('register', function(){
        return redirect('/');
});

Route::group(['middleware' => ['web']], function(){



    Route::get('/', 'PagesController@homepage');
    Route::get('about', 'PagesController@about');

    //Auth Routes
    $this ->get('login', 'Auth\AuthController@showLoginForm');
    $this ->post('login', 'Auth\AuthController@login');
    $this ->get('logout', 'Auth\AuthController@logout');
    
    Route::get('/cari', 'SiswaController@cari');
    Route::resource('siswa', 'SiswaController');
    Route::resource('kelas', 'KelasController');

    Route::resource('user', 'UserController');
    
    //Excel

    Route::get('/getImport', 'ExcelController@getImport');
    Route::post('/postImport', 'ExcelController@postImport');
    Route::get('/getExport', 'ExcelController@getExport');

    Route::get('getTemplate', 'ExcelController@getTemplate');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


