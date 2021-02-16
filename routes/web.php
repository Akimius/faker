<?php

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

Route::get('/lead-over-bid', [LeadOverbidController::class, 'insertRecords'])->name('lead.overbid');
Route::get('/lead-over-bid/truncate', [LeadOverbidController::class, 'truncateTable'])->name('lead.overbid.truncate');

Route::get('/lead-over-bid-black-list', [LeadOverbidController::class, 'insertRecords']);
