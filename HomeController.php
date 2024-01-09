<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use Exception;
use app\Models\User;
use illuminate\http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        /*$this->middleware('auth');*/
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
    public function index()
    {
        return view("panel.home");
    }

    
} //class end