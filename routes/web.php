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

Route::get('/', 'MainController@index')->name('main');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'MainController@index')->name('admin_main');

    Route::get('/api/attributes/search', 'ProductAttributeController@search')->name('admin_product_attributes_search');
    Route::post('/api/products', 'ProductController@indexApi')->name('admin_products_api');
    Route::post('/api/product/{id}/attribute/add', 'ProductAttributeController@search')->name('admin_product_attributes_add');
    Route::get('/api/category/{id}/breadcrumbs', 'CategoryController@breadcrumbs')->name('admin_category_breadcrumbs');

    Route::get('/products', 'ProductController@index')->name('admin_products');
    Route::get('/product/log', 'LogController@index')->name('admin_products_log');
    Route::get('/product/create', 'ProductController@showCreatePage')->name('admin_create_product_page');
    Route::post('/product/create', 'ProductController@createOrUpdate')->name('admin_create_product');
    Route::get('/product/{id}', 'ProductController@show')->name('admin_product');
    Route::post('/product/update/{id}', 'ProductController@createOrUpdate')->name('admin_product_update');

    Route::get('/users', 'UserController@index')->name('admin_users');
    Route::get('/user/log', 'LogController@index')->name('admin_users_log');
    Route::get('/user/{id}', 'UserController@show')->name('admin_user');

    Route::get('/orders', 'OrderController@index')->name('admin_orders');
    Route::get('/order/log', 'LogController@index')->name('admin_orders_log');
    Route::post('/order/item/quantity/update/{id}', 'OrderItemController@updateQuantity')->name('admin_order_item_update_quantity');
    Route::post('/order/item/status/update/{id}', 'OrderItemController@updateStatus')->name('admin_order_item_update_status');
    Route::post('/order/store/status/update/{id}', 'OrderStoreController@updateStatus')->name('admin_order_store_update_status');
    Route::post('/order/store/order/update/{id}', 'OrderStoreController@updateStoreOrderId')->name('admin_order_store_update_order_id');
    Route::post('/order/comment/update/{id}', 'OrderController@updateComment')->name('admin_order_update_comment');
    Route::post('/order/courier/update/{id}', 'OrderController@updateCourier')->name('admin_order_update_courier');
    Route::get('/order/{id}', 'OrderController@show')->name('admin_order');
    Route::post('/order/{id}', 'OrderController@changeOrderStatus')->name('admin_change_order');
    Route::post('/order/{id}', 'OrderController@changeOrder')->name('admin_change_order');

    Route::get('/couriers', 'CourierController@index')->name('admin_couriers');
    Route::get('/courier/log', 'LogController@index')->name('admin_couriers_log');
    Route::get('/courier/create', 'CourierController@showCreatePage')->name('admin_create_courier_page');
    Route::post('/courier/create', 'CourierController@create')->name('admin_create_courier');
    Route::get('/courier/update/{id}', 'CourierController@showUpdatePage')->name('admin_update_courier_page');
    Route::post('/courier/update/{id}', 'CourierController@update')->name('admin_update_courier');
    Route::get('/courier/{id}', 'CourierController@show')->name('admin_courier');

    Route::get('/categories', 'CategoryController@index')->name('admin_categories');
    Route::get('/categories/unsorted', 'CategoryController@unsortedIndex')->name('admin_unsorted_categories');
    Route::get('/category/create', 'CategoryController@showCreatePage')->name('admin_create_category_page');
    Route::post('/category/create', 'CategoryController@create')->name('admin_create_category');
    Route::post('/category/unsorted/move/{id}', 'CategoryController@moveCategory')->name('admin_category_move_unsorted');
    Route::post('/category/update/parent/{id}', 'CategoryController@setParent')->name('admin_category_update_parent');
    Route::post('/category/update/{id}', 'CategoryController@update')->name('admin_category_edit_data');
    Route::post('/category/delete/{id}', 'CategoryController@delete')->name('admin_category_delete');
    Route::get('/category/{id}', 'CategoryController@showEditPage')->name('admin_edit_category_page');

    Route::get('/partners', 'PartnerController@index')->name('admin_partners');
    Route::get('/partner/log', 'LogController@index')->name('admin_partners_log');
    Route::get('/partner/{id}', 'PartnerController@show')->name('admin_partner');
});

Route::group(['prefix' => 'lk', 'namespace' => 'Lk', 'middleware' => 'auth'], function () {
    Route::get('/', 'MainController@index')->name('lk');
    Route::get('/orders', 'MainController@orders')->name('lk_orders');
    Route::get('/profile', 'ProfileController@index')->name('lk_profile');
    Route::get('/profile/editdata', 'ProfileController@showEditDataForm')->name('lk_profile_edit_data_form');
    Route::post('/profile/editdata', 'ProfileController@editData')->name('lk_profile_edit_data');
    Route::get('/profile/changeemail', 'ProfileController@showChangeEmailForm')->name('lk_profile_change_email_form');
    Route::post('/profile/changeemail', 'ProfileController@changeEmail')->name('lk_profile_change_email');
    Route::get('/profile/changepass', 'ProfileController@showChangePasswordForm')->name('lk_profile_change_password_form');
    Route::post('/profile/changepass', 'ProfileController@changePassword')->name('lk_profile_change_password');
});

Route::get('/catalog', 'CategoryController@index')->name('catalog');
Route::get('/category/{name}', 'CategoryController@show')->name('category');
Route::get('/product/{name}', 'ProductController@show')->name('product');
Route::get('/cart', 'CartController@show')->name('cart');
Route::get('/addtocart', 'CartController@addProduct')->name('add_to_cart');
Route::get('/removefromcart', 'CartController@removeProduct')->name('remove_from_cart');
Route::get('/checkout', 'CartController@showCheckout')->middleware('auth')->name('checkout_page');
Route::post('/order', 'OrderController@create')->middleware('auth')->name('place_order');
Route::get('/favorites', 'FavoriteListController@show')->name('favorites');

Route::post('/api/cart', 'CartController@api')->name('api_cart');
Route::post('/api/favorites', 'FavoriteListController@api')->name('api_favorites');

Auth::routes();
Route::get('/personal-data-agreement', 'StaticPageController@personalDataAgreement')->name('personal-data-agreement');
Route::get('/personal-data-policy', 'StaticPageController@personalDataPolicy')->name('personal-data-policy');
Route::get('/sale-regulations', 'StaticPageController@saleRegulations')->name('sale-regulations');
