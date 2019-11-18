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

/*
Models we've made:
    PublicEvent


*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/', 'welcome'); 

// Route::get('/hotels', 'HotelController@index'); 

// Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name('auth0-callback');
// Route::get('/login', 'Auth\Auth0IndexController@login')->name('login');
// Route::get('/logout', 'Auth\Auth0IndexController@logout')->name('logout')->middleware('auth');

Route::group(['prefix' => 'dashboard'], function() {
    Route::view('/', 'dashboard/dashboard');
    Route::get('public-events', 'PublicEventController@index');
    Route::get('rso/create/{id}', 'RsoEventController@create');
    Route::resource('rso', 'RsoEventController')->except('create');    

//    Route::get('reservations/create/{id}', 'ReservationController@create');
//    Route::resource('reservations', 'ReservationController')->except('create');
});

/*
Our pages:
/ - homepage
/login 
/logout
/auth0/callback -  Auth0 provided route to handle the login callback
/register - register new student
/register-uni - register a new university

/dashboard - user's homepage. Has links to 'Find RSO', 'Create RSO',
            'view public events', 'view school events', 'view my RSO events', 
            (opt. for super-user): 'create University event (public/private)',

/dashboard/public-events - shows public events

/dashboard/uni/events - shows school's private events, 
                (opt. for super-user): 'create University event (public/private)'
/dashboard/uni/events/{id} - display private event, if super-user can edit or delete

/dashboard/create-rso - student can create new RSO
/dashboard/rso/{id} - page for an rso
/dashboard/rso/{id}/events/new - admin for an rso can create new event here
/dashboard/rso/{id}/events/{id} - page displaying an rso's event
/dashboard/rso/{id}/events/{id}/edit - admin can edit an existing event

*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
