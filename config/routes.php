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
use App\Controller\DbController;
use App\Controller\IndexController;
use App\Controller\TestController;
use Hyperf\HttpServer\Router\Router;

// Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');
Router::addRoute(['GET', 'POST', 'HEAD'], '/', [IndexController::class, 'index']);

Router::get('/favicon.ico', function () {
    return '';
});

Router::get('/index', function () {
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

// 路由组
Router::addGroup('/v1', function () {
    Router::addGroup('/texts', function () {
        Router::get('', [DbController::class, 'index']);
        Router::get('/{id}', [DbController::class, 'show']);
        Router::get('/{id}/edit', [DbController::class, 'edit']);
        Router::post('', [DbController::class, 'create']);
        Router::put('/{id}', [DbController::class, 'update']);
        Router::patch('/{id}', [DbController::class, 'update']);
        Router::delete('/{id}', [DbController::class, 'destory']);
    });
});

/*Router::addGroup('/texts', function () {
    Router::get('', [DbController::class, 'index']);
    Router::get('/{id}', [DbController::class, 'show']);
    Router::get('/{id}/edit', [DbController::class, 'edit']);
    Router::post('', [DbController::class, 'create']);
    Router::put('', [DbController::class, 'update']);
    Router::patch('', [DbController::class, 'update']);
    Router::delete('', [DbController::class, 'destory']);
});*/

