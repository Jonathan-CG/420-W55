<?php

	class AdminController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return View::make('admin/listUser', array('users' => $users));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin/addUser');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(
			array(
				'Password' => Input::get("Password"),
				'Email' => Input::get("Email"),
				'Jetons' => Input::get("Jetons")
			),
			array(
				'Password' => 'required|min:4',
				'Email' => 'required|email|unique:users',
				'Jetons' => 'required|min:0'
			)
		);

		if ($validator->fails())
		{
			return Redirect::to('admin/addUser')->withInput()->withErrors($validator->messages());
		}
		else
		{
			$user = new User();
			$user->Email = Input::get("Email");
			$user->Password = Hash::make(Input::get("Password"));
			$user->Jetons = Input::get("Jetons");
			$user->save();
			return Redirect::to('admin/');
		}


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		return View::make("admin/modifyUser", array('user' => $user));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return View::make("admin/modifyUser", array('user' => $user));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::find($id);
		var_dump($user);
		$user->Email = Input::get("Email");
		$user->Jetons = Input::get("Jetons");
		$user->save();
		return Redirect::to("admin/");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();
		return Redirect::to("admin/");
	}
	
}