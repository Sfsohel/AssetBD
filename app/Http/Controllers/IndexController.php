<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
		return view('welcome');
	}

	public function about(){
		return view('about');
	}

	

	public function properties(){
		return view('properties');
	}

	public function contactPost(Request $request){
		DB::table('contacts')->insert(
            [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]
        );
       return redirect()->route('contact');
	}

	public function contact(){
		return view('contact');
	}

	public function blog(){
		return view('blog');
	}
}
