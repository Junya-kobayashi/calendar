<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    ['middleware' => ['admin']],
    function(){
        Route::get('/dashboard', 'AdminController@index');

        Route::get('/calendar/create', 'AdminController@createClalendar');
        Route::post('/calendar/create', 'AdminController@doAdminCalendar');

        Route::get('/event/create', 'AdminController@createEvent');
        Route::post('/event/create', 'AdminController@doCreateEvent');

        Route::get('/calendar/sync', 'AdminController@syncCalendar');
        Route::post('/calendar/sync', 'AdminController@doSyncCalendar');

        Route::get('/events', 'AdminController@listEvents');

        Route::get('/logout',  'AdminController@logout');
});

Route::get('/', 'HomeController@index');
Route::get('/login', 'HomeController@login');