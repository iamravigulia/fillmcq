<?php
use Illuminate\Support\Facades\Route;

// Route::get('greeting', function () {
//     return 'Hi, this is your awesome package!';
// });

// Route::get('test', 'EdgeWizz\Fillup\Controllers\FillupController@test')->name('test');

Route::post('fmt/Fillmcq/store', 'EdgeWizz\Fillmcq\Controllers\FillmcqController@store')->name('fmt.Fillmcq.store');

Route::post('fmt/Fillmcq/update/{id}', 'EdgeWizz\Fillmcq\Controllers\FillmcqController@update')->name('fmt.Fillmcq.update');

Route::post('fmt/Fillmcq/csv_upload', 'EdgeWizz\Fillmcq\Controllers\FillmcqController@uploadFile')->name('fmt.Fillmcq.csv');

Route::any('fmt/Fillmcq/delete/{id}',  'EdgeWizz\Fillmcq\Controllers\FillmcqController@delete')->name('fmt.Fillmcq.delete');

Route::any('fmt/Fillmcq/inactive/{id}',  'EdgeWizz\Fillmcq\Controllers\FillmcqController@inactive')->name('fmt.Fillmcq.inactive');
Route::any('fmt/Fillmcq/active/{id}',  'EdgeWizz\Fillmcq\Controllers\FillmcqController@active')->name('fmt.Fillmcq.active');