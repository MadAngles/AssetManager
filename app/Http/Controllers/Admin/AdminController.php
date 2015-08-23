<?php

/*
 * Admin Controller
 *
 * @author Ravi Sharma <me@rvish.com>
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Index Method
     *
     * @return view
     */
    public function Index()
    {
        return view('admin.index');
    }

	/**
	 * Insert Department Method
	 *
	 * @return view
	 */
	public function InsertDepartment(Request $request)
	{
		// Check if it is post request
		if ($request->isMethod('post'))
		{
			$validator = Validator::make($request->all(), [
				'name' => 'required|max:255',
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

	}
}
