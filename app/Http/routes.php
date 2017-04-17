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
 use Illuminate\Http\Request;

$app->get('/', function () use ($app) {
    return $app->version();
});

/*Create*/

$app->post('/scores/new_score', function (Request $request) use ($app) {
$new_score = new Score();
$new_score-> name  = $request-> input ('name');
$new_score-> points = $request -> input('points');
if($new_score->save())
{
	return response()->json($new_score);
}
else
{
	return response()->json("OK");
}


});


/*read*/

$app->get('/scores', function () use ($app) {
    return response()->json(Score::all());
});


/*update*/
$app->post('/scores/update_score', function (Request $request) use ($app) {

$findObjet=Score::where('name','=',$request->('name'))->first();

	if($findObjet != null)
	{
		$findObjet -> points = $request -> input(points);
		$findObjet -> save();
		return response()->json($findObjet);

	}else{
		return response()->json($findObjet);
	}
});

/*delete*/
$app->post('/scores/delete_score', function (Request $request) use ($app) {

$findObjet = Score::where('name','=',$request->('name'))->first();

	if($findObjet != null)
	{
		$findObjet -> delete();
		return response()->json($findObjet);

	}else{
		return response()->json($findObjet);
	}
});
