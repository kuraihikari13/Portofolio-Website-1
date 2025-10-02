<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TierController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\DB;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('kemitraan', [HomeController::class, 'kemitraan']);
Route::get('oulet', [HomeController::class, 'oulet']);
Route::get('menu', [HomeController::class, 'menu']);

Route::get('mitraform', [HomeController::class, 'mitraform']);
Route::post('register', [TempController::class, 'registerTemp']);

Route::get('login', [HomeController::class, 'login']);
Route::post('actionlogin', [LoginController::class, 'actionLogin']);
Route::get('actionlogout', [LoginController::class, 'actionLogout']);

Route::post('shop-update', [ShopController::class, 'shopUpdate'])->middleware('admin_cred');
Route::post('shop-delete', [ShopController::class, 'shopDelete'])->middleware('admin_cred');

Route::get('admin-home', [AdminController::class, 'adminHome'])->middleware('admin_cred');

Route::get('approveShop/{id}', [TempController::class, 'approveShop'])->middleware('admin_cred');
Route::get('temp-delete/{id}', [TempController::class, 'deleteShop'])->middleware('admin_cred');
Route::get('approve-restock/{id}', [AdminController::class, 'approveRestock'])->middleware('admin_cred');

Route::get('tier', [TierController::class, 'convertShop'])->middleware('admin_cred');

Route::get('shop-table', [AdminController::class, 'shopTable'])->middleware('admin_cred');
Route::get('edit-shop/{shop}', [AdminController::class, 'editShop'])->middleware('admin_cred');
Route::post('update-shop/{shop}', [ShopController::class, 'updateShop'])->middleware('admin_cred');
Route::get('shop-detail/{id}', [ShopController::class, 'shopDetail'])->middleware('admin_cred');
Route::get('shop-delete/{id}', [ShopController::class, 'deleteShop'])->middleware('admin_cred');

Route::get('item-table', [AdminController::class, 'itemTable'])->middleware('admin_cred');
Route::get('edit-item/{item}', [AdminController::class, 'editItem'])->middleware('admin_cred');
Route::get('edit-item', [AdminController::class, 'editItem'])->middleware('admin_cred');
Route::post('/update-item/{id}', [ItemController::class, 'updateItem'])->middleware('admin_cred');
Route::get('input-item', [AdminController::class, 'inputItem'])->middleware('admin_cred');
Route::post('insert-item', [ItemController::class, 'insertItem'])->middleware('admin_cred');
Route::get('delete-item/{id}', [ItemController::class, 'deleteItem'])->middleware('admin_cred');

Route::get('user-home', [UserController::class, 'home'])->middleware('auth');
Route::get('employee', [UserController::class, 'employee'])->middleware('auth');
Route::get('employee-add', [UserController::class, 'employeeAdd'])->middleware('auth');
Route::post('insert-employee', [EmployeeController::class, 'insertEmployee'])->middleware('auth');
Route::get('employee-edit/{employee}', [UserController::class, 'employeeEdit'])->middleware('auth');
Route::post('/employee-update/{id}', [EmployeeController::class, 'updateEmployee'])->middleware('auth');
Route::get('employee-delete/{id}', [EmployeeController::class, 'deleteEmployee'])->middleware('auth');
Route::get('paycheck', [UserController::class, 'paycheck'])->middleware('auth');
Route::get('clock-in', [UserController::class, 'clockIn'])->middleware('auth');
Route::post('attendance', [EmployeeController::class, 'attendance'])->middleware('auth');
Route::get('attendance-history', [UserController::class, 'attendanceHistory'])->middleware('auth');
Route::get('restock-request', [UserController::class, 'restockView'])->middleware('auth');
Route::post('restock', [UserController::class, 'restock'])->middleware('auth');
Route::get('restock-history', [UserController::class, 'restockHistory'])->middleware('auth');