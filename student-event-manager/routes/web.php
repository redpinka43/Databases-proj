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

Route::view('/', 'welcome'); 
Route::get('/home', 'UniversityController@getUniName');

// Rso pages
Route::get('/rso', 'RsoController@index');
Route::get('/rso/{id}', ['uses' => 'RsoController@getEvents']);
Route::get('/rso/{rso_id}/create-event', ['uses' => 'RsoController@viewCreateEventPage']);

Route::resource('rso_join', 'RsoJoinController')->except('create');
Route::resource('rso_leave', 'RsoLeaveController')->except('create');
Route::get('/rso/{rso_id}/{event_id}', ['uses' => 'RsoController@getSingleEvent']);
Route::resource('rso_events', 'RsoEventController')->except('create');

// Public pages
Route::get('public-events', 'EventController@getPublicEvents');
Route::view('public-events/create-event', 'uni_events/create_public_event');
Route::get('public-events/{event_id}', ['uses' => 'EventController@getSinglePublicEvent']);
Route::resource('events', 'EventController')->except('create');

// Private event pages
Route::get('{uni_id}/private-events', 'EventController@getPrivateEvents');






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

/dashboard/private-events - shows school's private events, 
                (opt. for super-user): 'create University event (public/private)'
/dashboard/private-events/{id} - display private event, if super-user can edit or delete

/dashboard/create-rso - student can create new RSO
/dashboard/rso/{id} - page for an rso
/dashboard/rso/{id}/events/new - admin for an rso can create new event here
/dashboard/rso/{id}/events/{id} - page displaying an rso's event
/dashboard/rso/{id}/events/{id}/edit - admin can edit an existing event

*/

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
