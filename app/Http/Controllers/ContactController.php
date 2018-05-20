<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use GrahamCampbell\Throttle\Facades\Throttle;
use Illuminate\Support\Facades\Redirect;


class ContactController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Contact Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles throttling in the website.
    |
    */

    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index(){
        return view('contact.index');
    }
    public function submitContact(Request $request){
      $throttler = Throttle::get(Request::instance(), 5, 1);
      $throttlerStatus = Throttle::get(Request::instance())->attempt();
      $throttlerCount = count($throttler);
      if($throttlerStatus==true && $throttlerCount<5){
           return Redirect::To('contact-us')->with('status', 'Successfully Submitted');
      }else{
           return Redirect::To('contact-us')->with('status', 'Oops.. Please try later.');
      }
    }
}
