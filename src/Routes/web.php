<?php

$prefix = \config('lfm.route_prefix');
Route::group(compact('prefix'), function () {
    UniSharp\LaravelFilemanager\Lfm::routes();
});

$admin_panel_route_prefix = \config('badaso.admin_panel_route_prefix');
Route::get('/' . $admin_panel_route_prefix . '/{any?}', function () {
    return view('badaso::admin-panel.index');
})->where('any', '.*');
