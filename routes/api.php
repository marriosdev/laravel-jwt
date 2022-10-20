<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login',   [AuthController::class , 'login']);
    Route::post('logout',  [AuthController::class , 'logout']);
    Route::post('refresh', [AuthController::class , 'refresh']);
    Route::post('me',      [AuthController::class , 'me']);

});

// Token conta 1
// eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2NjYyOTU1OTIsImV4cCI6MTY2NjI5OTE5MiwibmJmIjoxNjY2Mjk1NTkyLCJqdGkiOiJRWWhuV2l4UDU4eVNLRzZPIiwic3ViIjoiMTIiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.mMP2peQqSaG6TR707P1z8ntwNDZVDAPcrjcONj_d_T0
// Token conta 2
// eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2NjYyOTU2NzcsImV4cCI6MTY2NjI5OTI3NywibmJmIjoxNjY2Mjk1Njc3LCJqdGkiOiJwdHlvY1dkbjF2c1V4NFBKIiwic3ViIjoiMTMiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.Q935AZjJUVLeZZCiQSggK9_I524oMeYgmHKLQFE0Q0Y
// 

// eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2NjYyOTYyMDksImV4cCI6MTY2NjI5OTgwOSwibmJmIjoxNjY2Mjk2MjA5LCJqdGkiOiJRUlU0SVg2c09JMnIwRmZLIiwic3ViIjoiMTMiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.aui0Zks2NNv6NajFWh1HHZH2CtPN3-Ot8Zan-drZSAc