<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        return view('password.edit');
    }
    /**
    * @param UpdatePasswordRequest $request
    * @return \Illuminate\Http\RedirectResponse
    */
    public function update(UpdatePasswordRequest $request)
    {
    	$request->user()->update([
    		'password' => Hash::make($request->get('password'))
    	]);
    	return redirect()->route('user.password.edit');
    }
}
