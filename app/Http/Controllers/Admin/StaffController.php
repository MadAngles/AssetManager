<?php

/*
 * Staff Controller
 *
 * @author Ravi Sharma <me@rvish.com>
 */

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Validator;
use App\DB\User\Users;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
	/**
	 * Insert Staff Method
	 *
	 * @param Request|object $request
	 *
	 * @return view
	 */
    public function Insert(Request $request)
    {
		// Check if it is post request
		if ($request->isMethod('post'))
		{
			$validator = Validator::make($request->all(), [
				'name' => 'required|max:255',
				'email' => 'required|email|max:255|unique:users',
				'password' => 'required|confirmed|min:6',
				'role' => 'required',
			]);

			// Check if miss something
			if ($validator->fails())
			{
				return view('admin.insertstaff')->withErrors($validator->errors()->all());
			}

			// Let's save the user
			$user = new Users();
			$user->name = $request->get('name');
			$user->email = $request->get('email');
			$user->password = $request->get('password');
			$user->role_id = $request->get('role');
			$user->phone = $request->get('phone');

			$user->save();
		}

		return view('admin.insertstaff');
    }

	/**
	 * List Staff Method
	 *
	 * @return view
	 */
	public function ListStaff()
	{
		$users = Users::paginate(15);

		return view('admin.liststaff', ['users' => $users]);
	}

	/**
	 *
	 */
}