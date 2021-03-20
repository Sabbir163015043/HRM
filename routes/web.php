<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[
    'uses' => 'App\Http\Controllers\DashboardController@index',
    'as'   => 'dashboard',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/add-workspace',[
    'uses' => 'App\Http\Controllers\WorkspaceController@create',
    'as'   => 'add-workspace',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::post('/new-workspace',[
    'uses' => 'App\Http\Controllers\WorkspaceController@index',
    'as'   => 'new-workspace',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/edit-workspace/{id}',[
    'uses' => 'App\Http\Controllers\WorkspaceController@edit',
    'as'   => 'edit-workspace',
    'middleware' => ['auth:sanctum', 'verified']
]);


Route::post('/update-workspace/{id}',[
    'uses' => 'App\Http\Controllers\WorkspaceController@update',
    'as'   => 'update-workspace',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/delete-workspace/{id}',[
    'uses' => 'App\Http\Controllers\WorkspaceController@delete',
    'as'   => 'delete-workspace',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/manage-workspace',[
    'uses' => 'App\Http\Controllers\WorkspaceController@manage',
    'as'   => 'manage-workspace',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/add-member-project',[
    'uses' => 'App\Http\Controllers\ProjectController@create',
    'as'   => 'add-member-project',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/manage-member-project',[
    'uses' => 'App\Http\Controllers\ProjectController@manage',
    'as'   => 'manage-member-project',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::post('/new-project',[
    'uses' => 'App\Http\Controllers\ProjectController@index',
    'as'   => 'new-project',
    'middleware' => ['auth:sanctum', 'verified']
]);









