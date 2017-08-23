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

Route::get('/', function () {
    return view('welcome');
});



//Route::get('/testCsrf',function(){
//    $csrf_field = csrf_field();
//    $html = <<<GET
//        <form method="POST" action="/testCsrf">
//            {$csrf_field}
//            <input type="submit" value="Test"/>
//        </form>
//GET;
//    return $html;
//});
//
//Route::post('testCsrf',function(){
//    return 'Success!';
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['namespace'=>'User', 'middleware' => ['auth']], function() {

//    Route::get('/home', 'HomeController@index');

    Route::resource('users','User\UserController');

    Route::get('roles',['as'=>'roles.index','uses'=>'RolesController@index',
        'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::get('roles/create',['as'=>'roles.create','uses'=>'RolesController@create','middleware' => ['permission:role-create']]);
    Route::post('roles/create',['as'=>'roles.store','uses'=>'RolesController@store','middleware' => ['permission:role-create']]);
    Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RolesController@show']);
    Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RolesController@edit','middleware' => ['permission:role-edit']]);
    Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RolesController@update','middleware' => ['permission:role-edit']]);
    Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RolesController@destroy','middleware' => ['permission:role-delete']]);

    Route::get('itemCRUD2',['as'=>'itemCRUD2.index','uses'=>'ItemCRUD2Controller@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
    Route::get('itemCRUD2/create',['as'=>'itemCRUD2.create','uses'=>'ItemCRUD2Controller@create','middleware' => ['permission:item-create']]);
    Route::post('itemCRUD2/create',['as'=>'itemCRUD2.store','uses'=>'ItemCRUD2Controller@store','middleware' => ['permission:item-create']]);
    Route::get('itemCRUD2/{id}',['as'=>'itemCRUD2.show','uses'=>'ItemCRUD2Controller@show']);
    Route::get('itemCRUD2/{id}/edit',['as'=>'itemCRUD2.edit','uses'=>'ItemCRUD2Controller@edit','middleware' => ['permission:item-edit']]);
    Route::patch('itemCRUD2/{id}',['as'=>'itemCRUD2.update','uses'=>'ItemCRUD2Controller@update','middleware' => ['permission:item-edit']]);
    Route::delete('itemCRUD2/{id}',['as'=>'itemCRUD2.destroy','uses'=>'ItemCRUD2Controller@destroy','middleware' => ['permission:item-delete']]);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('excel/export','DataImport\ExcelController@export');
