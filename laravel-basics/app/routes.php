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

//Routes for Database Access lesson, Video #4 & 5
/*Route::get('/', function()
{
	$user = new User;

	$user->username = 'Jorge';

	$user->password = Hash::make('Jagarcell');

	$user->save();

	User::create([

		'username' => 'Alfredo',
		'password' => Hash::make('Alf')

	]);

	return "Creation successful!";

	$user = User::find(2);

	$user->delete();

	return User::orderBy('username','asc')->take(2)->get();
});*/

//Routes for Blade lesson, Video #6
/*Route::get('users', function()
{

	// $users = User::all();

	$users = User::all();

	return View::make('users/index')->withUsers($users);

});*/

/*Route::get('users/{username}', function($username)
{

	$user = User::whereUsername($username)->first();

	return View::make('users.show', ['user' => $user]);

});*/

/*Route::get('users', 'UsersController@index');

Route::get('users/{username}', 'UsersController@show');*/

Route::resource('users', 'UsersController');