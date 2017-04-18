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
 use App\Models\Score;
 use App\Models\Comments;
 use Illuminate\Http\Request;

$app->get('/', function () use ($app) {
    return view('base');
});

$app->get('partials/{resource}/{action}', function ($resource, $action) {

    return view("partials/$resource/$action");

});

/**
 * Routes for resource client
 */
$app->get('api/v1/client', 'ClientsController@all');
$app->get('api/v1/client/{id}', 'ClientsController@get');
$app->post('api/v1/client', 'ClientsController@add');
$app->put('api/v1/client/{id}', 'ClientsController@put');
$app->delete('api/v1/client/{id}', 'ClientsController@remove');

/**
 * Routes for resource director
 */
$app->get('api/v1/director', 'DirectorsController@all');
$app->get('api/v1/director/{id}', 'DirectorsController@get');
$app->post('api/v1/director', 'DirectorsController@add');
$app->put('api/v1/director/{id}', 'DirectorsController@put');
$app->delete('api/v1/director/{id}', 'DirectorsController@remove');

/**
 * Routes for resource genre
 */
$app->get('api/v1/genre', 'GenresController@all');
$app->get('api/v1/genre/{id}', 'GenresController@get');
$app->post('api/v1/genre', 'GenresController@add');
$app->put('api/v1/genre/{id}', 'GenresController@put');
$app->delete('api/v1/genre/{id}', 'GenresController@remove');

/**
 * Routes for resource movie
 */
$app->get('api/v1/movie', 'MoviesController@all');
$app->get('api/v1/movie/{id}', 'MoviesController@get');
$app->post('api/v1/movie', 'MoviesController@add');
$app->put('api/v1/movie/{id}', 'MoviesController@put');
$app->delete('api/v1/movie/{id}', 'MoviesController@remove');

/**
 * Routes for resource rent
 */
$app->get('api/v1/rent', 'RentsController@all');
$app->get('api/v1/rent/{id}', 'RentsController@get');
$app->post('api/v1/rent', 'RentsController@add');
$app->put('api/v1/rent/{id}', 'RentsController@put');
$app->delete('api/v1/rent/{id}', 'RentsController@remove');
