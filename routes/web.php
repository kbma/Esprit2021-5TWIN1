<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('accueil');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/formation', function () {
    return view('formations');
})->name('formation');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::get('/start', function () {
    return view('user.view1');
});


Route::get('/text', function () {
    return "Un simple text";
});

//Route::redirect('/','text');

Route::view('message','salutation',['nom'=>'Sonia','tel'=>657576576]);

Route::get('/user/{id}/nom/{n}', function ($id,$n) {
    return "Votre id est ".$id. " et votre nom est ".$n;
});

Route::get('/client/{id}/{nom}/{ville}', function ($id,$nom,$ville) {
    return "Votre id est ".$id. " et votre nom est ".$nom.  " et votre ville est".$ville;
})->name('client');

Route::get('/message/{prenom}/{age}', function ($prenom,$age) {
    return "Bonjour ".$prenom. " et votre age est".$age;
})->where(['prenom'=>'[a-zA-Z]+', 'age'=>'[0-9]+']);


//Route::get('pic',[PhotoController::class,'index']);

Route::resource('photos', PhotoController::class);

Route::get('TesterAge/{age}',[PhotoController::class,'selonAge']);

Route::get('/R2', function () {
    return [1,6,7];
});
Route::get('/R4', function () {
    return response('Créer un cookie', 200)
        ->header('Content-Type', 'text/plain')
        ->cookie('Esprit 5TWIN1', 'Classe 5TWIN', 120);
});

Route::get('/user', function () {
    return redirect('start')->with('message','Client ajouté avec succés');
});

Route::get('/R5', function () {

    return response()->json([
        'name' => 'Abigail',
        'state' => 'CA',
    ]);

});

Route::get('/produit', function () {
    return view('front.produit');
});

Route::get('/categorie', function () {
    return view('front.categorie');
});
