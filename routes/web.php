<?php

// visitor page route
Route::get('/', 'IndexController@index')->name('index');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');

// auth route
Route::get('/signin', 'Auth\LoginController@showLoginForm')->name('signinForm');
Route::post('/signin', 'Auth\LoginController@login')->name('signin');

Route::get('/signup', 'Auth\RegisterController@showRegistrationForm')->name('signupForm');
Route::post('/signup', 'Auth\RegisterController@register')->name('signup');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// accout route
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/my-feed', 'MyFeedController@index')->name('my-feed');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/family', 'FamilyController@index')->name('family');
Route::get('/chat', 'ChatController@index')->name('chat');

//  post route
Route::post('/createpost/{user}', 'HomeController@storePost');

// family route
Route::post('/createfamily', 'FamilyController@store')->name('createFamily');
Route::post('/addfamillymember/{familyId}', 'FamilyController@addFamilyMember');
