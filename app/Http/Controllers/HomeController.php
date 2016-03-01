<?php

namespace redosociolla\Http\Controllers;
use redosociolla\User;
use Request;

use redosociolla\Http\Requests;
use redosociolla\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home.index', compact('home'));
    }
	public function login()
    {
       return redirect('home.login');
    }
}
