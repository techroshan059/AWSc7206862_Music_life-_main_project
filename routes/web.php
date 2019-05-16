<?php

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






//frontend route here


Route::get('/menu/{menu_category}','Frontend\MenuCategory@index')->name('ktmspice.menu.category');


//customer auth start
Route::get('/signup',function (){
    return redirect('/signup-account');
});
Route::get('/signup-account','Frontend\Auth\RegisterController@showRegistrationForm')->name('customer.register');
Route::POST('/signup-account','Frontend\Auth\RegisterController@registerNewCustomer')->name('customer.register');
Route::get('/signin','Frontend\Auth\LoginController@showLoginForm')->name('customer.login');
Route::post('/signin','Frontend\Auth\LoginController@login')->name('customer.login');
Route::get('/logout','Frontend\Auth\LoginController@logout')->name('customer.logout');


Route::get('/menu-items','Frontend\MenuItemController@index')->name('menu.item');

//customer auth end
Route::group(['middleware' => 'auth:customer'], function() {
    route::group(['prefix'=>'manage'],function(){
        Route::get('index','Frontend\ManageController@index')->name('manage.profile');
        Route::get('orders','Frontend\ManageController@getOrderData')->name('manage.orders');
        Route::post('index/','Frontend\ManageController@updateProfile')->name('manage.profile.update');
        Route::get('locations','Frontend\ManageController@getLocations')->name('manage.locations');
        Route::get('locations/new-delivery-location','Frontend\ManageController@showAddNewLocation')->name('manage.locations.new');
        Route::post('locations/new-delivery-location','Frontend\ManageController@storeAddNewLocation')->name('manage.locations.new.store');
        Route::get('locations/edit-delivery-location/{id}','Frontend\ManageController@showEditLocation')->name('manage.locations.edit');
        Route::post('locations/edit-delivery-location/{id}','Frontend\ManageController@storeEditLocation')->name('manage.locations.edit.store');

    });
    Route::get('checkout','Frontend\DeliveryCheckoutController@checkout')->name('order.checkout');
});
//front route end

Route::GET('/','Frontend\HomeController@index')->name('ktmspice.home');

//backend route here


