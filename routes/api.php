<?php

use Illuminate\Http\Request;
use App\Item;
use App\Client;
use App\Job;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->get('/items', function () {
    $items = Item::all();
    return response()->json([
      'status'  => 'success',
      'result'  => $items
    ]);
});

Route::middleware('api')->get('/clients', function () {
    $clients = Client::all();
    return response()->json([
      'status'  => 'success',
      'result'  => $clients
    ]);
});

Route::middleware('api')->get('/jobs', function () {
    $jobs = Job::whereNotNull('subtotal_job')->orderBy('name', 'asc')->get();
    return response()->json([
      'status'  => 'success',
      'result'  => $jobs
    ]);
});
