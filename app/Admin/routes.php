<?php

use App\Admin\Controllers\EnquiryController;
use App\Admin\Controllers\TrackingController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('trackings', TrackingController::class);

    $router->resource('enquiries', EnquiryController::class);


});