Route::GET('/ktm-admin/login','Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::POST('/ktm-admin/login','Admin\Auth\LoginController@login')->name('admin.login');


Route::group(['middleware' => ['auth:admin'], 'prefix' => 'ktm-admin', 'as' => 'admin'], function () {
    Route::GET('/ktm-admin/logout','Admin\Auth\LoginController@logout')->name('admin.logout');
    Route::get('/', function () {
        return redirect('ktm-admin/dashboard');
    });
    Route::get('/dashboard', function () {
        return view('Admin.index');
    });
    // homepageslider start
    Route::GET('manage/homepageslider','Admin\HomepageslidersController@index')->name('homesliderroute.index');
    Route::GET('/manage/homepageslider/addnew','Admin\HomepageslidersController@create')->name('homesliderroute.create');
    Route::POST('/manage/homepageslider/addnew','Admin\HomepageslidersController@store')->name('homesliderroute.store');
    Route::GET('/manage/homepageslider/editslider/{id}','Admin\HomepageslidersController@edit')->name('homesliderroute.edit');
    Route::POST('/manage/homepageslider/editslider/{id}','Admin\HomepageslidersController@update')->name('homesliderroute.update');
    Route::GET('/manage/homepageslider/deleteslider/{id}','Admin\HomepageslidersController@destroy')->name('homesliderroute.destory');
    // homepageslider end


     // category start
     Route::GET('manage/category','Admin\CategoryController@index')->name('category.index');
     Route::GET('/manage/category/addnew','Admin\CategoryController@create')->name('category.create');
     Route::POST('/manage/category/addnew','Admin\CategoryController@store')->name('category.store');
     Route::GET('/manage/category/editslider/{id}','Admin\CategoryController@edit')->name('category.edit');
     Route::Post('/manage/category/editslider/{id}','Admin\CategoryController@update')->name('category.update');
     Route::GET('/manage/category/deleteslider/{id}','Admin\CategoryController@destroy')->name('category.destory');
     // category end


      // discount start
      Route::GET('manage/discount-voucher','Admin\DiscountVouchersController@index')->name('discountVoucher.index');
      Route::GET('/manage/discount-voucher/addnew','Admin\DiscountVouchersController@create')->name('discountVoucher.create');
      Route::POST('/manage/discount-voucher/addnew','Admin\DiscountVouchersController@store')->name('discountVoucher.store');
      Route::GET('/manage/discount-voucher/editslider/{id}','Admin\DiscountVouchersController@edit')->name('discountVoucher.edit');
      Route::Post('/manage/discount-voucher/editslider/{id}','Admin\DiscountVouchersController@update')->name('discountVoucher.update');
      Route::GET('/manage/discount-voucher/deletediscount/{id}','Admin\DiscountVouchersController@destroy')->name('discountVoucher.destory');
      Route::GET('/manage/discount-voucher/single/{id}','Admin\DiscountVouchersController@singleDiscountVoucher')->name('discountVoucher.destory');
      // discount end



    //customer
    Route::GET('customers','Admin\CustomerController@index')->name('customer.index');
    Route::POST('customers','Admin\CustomerController@search')->name('customer.index');
    Route::GET('customer/single/{id}','Admin\CustomerController@singleCustomerData')->name('customer.singleCustomerData');

    Route::GET('setting/order','Admin\SettingController@showOrder')->name('setting.order');
    Route::POST('setting/order','Admin\SettingController@updateOrderSetting')->name('setting.order.update');


    Route::GET('setting/general','Admin\SettingController@showGeneral')->name('setting.general');
    Route::POST('setting/general','Admin\SettingController@updateGeneralSetting')->name('setting.general.update');

    Route::GET('setting/payment-method','Admin\SettingController@showPaymentMethod')->name('paymentsystem.index');
    Route::POST('setting/payment-method','Admin\SettingController@updatePaymentMethod')->name('paymentsystem.updatePaymentMethod');


    Route::GET('setting/working-time','Admin\SettingController@showWorkingTime')->name('setting.WorkingTime');
    Route::POST('setting/working-time','Admin\SettingController@updateWorkingTimeSetting')->name('setting.WorkingTime.update');


    Route::GET('setting/profile','Admin\ProfileController@index')->name('profile.index');
    Route::POST('setting/profile','Admin\ProfileController@editprofile')->name('profile.index');


    Route::GET('setting/restaurant','Admin\RestaurantController@index')->name('RestaurantAddressController.index');
    Route::POST('setting/restaurant','Admin\RestaurantController@editRestaurant')->name('RestaurantAddressController.editRestaurant');

    Route::GET('setting/local','Admin\LocalController@index')->name('local.index');
    Route::POST('setting/local','Admin\LocalController@editlocal')->name('local.editlocal');

   


    Route::GET('setting/working-times','Admin\WorkingTimesController@index')->name('local.index');
    Route::get('/staff-list', function () {
        return view('Admin.staff.stafflist');
    });


    // menus start
    Route::GET('menus','Admin\MenuController@index')->name('menus.index');
    Route::GET('menus/getAjaxMenuItem','Admin\MenuController@getAjaxMenuItem')->name('menus.getAjaxMenuItem');

    Route::GET('menu/single/{id}','Admin\MenuController@singleMenu')->name('menu.single');
    Route::GET('menu/addnew','Admin\MenuController@create')->name('menus.create');
    Route::POST('menu/addnew','Admin\MenuController@store')->name('menus.store');
    Route::GET('menu/edit/{itemId}','Admin\MenuController@edit')->name('menus.edit');
    Route::Post('menu/edit/{itemId}','Admin\MenuController@update')->name('menus.update');
    Route::GET('menu/delete/{itemId}','Admin\MenuController@destroy')->name('menus.destory');
    // menus end


      // extra-meal start
      Route::GET('extra-meal','Admin\MenuController@index')->name('extra-meal.index');
      Route::GET('extra-meal/addnew','Admin\MenuController@create')->name('extra-meal.create');
      Route::POST('extra-meal/addnew','Admin\MenuController@store')->name('extra-meal.store');
      Route::GET('extra-meal/edit/{id}','Admin\MenuController@edit')->name('extra-meal.edit');
      Route::Post('extra-meal/edit/{id}','Admin\MenuController@update')->name('extra-meal.update');
      Route::GET('extra-meal/delete/{id}','Admin\MenuController@destroy')->name('extra-meal.destory');
      // extra-meal end


//    newsletter/subscribers
    Route::Get('newsletter/subscribers','Admin\NewsLetterController@index')->name('newletter.subscribers');
    Route::Get('newsletter/subscribers/delete/{id}','Admin\NewsLetterController@removeSubscriber')->name('newletter.subscribers.delete');


    Route::Get('/sales/invoice/{id}','Admin\InvoiceController@index')->name('invoice.index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
