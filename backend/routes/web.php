<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|S
*/

//丁か半かの賭け事アプリ
Route::get('/dice_game_top','App\Http\Controllers\DiceController@dice_game_top')->name('dice_game_top');

Route::post('/dice_game_select','App\Http\Controllers\DiceController@dice_game_select')->name('dice_game_select');

Route::post('/dice_game_answer','App\Http\Controllers\DiceController@dice_game_answer')->name('dice_game_answer');

//BMI処理
Route::get('/bmi_top','App\Http\Controllers\BmiController@bmi_top')->name('bmi_top');

Route::post('/bmi_result','App\Http\Controllers\BmiController@bmi_result')->name('bmi_result');

//動物心理テストTOP
Route::get('/psychology_top','App\Http\Controllers\PsychologyController@psychology_top')->name('psychology_top');
//感想を見るページ
Route::get('/psychology_impressions','App\Http\Controllers\PsychologyController@psychology_impressions')->name('psychology_impressions');
//問題を表示するページ
Route::get('/psychology_quizu/{id}','App\Http\Controllers\PsychologyController@psychology_quizu')->name('psychology_quizu');
Route::post('/psychology_quizu/{id}','App\Http\Controllers\PsychologyController@psychology_quizu')->name('psychology_quizu');

//問題を全て解いた結果を表示するページ
Route::post('/psychology_answer','App\Http\Controllers\PsychologyController@psychology_answer')->name('psychology_answer');
//名前・感想の送信確認ページ
Route::put('/psychology_impressions_save','App\Http\Controllers\PsychologyController@psychology_save')->name('psychology_save');
//送信完了ページ
Route::put('/psychology_impressions_complete','App\Http\Controllers\PsychologyController@psychology_complete')->name('psychology_complete');

//jin_homepage
Route::get('/jin_homepage','App\Http\Controllers\JinHomepageController@jin_homepage')->name('jin_homepage');
//jin_homepage_check(フォームのチェック画面)
Route::post('/jin_homepage_check','App\Http\Controllers\JinHomepageController@jin_homepage_check')->name('jin_homepage_check');
//jin_homepage_complete(フォームの送信完了画面)
Route::put('/jin_homepage_complete','App\Http\Controllers\JinHomepageController@jin_homepage_complete')->name('jin_homepage_complete');

Route::get('/', function () {
    return view('welcome');
});
