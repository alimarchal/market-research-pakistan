<?php

use App\Http\Controllers\api\FormController;
use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function () {
    Route::post('/login', [UserController::class, 'login']);
    // Route::post('/user/email-notification', [UserController::class, 'email_notification']);
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/forgot-password', [UserController::class, 'forgot_password']);

    /* Countries */
    Route::get('/countries', function (){
        return response()->json(['countries' => DB::table('countries')->select(['id', 'name'])->get()]);
    });
     /* Province */
     Route::get('/provinces', function (){
        return response()->json(['provinces' => DB::table('provinces')->select(['id', 'name'])->get()]);
    });
     /* Countries and cities API */
     Route::get('/cities', function (){
        return response()->json(['cities' => DB::table('cities')->select(['id', 'provice_id', 'name'])->get()]);
    });
});

Route::prefix('v1')->middleware(['auth:sanctum'])->group(function ()
{
    Route::post('/verify', [UserController::class, 'verify_otp']);
    Route::post('/resend/otp', [UserController::class, 'resend_otp']);
    Route::post('/logout', [UserController::class, 'logout']);
    Route::middleware( ['verified'])->group(function ()
    {
        // Businesses APIs
        Route::prefix('form')->group(function () {
            Route::get('/', [FormController::class, 'index']);
            Route::post('/store', [FormController::class, 'store']);
        });

        Route::prefix('user')->group(function () {
            Route::get('/', [UserController::class, 'index']);
            Route::put('/{id}', [UserController::class, 'update']);
        });
    });
});
