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

Auth::routes();

Route::get('/', 'MainController@index')->name('page.home');
Route::get('/help', 'HelpController@index')->name('page.help');
Route::get('/terms_and_conditions', 'PageController@terms')->name('page.terms');
Route::get('/policy', 'PageController@policy')->name('page.policy');
Route::get('/about', 'PageController@about')->name('page.about');

Route::get('/blog', 'BlogController@index')->name('page.blog');
Route::post('/blog/page', 'BlogController@getPage')->name('page.blog_page');

Route::get('/subscribe', 'PageController@subscribe')->name('page.subscribe');

//dashboard sections
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function (){

    Route::get('/', function () {
        return view('dashboard.home.index');
    })->name('dashboard.index');

    //user profile group
    Route::get('profile', 'ProfileController@show')->name('profile.show');
    Route::post('profile-update', 'ProfileController@updateProfile')->name('profile.update');

    Route::group(['prefix' => 'main'], function () {
        Route::get('/', 'Admin\MainController@show')->name('main.show');

        Route::get('features', 'Admin\MainController@features')->name('main.features');
        Route::get('features/edit/{id}', 'Admin\MainController@featuresEdit')->name('main.features_edit');

        Route::get('faq', 'Admin\MainController@faq')->name('main.faq');
        Route::get('faq/add', 'Admin\MainController@faqCreate')->name('main.faq_create');
        Route::get('faq/edit/{id}', 'Admin\MainController@faqEdit')->name('main.faq_edit');
        Route::post('faq/create', 'Admin\MainController@createFaq')->name('faq.create_item');
        Route::post('faq/update/{id}', 'Admin\MainController@updateFaq')->name('faq.update_item');
        Route::post('faq/delete/{id}', 'Admin\MainController@deleteFaq')->name('faq.delete_item');
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'Admin\BlogController@index')->name('blog.index');
        Route::get('list', 'Admin\BlogController@list')->name('blog.list');
        Route::get('add', 'Admin\BlogController@create')->name('blog.create');
        Route::get('edit/{id}', 'Admin\BlogController@update')->name('blog.edit');

        Route::post('create', 'Admin\BlogController@createItem')->name('blog.create_item');
        Route::post('update/{id}', 'Admin\BlogController@updateItem')->name('blog.update_item');
        Route::post('delete/{id}', 'Admin\BlogController@deleteItem')->name('blog.delete_item');
    });

    Route::group(['prefix' => 'help'], function () {
        Route::get('/', 'Admin\HelpController@index')->name('help.index');
        Route::get('list', 'Admin\HelpController@list')->name('help.list');
        Route::get('add', 'Admin\HelpController@create')->name('help.create');
        Route::get('edit/{id}', 'Admin\HelpController@update')->name('help.edit');

        Route::post('create', 'Admin\HelpController@createItem')->name('help.create_item');
        Route::post('update/{id}', 'Admin\HelpController@updateItem')->name('help.update_item');
        Route::post('delete/{id}', 'Admin\HelpController@deleteItem')->name('help.delete_item');
    });

    Route::get('about_us', 'Admin\AboutController@index')->name('about.index');
    Route::get('terms', 'Admin\StaticController@terms')->name('static.terms');
    Route::get('privacy', 'Admin\StaticController@privacy')->name('static.privacy');

    Route::post('post_edit/{name}', 'Admin\PostController@edit')->name('post_edit');

});
