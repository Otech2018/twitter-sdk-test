<?php

use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\WebhookController;


/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/




$router->post('/subscribe', 'SubscribeController@subscribe');
$router->post('/subscribe-channel', 'ChannelController@subscribeToChannel');
$router->post('/send-message', 'MessageController@sendMessage');
$router->post('/webhook', 'WebhookController@handleWebhook');



$router->get('/', function () use ($router) {
    return $router->app->version();
});

