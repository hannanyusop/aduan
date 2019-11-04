<?php

require __DIR__.'/auth/user.php';
require __DIR__.'/auth/role.php';


Route::group(['prefix' => 'admin/test'], function (){
    Route::get('test', function (){
        return 'dada';
    });
});
Route::group(['prefix' => 'admin/', 'namespace' => 'Auth', 'as' => 'auth.', 'middleware' => 'auth', 'permission' => 'view-backend'], function (){


    Route::group(['as' => 'report.', 'prefix' => 'report/'], function (){
        Route::get('', 'ReportController@index')->name('index');
    });

});
