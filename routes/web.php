<?php

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

//http://api.restaurantreview.test/v1/restaurants
//http://api.restaurantreview.test/v1/restaurant/vote restaurant_id

$router->get('/', function () use ($router) {
    return 'API ' . env('APP_VERSION');
});
$router->get('/version', function () use ($router) {
    return 'API ' . env('APP_VERSION');
});

$router->group(['prefix' => 'v1'], function() use ($router) {
    $router->post('restaurant/upvote', ['uses' => 'RestaurantController@upvote']);
    $router->post('restaurant/downvote', ['uses' => 'RestaurantController@downvote']);
	$router->get('restaurants', ['uses' => 'RestaurantController@getData']);
});
