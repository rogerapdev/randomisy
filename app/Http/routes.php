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

// $app->get('/', function () use ($app) {
//     return $app->welcome();
// });


$app->get('/', function () use ($app) {
    return view('home');
});

//http://rogerio.local/projeto/randomisy/public/lottery/generator?tickets=5&numbers=15&maximum=25
$app->get('lotteries', 'LotteryController@index');
$app->get('names', 'NameController@index');

$app->get('api/lotteries/generator', 'LotteryController@generateGames');
$app->get('api/names/generator', 'NameController@generate');

// $app->group(['prefix' => 'api'], function ($app) {
// 	$app->get('lottery/generator', 'LotteryController@generateGames');
// });