<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//$2y$10$O4lOA8pNdexmeqnw5J0F7.MLwNurc7DZPZRjAVyyQ38sLVv0cgab6


 Route::group(['prefix'=>'$2y$10$O4lOA8pNdexmeqnw5J0F7.MLwNurc7DZPZRjAVyyQ38sLVv0cgab6'],function (){
     Route::post('auth/login', 'Frontend\Api\CustomerAuth\CustomerController@login');
     Route::post('auth/customer-register', 'Frontend\Api\CustomerAuth\CustomerController@registerNewCustomer');
     Route::get('auth/customer-register/activate/{token}', 'Frontend\Api\CustomerAuth\CustomerController@signupActivate');
        Route::group(['middleware' => 'auth:api'], function() {
             Route::get('logout', 'Frontend\Api\CustomerAuth\CustomerController@ dd');
             Route::get('/auth/customer', 'Frontend\Api\CustomerAuth\CustomerController@getCustomerData');

         });


     Route::group(['middleware' => 'auth:api'], function() {
//         Route::get('logout', 'Frontend\Api\CustomerAuth\CustomerController@logout');
//         Route::get('/auth/customer', 'Frontend\Api\CustomerAuth\CustomerController@getCustomerData');




     });

     Route::POST('/addnewcustomeraddressess','Frontend\Api\CustomerAddressApiController@addNewCustomerAddress');
     Route::DELETE('/addnewcustomeraddressess/delete/{id}','Frontend\Api\CustomerAddressApiController@deleteCustomerAddress');
     Route::GET('/menu-categories','Frontend\Api\MenuCategoryApiController@getMenuCategories')->name('api.menu.categories');
     Route::GET('/menu-items/{country_id}/{category_id}','Frontend\Api\MenuCategoryApiController@getMenuItems')->name('api.menu.items');
     Route::GET('/customer-address/{cId}','Frontend\Api\CustomerAddressApiController@getCustomerAddress')->name('api.customer.address');
     Route::GET('/settingorder','Frontend\Api\SettingApiController@getSettingOrder')->name('api.local');
     Route::GET('/settinggeneral','Frontend\Api\SettingApiController@getSettingGeneral')->name('api.general');
     Route::GET('/firstCategory','Frontend\Api\MenuCategoryApiController@getFirstCat')->name('api.general');
 });


