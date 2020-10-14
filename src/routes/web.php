<?php
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'web','namespace' => 'JamesSingizi\Contact\Http\Controllers'], function () {

    Route::get('contact', 'ContactController@index')->name('contact');

    Route::post('contact', 'ContactController@send')->name('contact.save');
});

