<?php

use App\Http\Controllers\Administrator\UserController;
use App\Http\Controllers\Anonymous\AuthController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Consumer\UserController as ConsumerUserController;

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

/**
 * 🚀匿名接口
 */
Route::group([
    'namespace' => 'Anonymous'
], static function (Router $router) {
    /**
     * 🔥用户登录接口
     */
    $router->post('auth/login', "\\" . AuthController::class . '@login');
    $router->post('auth/unCheckReg', "\\" . AuthController::class . '@unCheckReg');
    $router->any('auth/unCheckLogin', "\\" . AuthController::class . '@unCheckLogin');
    $router->post('wechat/info', "\\" . AuthController::class . '@wxInfo');
    $router->any('wechat/login', "\\" . AuthController::class . '@wxLogin');
    //登录
    /**
     * 🔥无权限查看接口
     */
    $router->get('info/getPhone', "\\" .  AuthController::class . '@getPhone');
    $router->get('info/getList', "\\" .  AuthController::class . '@getList');
    $router->get('info/updateList', "\\" .  AuthController::class . '@finishList');
});

/**
 * 🚀用户接口
 */
Route::group([
    'prefix' => 'consumer',
    'middleware' => ['auth:sanctum', 'role:Consumer'],
    'namespace' => 'Consumer'
], static function (Router $router) {
    // 用户接口
    $router->get('user/info', "\\" . ConsumerUserController::class . '@info');
    $router->post('user/update', "\\" . ConsumerUserController::class . '@update');


});

/**
 * 🚀管理员接口
 */
Route::group([
    'prefix' => 'administrator',
    'middleware' => ['auth:sanctum', 'role:Administrator'],
    'namespace' => 'Administrator'
], static function (Router $router) {
    // 用户接口
    $router->get('user/info', "\\" . UserController::class . '@info');
    $router->post('user/update', "\\" . UserController::class . '@update');
});
