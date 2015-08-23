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
Route::get('/', [
    'as' => 'home',
    'uses' => 'Auth\AuthController@getLogin'
]);

Route::get('Admin/Index', 'Admin\AdminController@Index');
Route::get('Admin/InsertStaff', 'Admin\StaffController@Insert');
Route::get('Admin/InsertStaff/{id}', 'Admin\StaffController@Insert')->where('id', '[0-9]+');
Route::post('Admin/InsertStaff', 'Admin\StaffController@Insert');
Route::get('Admin/ListStaff', 'Admin\StaffController@ListStaff');

// Protected Routes by auth and acl middleware
$router->group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'acl']], function() use ($router)
{
    $router->get('dashboard', [
        'uses' => 'AdminController@index',
        'as' => 'dashboard',
        'permission' => 'manage_own_dashboard',
        'menuItem' => ['icon' => 'fa fa-dashboard', 'title' => 'Dashboard']
    ]);

    // Group: Users
    $router->group(['prefix' => 'users', 'namespace' => 'User'], function() use ($router)
    {
        $router->get('/{role?}', [
            'uses' => 'UserController@index',
            'as' => 'admin.users',
            'permission' => 'view_user',
            'menuItem' => ['icon' => 'clip-users', 'title' => 'Manage Users']
        ])->where('role', '[a-zA-Z]+');

        $router->get('view/{id}', [
            'uses' => 'UserController@viewUserProfile',
            'as' => 'admin.user.view',
            'permission' => 'view_user'
        ]);
    });
});

Route::get('/home', 'PagesController@Home');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::resource('tasks', 'TasksController');