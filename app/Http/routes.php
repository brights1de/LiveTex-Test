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

Route::get('/', 'WelcomeController@index');

Route::get('people',
    [
        'as'   => 'allPeoples',
        'uses' => 'PeopleController@showAllPeoples',
    ]);

Route::get('people/add',
    [
        'as'   => 'showPeopleForm',
        'uses' => 'PeopleController@showPeopleForm',
    ]);

Route::post('people/processing',
    [
        'as'   => 'processingRequest',
        'uses' => 'PeopleController@processingRequest',
    ]);

Route::get('family/{id}',
    [
        'as'   => 'showFamily',
        'uses' => 'FamilyController@showFamily',
    ]);

