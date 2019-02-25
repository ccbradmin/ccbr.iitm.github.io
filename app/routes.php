<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Unauthenticated group */
Route::group(array('before' => 'guest'), function() {

	/* CSRF protection */
	Route::group(array('before' => 'csrf'), function() {

		/* Locations (POST) */
		Route::post('/workshopregisterations',
			array('as' => 'workshop-registerations-post',
				'uses' => 'HomeController@postWorkshopRegistrations'
		));

	});


	/* Home Page (GET) */
	Route::get('/',
	  array('as' => 'home',
	        'uses' => 'HomeController@getHome'
	));

	/* Workshops Page (GET) */
	Route::get('/temphome',
	  array('as' => 'temphome',
	        'uses' => 'HomeController@getWorkshops'
	));
	
	/* Workshops Page (GET) */
	Route::get('/course-details',
	  array('as' => 'course-details',
	        'uses' => 'HomeController@getCourse'
	));
	
		
	/* Project Page (GET) */
	Route::get('/project',
	  array('as' => 'project',
	        'uses' => 'HomeController@getProject'
	));

	/* Workshops Page (GET) */
	Route::get('/workshops',
	  array('as' => 'workshops',
	        'uses' => 'HomeController@getWorkshops'
	));
	
	 /* WorkshopsPrevious Page (GET) */
	Route::get('/workshops-previous',
	  array('as' => 'workshops-previous',
	        'uses' => 'HomeController@getWorkshopsPrevious'
	));


	/* People Page (GET) */
	Route::get('/people',
	  array('as' => 'people',
	        'uses' => 'HomeController@getPeople'
	));

	/* Funding Page (GET) */
	Route::get('/funding',
	  array('as' => 'funding',
	        'uses' => 'HomeController@getFunding'
	));

	/* News Page (GET) */
	Route::get('/news',
	  array('as' => 'news',
	        'uses' => 'HomeController@getNews'
	));

	/* Publications Page (GET) */
	Route::get('/publications',
	  array('as' => 'publications',
	        'uses' => 'HomeController@getPublications'
	));

	/* Admin Page (GET) */
	Route::get('/admin',
	  array('as' => 'admin-home',
	        'uses' => 'AdminController@getAdminHome'
	));

	/* Admin Page - Git Pull (GET) */
	Route::get('/admin/git-pull',
	  array('as' => 'admin-git-pull',
	        'uses' => 'AdminController@getAdminGitPull'
	));

	/* Admin Page - Git Pull (POST) */
	Route::post('/admin/git-pull',
	  array('as' => 'admin-git-pull-post',
	        'uses' => 'AdminController@postAdminGitPull'
	));


});
