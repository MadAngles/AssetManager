<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class StaffController extends Controller
{
    /**
     * Insert Staff Method
     *
     * @return Response
     */
    public function Insert(Request $request)
    {
		if ($request->isMethod('post')) {

			$this->ValidateStaff($request, [
				$this->loginUsername() => 'required', 'password' => 'required',
			]);

			// If the class is using the ThrottlesLogins trait, we can automatically throttle
			// the login attempts for this application. We'll key this by the username and
			// the IP address of the client making these requests into this application.
			$throttles = $this->isUsingThrottlesLoginsTrait();

			if ($throttles && $this->hasTooManyLoginAttempts($request)) {
				return $this->sendLockoutResponse($request);
			}

			$credentials = $this->getCredentials($request);

			if (Auth::attempt($credentials, $request->has('remember'))) {
				return $this->handleUserWasAuthenticated($request, $throttles);
			}

			// If the login attempt was unsuccessful we will increment the number of attempts
			// to login and redirect the user back to the login form. Of course, when this
			// user surpasses their maximum number of attempts they will get locked out.
			if ($throttles) {
				$this->incrementLoginAttempts($request);
			}

			return redirect($this->loginPath())
				->withInput($request->only($this->loginUsername(), 'remember'))
				->withErrors([
					$this->loginUsername() => $this->getFailedLoginMessage(),
				]);
		}

		return view('admin.insertstaff');
    }

	/**
	 * Get a validator for an incoming insert staff request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function ValidateStaff(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
			'role' => 'required',
		]);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}