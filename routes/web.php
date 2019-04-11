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

Route::get('/', 'HomeController@index');
Route::get('about', 'AboutController@index');
Route::get('news', 'NewsController@index');
Route::get('news/detail/{id}', 'NewsController@detail');
Route::get('knowledge', 'KnowledgeController@index');
Route::get('laws', 'LawsController@index');
Route::get('contact', 'ContactController@index');

Auth::routes();
//Route::middleware(['auth'])->group(function () {
    Route::prefix('backend')->group(function () {
        Route::get('/', 'Backend\HomeController@index');
        Route::prefix('home')->group(function () {
            Route::get('/', 'Backend\HomeController@index');
            Route::get('edit/{id}', 'Backend\HomeController@edit');
            Route::post('edit/{id}', 'Backend\HomeController@update');
        });
        Route::prefix('banner')->group(function () {
            Route::get('/', 'Backend\BannerController@index');
            Route::get('add', 'Backend\BannerController@add');
            Route::post('add', 'Backend\BannerController@store');
            Route::get('edit/{id}', 'Backend\BannerController@edit');
            Route::post('edit', 'Backend\BannerController@storeedit');
            Route::get('delete/{id}', 'Backend\BannerController@destroy');
        });
        Route::prefix('about')->group(function () {
            Route::prefix('member')->group(function () {
                Route::get('/', 'Backend\AboutMemberController@index');
                Route::get('add', 'Backend\AboutMemberController@create');
                Route::post('add', 'Backend\AboutMemberController@store');
                Route::get('edit/{id}', 'Backend\AboutMemberController@edit');
                Route::post('edit/{id}', 'Backend\AboutMemberController@update');
                Route::get('delete/{id}', 'Backend\AboutMemberController@destroy');
            });
            Route::prefix('history')->group(function () {
                Route::get('/', 'Backend\AboutHistoryController@index');
                Route::post('/{id}', 'Backend\AboutHistoryController@update');
            });
        });
        Route::prefix('news')->group(function () {
            Route::post('upload/image', 'Backend\NewsActivityController@upload_image');
            Route::get('/', 'Backend\NewsActivityController@index');
            Route::get('add', 'Backend\NewsActivityController@create');
            Route::post('add', 'Backend\NewsActivityController@store');
            Route::get('edit/{id}', 'Backend\NewsActivityController@edit');
            Route::post('edit/{id}', 'Backend\NewsActivityController@update');
            Route::get('delete/{id}', 'Backend\NewsActivityController@destroy');
            Route::post('delete/file', 'Backend\NewsActivityController@delete_file');
            Route::prefix('cate')->group(function () {
                Route::post('upload/image', 'Backend\CateNewsActivityController@upload_image');
                Route::get('/', 'Backend\CateNewsActivityController@index');
                Route::get('add', 'Backend\CateNewsActivityController@create');
                Route::post('add', 'Backend\CateNewsActivityController@store');
                Route::get('edit/{id}', 'Backend\CateNewsActivityController@edit');
                Route::post('edit/{id}', 'Backend\CateNewsActivityController@update');
                Route::get('delete/{id}', 'Backend\CateNewsActivityController@destroy');
            });
            
        });
        Route::prefix('knowledge')->group(function () {
            Route::post('upload/image', 'Backend\KnowledgeController@upload_image');
            Route::get('/', 'Backend\KnowledgeController@index');
            Route::get('add', 'Backend\KnowledgeController@create');
            Route::post('add', 'Backend\KnowledgeController@store');
            Route::get('edit/{id}', 'Backend\KnowledgeController@edit');
            Route::post('edit/{id}', 'Backend\KnowledgeController@update');
            Route::get('delete/{id}', 'Backend\KnowledgeController@destroy');
            Route::prefix('cate')->group(function () {
                Route::get('/', 'Backend\CateKnowledgeController@index');
                Route::get('add', 'Backend\CateKnowledgeController@create');
                Route::post('add', 'Backend\CateKnowledgeController@store');
                Route::get('edit/{id}', 'Backend\CateKnowledgeController@edit');
                Route::post('edit/{id}', 'Backend\CateKnowledgeController@update');
                Route::get('delete/{id}', 'Backend\CateKnowledgeController@destroy');
            });
        });
        Route::prefix('youtube')->group(function () {
            Route::get('/', 'Backend\YoutubeController@index');
            Route::get('add', 'Backend\YoutubeController@create');
            Route::post('add', 'Backend\YoutubeController@store');
            Route::get('edit/{id}', 'Backend\YoutubeController@edit');
            Route::post('edit/{id}', 'Backend\YoutubeController@update');
            Route::get('delete/{id}', 'Backend\YoutubeController@destroy');
            Route::prefix('cate')->group(function () {
                Route::get('/', 'Backend\CateYoutubeController@index');
                Route::get('add', 'Backend\CateYoutubeController@create');
                Route::post('add', 'Backend\CateYoutubeController@store');
                Route::get('edit/{id}', 'Backend\CateYoutubeController@edit');
                Route::post('edit/{id}', 'Backend\CateYoutubeController@update');
                Route::get('delete/{id}', 'Backend\CateYoutubeController@destroy');
            });
        });
        Route::prefix('laws')->group(function () {
            Route::post('upload/image', 'Backend\NewsActivityController@upload_image');
            Route::get('/', 'Backend\LawsController@index');
            Route::get('add', 'Backend\LawsController@create');
            Route::post('add', 'Backend\LawsController@store');
            Route::get('edit/{id}', 'Backend\LawsController@edit');
            Route::post('edit/{id}', 'Backend\LawsController@update');
            Route::get('delete/{id}', 'Backend\LawsController@destroy');
            Route::prefix('cate')->group(function () {
                Route::post('upload/image', 'Backend\CateLawsController@upload_image');
                Route::get('/', 'Backend\CateLawsController@index');
                Route::get('add', 'Backend\CateLawsController@create');
                Route::post('add', 'Backend\CateLawsController@store');
                Route::get('edit/{id}', 'Backend\CateLawsController@edit');
                Route::post('edit/{id}', 'Backend\CateLawsController@update');
                Route::get('delete/{id}', 'Backend\CateLawsController@destroy');
            });
        });
        Route::prefix('contact')->group(function () {
            Route::get('/', 'Backend\ContactDataController@index');
            Route::post('save', 'Backend\ContactDataController@store'); 
        });
    });
//});
