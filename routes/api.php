<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;
use Faker\Provider\ar_SA\Address;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'findOne']);
Route::post('/users', [UserController::class, 'add']);

Route::get('/addresses', [AddressController::class, 'index']);
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);
Route::post('/addresses', [AddressController::class, 'add']);

Route::get('/invoices', [InvoiceController::class, 'index']);
Route::get('/invoices/{id}', [InvoiceController::class, 'findOne']);
Route::post('/invoices', [InvoiceController::class, 'add']);