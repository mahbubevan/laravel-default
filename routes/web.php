<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    ### Admin AUTH ROUTES ###
    Route::namespace('Auth')->group(function () {
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@login');
        Route::get('logout', 'LoginController@logout')->name('logout');
    });

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', 'AdminController@index')->name('dashboard');

        ##########Speakers ##########
        #############################
        Route::get('/speakers', 'SpeakerController@index')->name('speaker.list');
        Route::get('/speaker/create', 'SpeakerController@create')->name('speaker.create');
        Route::post('/speakers', 'SpeakerController@store')->name('speaker.store');
        Route::get('/speaker/{speaker}', 'SpeakerController@show')->name('speaker.show');
        Route::get('/speaker/{speaker}/edit', 'SpeakerController@edit')->name('speaker.edit');
        Route::put('/speaker/{speaker}', 'SpeakerController@update')->name('speaker.update');
        Route::get('/speaker/{speaker}/delete', 'SpeakerController@destroy')->name('speaker.delete');

        //Trashed & Resotre
        Route::get('/trashed/speaker', 'SpeakerController@trashed')->name('speaker.trashed');
        Route::get('/retrieve/speaker/{id}', 'SpeakerController@retrieve')->name('speaker.retrieve');
        Route::get('/permanent_delete/speaker/{id}', 'SpeakerController@permanent_delete')->name('speaker.permanent.delete');


        #################################################################
        ####################### Topic Management #########################
        ##################################################################
        Route::get('/topics', 'TopicController@index')->name('topics.index');
        Route::get('/topic/create', 'TopicController@create')->name('topic.create');
        Route::post('/topics', 'TopicController@store')->name('topic.store');
        Route::get('/topics/{topic}/edit', 'TopicController@edit')->name('topic.edit');
        Route::put('/topics/{topic}', 'TopicController@update')->name('topic.update');
        Route::get('/topics/{topic}/delete', 'TopicController@destroy')->name('topic.delete');

        //Trashed & Resotre
        Route::get('/trashed/topic', 'TopicController@trashed')->name('topic.trashed');
        Route::get('/retrieve/topic/{id}', 'TopicController@retrieve')->name('topic.retrieve');
        Route::get('/permanent_delete/topic/{id}', 'TopicController@permanent_delete')->name('topic.permanent.delete');


        // Day management
        Route::get('/days', 'DayController@index')->name('day.index');
        Route::post('/day/store', 'DayController@store')->name('day.store');
        Route::get('/day/create', 'DayController@create')->name('day.create');
        Route::get('/day/delete/{id}', 'DayController@destroy')->name('day.destroy');

        Route::get('/trashed/day', 'DayController@trashed')->name('day.trashed');
        Route::get('/retrieve/day/{id}', 'DayController@retrieve')->name('day.retrieve');
        Route::get('/permanent_delete/day/{id}', 'DayController@permanent_delete')->name('day.permanent.delete');


        #################################################################
        ####################### Slot Management #########################
        ##################################################################
        Route::get('/slots', 'SlotController@index')->name('slots.index');
        Route::get('/slot/create', 'SlotController@create')->name('slot.create');
        Route::post('/slot', 'SlotController@store')->name('slot.store');
        Route::get('/slot/{slot}/edit', 'SlotController@edit')->name('slot.edit');
        Route::put('/slot/{slot}', 'SlotController@update')->name('slot.update');
        Route::get('/slot/{slot}/delete', 'SlotController@destroy')->name('slot.delete');
        Route::get('/slot/free', 'SlotController@free_slots')->name('slot.free');
        Route::get('/slot/book', 'SlotController@book_slots')->name('slot.book');

        Route::post('/slot/assign/', 'SlotController@update_modal')->name('slot.modal.update');

        //Trashed & Resotre
        Route::get('/trashed/slot', 'SlotController@trashed')->name('slot.trashed');
        Route::get('/retrieve/slot/{id}', 'SlotController@retrieve')->name('slot.retrieve');
        Route::get('/permanent_delete/slot/{id}', 'SlotController@permanent_delete')->name('slot.permanent.delete');

        // Blog Management //
        Route::namespace('Blog')->prefix('blog')->name('blog.')->group(function () {
            Route::get('/blogs', 'BlogController@index')->name('index');
            Route::get('/blogs/create', 'BlogController@create')->name('create');
            Route::post('/blogs', 'BlogController@store')->name('store');
            Route::get('/blogs/{blog}', 'BlogController@show')->name('show');
            Route::get('/blogs/{blog}/edit', 'BlogController@edit')->name('edit');
            Route::put('/blogs/{blog}', 'BlogController@update')->name('update');
            Route::get('/blogs/destroy/{id}', 'BlogController@destroy')->name('destroy');

            //Trashed & Resotre
            Route::get('/trashed/blog', 'BlogController@trashed')->name('trashed');
            Route::get('/retrieve/blog/{id}', 'BlogController@retrieve')->name('retrieve');
            Route::get('/permanent_delete/blog/{id}', 'BlogController@permanent_delete')->name('permanent.delete');
        });

        Route::namespace('Ticket')->prefix('ticket')->name('ticket.')->group(function () {

            // Ticket Category

            Route::get('/category', 'CategoryController@index')->name('category.index');
            Route::get('/category/create', 'CategoryController@create')->name('category.create');
            Route::post('/category/store', 'CategoryController@store')->name('category.store');

            Route::get('/category/{id}/edit', 'CategoryController@edit')->name('category.edit');
            Route::post('/category/{id}/update', 'CategoryController@update')->name('category.update');
            Route::get('/category/{id}/delete', 'CategoryController@destroy')->name('category.destroy');

            //Trashed & Resotre
            Route::get('/trashed/category', 'CategoryController@trashed')->name('category.trashed');
            Route::get('/retrieve/category/{id}', 'CategoryController@retrieve')->name('category.retrieve');
            Route::get('/permanent_delete/category/{id}', 'CategoryController@permanent_delete')->name('category.permanent.delete');

            // Tickets //
            Route::get('/', 'TicketController@index')->name('index');
            Route::get('/create', 'TicketController@create')->name('create');
            Route::post('/store', 'TicketController@store')->name('store');
            // Route::get('/{ticket}/edit', 'TicketController@edit')->name('edit');
            Route::get('/delete', 'TicketController@destroy')->name('destroy');

            // Admin Booking Tickets
            Route::get('/booking', 'BookingController@index')->name('booking.index');
            Route::get('/booking/create', 'BookingController@create')->name('booking.create');
            Route::post('/booking/store', 'BookingController@store')->name('booking.store');
        });
    });
});
