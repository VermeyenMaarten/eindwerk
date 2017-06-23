<?php

Route::get('/', function()
{
    return View::make('pages.home');
});

Auth::routes();

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/orders', 'AdminController@getOrders')->name('admin.orders');
    Route::get('/products', 'AdminController@getProducts')->name('admin.products');
    Route::get('/add-product', 'AdminController@addProduct')->name('admin.add');
    Route::post('/save-product', 'AdminController@saveProduct')->name('admin.save');
    Route::delete('/delete-product/{id}', 'AdminController@deleteProduct')->name('admin.delete');
    Route::get('/edit-product/{id}', 'AdminController@productToEdit')->name('admin.productToEdit');
    Route::put('/update-product/{id}', 'AdminController@updateProduct')->name('admin.update');
});



Route::get('/', [
    'uses' => 'productController@getIndex',
    'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'productController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/shopping-cart', [
    'uses' => 'productController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::delete('/shopping-cart/delete/{id}', [
    'uses' => 'productController@removeItemFromCart',
    'as' => 'product.remove'
]);

Route::get('/checkout', [
    'uses' => 'productController@getCheckout',
    'as' => 'checkout'
]);

Route::post('/checkout', [
    'uses' => 'productController@postCheckout',
    'as' => 'checkout'
]);


//View per Category
Route::get('/proteins' , [
    'uses' => 'categoryController@getProteins',
    'as' => 'category.proteins'
]);
Route::get('/mass-gainers' , [
    'uses' => 'categoryController@getMassGainers',
    'as' => 'category.massgainers'
]);
Route::get('/creatine' , [
    'uses' => 'categoryController@getCreatine',
    'as' => 'category.creatine'
]);
Route::get('/vitamins' , [
    'uses' => 'categoryController@getVitamins',
    'as' => 'category.vitamins'
]);
Route::get('/amino-acids' , [
    'uses' => 'categoryController@getAmino',
    'as' => 'category.amino'
]);


//View per product
Route::get('/product/{id}', [
    'uses' => 'productController@getProduct',
    'as' => 'product.single'
]);
