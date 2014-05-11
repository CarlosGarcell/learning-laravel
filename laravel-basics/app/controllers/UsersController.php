<?php

class UsersController extends \BaseController 
{
	protected $user;

	public function _construct(User $user)
	{
		$this->user = $user;
	}

	public function index()
	{
		$users = $this->user->all();

		return View::make('users/index')->withUsers($users);
	}

	public function show($username)
	{
		$user = $this->user->whereUsername($username)->first();

		return View::make('users.show', ['user' => $user]);
	}

	public function create()
	{
		return View::make('users.create');
	}

	public function store()
	{
		$this->user->fill(Input::all());

		return $this->user->toArray();

		if (!$this->user->isValid($input = Input::all()))  
		{
			return Redirect::back()->withInput()->withErrors($this->user->$messages);
		}

		/*$user = new User;

		$user->username = Input::get('username');

		$user->password = Hash::make(Input::get('password'));

		$user->save();*/

		$this->user->create($input);

		return Redirect::route('users.index');
	}

}
