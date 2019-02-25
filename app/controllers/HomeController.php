<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getHome()
	{
		return View::make('page.home');
	}

	/* Workshop Registrations (POST) */
	public function postWorkshopRegistrations()
	{
		return Input::all();
	}
	
	 /* Workshop Page (GET) */
	public function getCourse()
	{
		return View::make('page.course');
	}


	/* Workshop Page (GET) */
	public function getWorkshops()
	{
		return View::make('page.workshops');
	}

	/* People Page (GET) */
	public function getPeople()
	{
		return View::make('page.people');
	}

	/* Funding Page (GET) */
	public function getFunding()
	{
		return View::make('page.funding');
	}

	/* News Page (GET) */
	public function getNews()
	{
		return View::make('page.news');
	}

	/* Publications Page (GET) */
	public function getPublications()
	{
		return View::make('page.publications');
	}
	
	 /* Workshop Page (GET) */
	public function getWorkshopsPrevious()
	{
		return View::make('page.workshops-previous');
	}
	
	
	 /* Workshop Page (GET) */
	public function getProject()
	{
		return View::make('page.project');
	}


}
