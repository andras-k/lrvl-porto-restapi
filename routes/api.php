<?php

use App\Containers\ExampleSection\Customer\UI\API\Controllers\CustomerController;
use App\Containers\ExampleSection\Group\UI\API\Controllers\GroupController;
use Illuminate\Support\Facades\Route;

Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/{customerId}', [CustomerController::class, 'show']);
Route::put('/customers/{customerId}/groups', [CustomerController::class, 'update']);


Route::get('/groups', [GroupController::class, 'index']);
Route::get('/groups/{groupId}', [GroupController::class, 'show']);
