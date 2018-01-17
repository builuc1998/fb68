<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clone2;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($st = '')
    {
        if($st == ''){
         
        $clone = clone2::paginate(20);   
        }else{
        $clone = clone2::where('status',$st)->paginate(20);
            
        }
        $status = clone2::select('status')->distinct()->get();
        return view('welcome',['clone' => $clone,'status' => $status,'st2'=>$st]);
    }

    public function index2()
    {
        var_dump(auth::user());
        //return view('welcome');
    }
}
