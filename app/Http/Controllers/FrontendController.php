<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class FrontendController extends Controller
{
    public function home($value=''){
    	$items = Item::orderBy('id','desc')->take(6)->get();
    	// dd($items);
    	return view('frontend.home',compact('items'));
    }

    public function itemfilter($value=''){
    	return view('frontend.items');
    }

    public function itemdetail($id){
        $item = Item::find($id);
    	return view('frontend.detail',compact('item'));
    }

    public function checkout($value=''){
    	return view('frontend.checkout');
    }

    public function login($value=''){
    	return view('frontend.login');
    }

    public function register($value=''){
    	return view('frontend.register');
    }

    public function profile($value=''){
    	return view('frontend.profile');
    }
}
