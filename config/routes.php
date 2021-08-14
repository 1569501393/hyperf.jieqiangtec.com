<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf-2021.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use App\Controller\IndexController;
use App\Controller\TestController;
use Hyperf\HttpServer\Router\Router;

// Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');
Router::addRoute(['GET', 'POST', 'HEAD'], '/', [IndexController::class, 'index']);

Router::get('/favicon.ico', function () {
    return '';
});

Router::get('/index', function () {
    // return (date('Y-m-d H:i:s'));
    // return date('Y-m-d H:i:s');
    return ['date' => date('Y-m-d H:i:s'), 'rand' => mt_rand(1000, 9999)];
});

// 路由组
Router::addGroup('/test', function () {
    Router::get('/index', [TestController::class, 'indexGet']);
    Router::post('/index', [TestController::class, 'indexPost']);
    Router::put('/index', [TestController::class, 'indexPut']);
    Router::patch('/index', [TestController::class, 'indexPatch']);
    Router::delete('/index', [TestController::class, 'indexDelete']);
    Router::head('/index', [TestController::class, 'indexHead']);
});
