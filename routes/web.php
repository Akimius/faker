<?php

use App\Http\Controllers\LeadOverbidBlackListController;
use App\Http\Controllers\LeadOverbidController;
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

//LeadOverbid
Route::get('/lead-overbid', [LeadOverbidController::class, 'insertRecords']);
Route::get('/lead-overbid/truncate', [LeadOverbidController::class, 'truncateTable']);
//LeadOverbidBlackList
Route::get('/lead-overbid-black-list', [LeadOverbidBlackListController::class, 'insertRecords']);
Route::get('/lead-overbid-black-list/truncate', [LeadOverbidBlackListController::class, 'truncateTable']);
