<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TonerController extends Controller
{
    public function index(Request $request){
        if(view()->exists($request->path())){
            return view($request->path());
        }
        return view('errors.404');
    }

    public function components(Request $request){
        if(view()->exists('components-pages.'.$request->segment(2))){
            return view('components-pages.'.$request->segment(2));
        }
        return view('errors.404');
    }    

    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect('/login');
        }
    }
}
