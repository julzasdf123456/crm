<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// ADD PERMISSIONS TO ROLES
Route::get('/roles/add-permissions/{id}', [RoleController::class, 'addPermissions'])->name('roles.add_permissions');
Route::post('/roles/create-role-permissions', [RoleController::class, 'createRolePermissions']);

// ADD ROLES TO USER
Route::get('/users/add-user-roles/{id}', [UsersController::class, 'addUserRoles'])->name('users.add_user_roles');
Route::post('/users/create-user-roles', [UsersController::class, 'createUserRoles']);
Route::get('/users/add-user-permissions/{id}', [UsersController::class, 'addUserPermissions'])->name('users.add_user_permissions');

Route::resource('users', UsersController::class);

Route::resource('roles', App\Http\Controllers\RoleController::class);

Route::resource('permissions', App\Http\Controllers\PermissionController::class);



