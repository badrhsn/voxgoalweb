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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/events/schedules', 'SchedulesController@index');

Route::get('/date/{id}', 'EventPageController@getServers');

Route::get('/event/{day}/{month}/{year}/{name}/{id}/{idserver}', 'EventPageController@index');

Route::get('/event/{id}/{name}/stats', 'EventStatsController@index');

Route::get('/dcma',function(){
    return view('dcma');
});

Route::get('/contact-us','ContactController@index');


Route::get('/league/champions-league', 'HomeController@index');

Route::get('/league/europa-league', 'HomeController@index');

Route::get('/league/ligua-santander', 'HomeController@index');

Route::get('/league/premier-league', 'HomeController@index');

Route::get('/league/ligue-1', 'HomeController@index');

Route::get('/league/bundesligua', 'HomeController@index');

Route::get('/league/calcio', 'HomeController@index');

Route::get('/league/others', 'HomeController@index');
