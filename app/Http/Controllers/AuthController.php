<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('login.index');
    }

    /**
     * try login
     * @return $this|\Illuminate\Http\RedirectResponse|string
     */
    public function login()
    {
        $validator = Validator::make(Input::all(), [
            'email' => 'required|min:6|email',
            'password' => 'required|min:8|alphanum'
        ]);
        if ($validator->passes()) {
            if (auth()->attempt(['email' => Input::get('email'), 'password' => Input::get('password')])) {
                return redirect()->route('home');
            } else {
                return redirect()->route('auth.index')->with('error', 'User and/or password is invalid');
            }
        } else {
            return redirect()->route('auth.index')->withErrors($validator);
        }
    }

    /**
     * logout
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        auth()->logout();
        return redirect()->route('auth.index');
    }

}
