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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth.admin'], function()
{
    require __DIR__ . '/routes/admin.php';
});

Route::group(['namespace' => 'Site'], function()
{
    require __DIR__ . '/routes/site.php';
});
