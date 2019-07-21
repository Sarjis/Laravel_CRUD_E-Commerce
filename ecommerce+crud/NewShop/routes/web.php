<?php

// Front End => start

Route::get('/', [

    'uses' => 'NewShopController@index',
    'as' => '/'
]);
Route::get('/category-product/{id}', [

    'uses' => 'NewShopController@categoryProduct',
    'as' => 'category-product'
]);
Route::get('/brand-product/{id}', [

    'uses' => 'NewShopController@brandProduct',
    'as' => 'brand-product'
]);
Route::post('/user/login', [
    'uses' => 'HomeController@userLogin',
    'as' => 'user-login'
]);
Route::get('/mail-us', [

    'uses' => 'NewShopController@mailUs',
    'as' => 'mail-us'
]);

Route::get('/product-details/{id}', [
    'uses' => 'NewShopController@productDetails',
    'as' => 'product-details'
]);
// cart
Route::post('/add-to-cart', [
    'uses' => 'CartController@addToCart',
    'as' => 'add-to-cart'
]);
Route::get('/cart/show', [
    'uses' => 'CartController@showCart',
    'as' => 'show-cart'
]);
Route::get('/cart/delete/{rowId}', [
    'uses' => 'CartController@deleteCartItem',
    'as' => 'delete-cart-item'
]);
Route::post('/cart/update', [
    'uses' => 'CartController@updateCartItem',
    'as' => 'update-cart-item'
]);
Route::get('/checkout', [
    'uses' => 'CheckoutController@index',
    'as' => 'checkout'
]);
Route::post('/customer/registration', [
    'uses' => 'CustomerController@customerRegistration',
    'as' => 'customer-registration'
]);
Route::post('/customer/login', [
    'uses' => 'CustomerController@customerLogin',
    'as' => 'customer-login'
]);
// Front End =>end
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Brand
//Route::group(['middleware' => 'Authenticate'], function () {


//category

    Route::get('/category/add', [
        'uses' => 'CategoryController@index',
        'as' => 'add-category'
    ]);

    Route::post('/category/save', [
        'uses' => 'CategoryController@saveCategoryInfo',
        'as' => 'new-category'
    ]);
    Route::get('/category/manage', [
        'uses' => 'CategoryController@manageCategoryInfo',
        'as' => 'manage-category'
    ]);

    Route::get('/category/publish/{id}', [
        'uses' => 'CategoryController@publishCategoryInfo',
        'as' => 'category/publish'
    ]);

    Route::get('/category/un-publish/{id}', [
        'uses' => 'CategoryController@UnPublishCategoryInfo',
        'as' => 'category/un-publish'
    ]);
    Route::get('/category/edit/{id}', [
        'uses' => 'CategoryController@editCategoryInfo',
        'as' => 'category-edit'
    ]);
    Route::post('/category/update', [
        'uses' => 'CategoryController@updateCategoryInfo',
        'as' => 'update-category'
    ]);
    Route::get('/category/delete/{id}', [
        'uses' => 'CategoryController@deleteCategoryInfo',
        'as' => 'category/delete'
    ]);
//Brand start
    Route::get('/brand/add', [
        'uses' => 'BrandController@index',
        'as' => 'add-brand'
    ]);

    Route::post('/brand/save', [
        'uses' => 'BrandController@saveBrandInfo',
        'as' => 'new-brand'
    ]);
    Route::get('/brand/manage', [
        'uses' => 'BrandController@manageBrandInfo',
        'as' => 'manage-brand'
    ]);

    Route::get('/brand/publish/{id}', [
        'uses' => 'BrandController@publishBrandInfo',
        'as' => 'brand/publish'
    ]);

    Route::get('/brand/un-publish/{id}', [
        'uses' => 'BrandController@UnPublishBrandInfo',
        'as' => 'brand/un-publish'
    ]);
    Route::get('/brand/edit/{id}', [
        'uses' => 'BrandController@editBrandInfo',
        'as' => 'brand-edit'
    ]);
    Route::post('/brand/update', [
        'uses' => 'BrandController@updateBrandInfo',
        'as' => 'update-brand'
    ]);
    Route::get('/brand/delete/{id}', [
        'uses' => 'BrandController@deleteBrandInfo',
        'as' => 'brand/delete'
    ]);
// Brand
// Product

    Route::get('/product/add', [
        'uses' => 'ProductController@index',
        'as' => 'add-product'
    ]);

    Route::post('/product/save', [
        'uses' => 'ProductController@saveProductInfo',
        'as' => 'new-product'
    ]);
    Route::post('/product/update', [
        'uses' => 'ProductController@updateProductInfo',
        'as' => 'update-product'
    ]);
    Route::get('/product/manage', [
        'uses' => 'ProductController@manageProduct',
        'as' => 'manage-product'
    ]);
    Route::get('/product/publish/{id}', [
        'uses' => 'ProductController@publishProduct',
        'as' => 'product/publish'
    ]);
    Route::get('product/un-publish/{id}', [
        'uses' => 'ProductController@unPublishProduct',
        'as' => 'product/un-publish'
    ]);
    Route::get('product/details/{id}', [
        'uses' => 'ProductController@detailsProduct',
        'as' => 'product/details'
    ]);
    Route::get('product/edit/{id}', [
        'uses' => 'ProductController@editProduct',
        'as' => 'product-edit'
    ]);
    Route::get('product/delete/{id}', [
        'uses' => 'ProductController@editProduct',
        'as' => 'product/delete'
    ]);

//});


// Admin Product
