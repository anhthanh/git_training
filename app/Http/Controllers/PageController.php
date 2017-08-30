<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

	public function getHomePage(){
		return view('layouts.pages.index');
	}

    public function getContactsPage(){
    	return view('layouts.pages.contacts');
    }

    public function getProductsPage(){
    	return view('layouts.pages.products');
    }

    public function getCheckOutPage(){
    	return view('layouts.pages.checkout');
    }

    public function getRegisterPage(){
    	return view('layouts.pages.register');
    }

    public function getLogInPage(){
    	return view('layouts.pages.login');
    }
}
