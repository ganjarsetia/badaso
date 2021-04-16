<?php

$media_manager_prefix_route = \config('lfm.route_prefix');
$media_manager_middleware = \config('lfm.middleware');
Route::group(['prefix' => $media_manager_prefix_route, 'middleware' => $media_manager_middleware], function () {
    // Route::group(['prefix' => $media_manager_prefix_route, 'middleware' => ['web']], function () {
    // Route::get('/', function () {
    //     dd(\Auth::user());
    // });
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

$admin_panel_route_prefix = \config('badaso.admin_panel_route_prefix');
Route::get('/' . $admin_panel_route_prefix . '/{any?}', function () {
    return view('badaso::admin-panel.index');
})->where('any', '.*');
