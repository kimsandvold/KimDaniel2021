<?php

use Illuminate\Http\Request;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    Route::get('test', function () {
        // Matches The "/admin/users" URL
    });
});
*/

Route::group([
    'name' => 'api.',
    'prefix' => 'v1',
    'middleware' => 'web'
], function () {
    Route::get('candidate', 'Candidate\ApiCandidateController@index')->name('candidate-list');

});
