<?php

use Illuminate\Support\Facades\Auth;
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
});


Route::get('/model', function() {
   
 

    /*$user = new \App\User();
    $user ->name = 'Administrador 11';
    $user->email = 'admin11@hotmail.com';
    $user->password = bcrypt('123456789');

    $user->save();

    */

    /*Mass assignment - atribuição em massa
    $user = \App\User::create([
        'name' => 'Administrador 16',
        'email' => 'admin16@gmail.com',
        'password' => bcrypt('123456789'),
    ]);
    */

    /*como fazer para pegar a loja de um usuario
    
    $user = \App\User::find(1);
    return $user->store;
    
    /*como fazer para pegar o produto de uma loja

    $lojas = \App\Store::find(1);
    return $lojas->products;

    return \App\User::all();
    */

    /*Criar uma loja para o usuário 

    $user = \App\User::find(10);

      $store =  $user->store()->create(
         [
            'name' => 'Loja teste',
            'description' => 'Produtos de informática',
            'mobile_phone' => 'XX-XXXX-XXXX',
            'phone' => 'XX-XXXX-XXXX',
            'slug' => 'loja-teste'
        ]
    );

    dd($store); */

    /*Criar um produto para uma loja

    $store = \App\Store::find(30);

    $product = $store->products()->create([

        'name' => 'notebook',
        'description' => 'core i5',
        'body' => 'qualquer coisa',
        'price' => 2999.90,
        'slug' => 'notebook-dell'
    ]);

    dd($product);
    */

    /*criar uma categoria 

    $category = \App\Category::create([
        'name' => 'Games',
        'description' => null,
        'slug' => 'games'

    ]);

    return \App\Category::all();
    */

    /*adicionar um produto na categoria ou vice-versa

    $product = \App\Product::find(17);
    dd($product->categories()->attach([1]));
 */ 
    return \App\User::all();


}); 

Route::group(['middleware' => ['auth']], function(){

    
    Route::prefix('admin')->namespace('Admin')->group(function(){

        Route::prefix('stores')->name('admin.stores.')->group(function(){
    
            Route::get('/index', 'StoreController@index')->name('index');//lista as lojas
            Route::get('/create', 'StoreController@create')->name('create'); //exibe form loja
            Route::post('/store', 'StoreController@store')->name('store'); //salva as lojas form
            Route::get('/{store}/edit', 'StoreController@edit')->name('edit'); 
            Route::put('/update/{store}', 'StoreController@update')->name('update');
            Route::delete('/destroy/{store}', 'StoreController@destroy')->name('destroy');
        });
    
        Route::prefix('products')->name('admin.products.')->group(function(){
    
            Route::get('/index', 'ProductController@index')->name('index');//lista as lojas
            Route::get('/create', 'ProductController@create')->name('create'); //exibe form loja
            Route::post('/product', 'ProductController@store')->name('store'); //salva as lojas form
            Route::get('/{product}/edit', 'ProductController@edit')->name('edit'); 
            Route::put('/update/{product}', 'ProductController@update')->name('update');
            Route::delete('/destroy/{product}', 'ProductController@destroy')->name('destroy');
        });
    });
    
});
        





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
