<?php

use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return "Hello World";
});

// http://localhost:8000/api/1
// Route::get('/{id}', function ($id) {
//     return "Hello World: " . $id;
// });

Route::get('/user', function (Request $request) {
    //?name=John QUERY PARAMS
    $name = $request->query('name');

    return "Hello: " . $name;
});


Route::post('/user/{id}', function (Request $request, $id) {
    //POST METHOD BODY
    $name = $request->input('name');
    return "Hello: " . $name . " ID: " . $id;
});


Route::delete('/user/{id}', function (Request $request, $id) {
    return "Deleted: " . $id;
});


Route::put('/user/{id}', function (Request $request, $id) {
    return "Updated: " . $id;
});


Route::patch('/user/{id}', function (Request $request, $id) {
    return "Patched: " .    $id;
});

Route::get('/test', [TestController::class, 'index']);
Route::get('/test', [TestController::class, 'getAllUser']);
Route::get('/test', [TestController::class, 'getOneUser']);

//api/v1
Route::controller(TestController::class)
    ->prefix('v1')
    ->group(function () {
        Route::get('/test', 'index');
        Route::get('/testAll', 'getAllUser');
    });
