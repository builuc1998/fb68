<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\clone2;
use Carbon\Carbon;


class ApiController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function upOne(){
		
		$uid = Input::get('uid');
		
		$checkClone = clone2::where('uid', $uid)->first();
		
		if($checkClone){
			return \response()->json('clone already exists', 200);
		}
		$uid = Input::get('uid');
		$email = Input::get('email');
		$password = Input::get('password');
		$token = Input::get('token');
        $cookie = Input::get('cookie');
		$status = Input::get('status');
		$note = Input::get('note');
		$lastname = Input::get('lastname');
		$firstname = Input::get('firstname');
		$birthday = Input::get('birthday');
        $country = Input::get('country');
		if($country){
		  $country = $country;
		}else{
            $country = '';
        }
		$a = clone2::create([
			'uid' => $uid,
			'email' => $email,
			'cookie' => $cookie,
            'password' => $password,
			'token' => $token,
			'status' => 'new',
			'note' => 'null',
			'lastname' => $lastname,
			'firstname' => $firstname,
            'birthday' => $birthday,
            'country' => $country
		]);
		
		return \response()->json($a, 200);
	}
    public function updateClone(){
        $uid = Input::get('uid');
        $photoid = Input::get('photoid');
        $cmtid = Input::get('cmtid');
        $linksp = Input::get('linksp');
        $status = Input::get('status');
        
        $cl0ne = clone2::where('uid', $uid)->first();
        if(!$cl0ne){
            return 'UID hợp lệ';
        }
        if ($photoid != ''){
            $cl0ne->photoid = $photoid;
        }

        if ($cmtid != ''){
            $cl0ne->cmtid = $cmtid;
        }

        if ($status != ''){
            $cl0ne->status = $status;
        }

        if ($linksp != ''){
            $cl0ne->linksp = $linksp;
        }
        $cl0ne->save();

        return response()->json($cl0ne, 200);
    }
    public function getClone(){
        $cl0ne = clone2::orderBy('updated_at','ASC')->first();
        $cl0ne->updated_at = date('Y-d-m H:i:s',time());
        $cl0ne->save();
        return response()->json($cl0ne, 200);
    }
    public function getCloneByStatus(){
        $status = Input::get('status');
        $cl0ne = clone2::where('status','like','%'.$status.'%')->orderBy('updated_at','ASC')->first();
        $cl0ne->updated_at = date('Y-d-m H:i:s',time());
        $cl0ne->save();
        return response()->json($cl0ne, 200);
    }
    
    public function doTakeCare(){
        $cl0ne = clone2::select('uid','token')->orderBy('updated_at','ASC')->first();
        $cl0ne->updated_at = date('Y-d-m H:i:s',time());
        $cl0ne->save();
        return response()->json($cl0ne, 200);
    }

    public function deleteClone(){
        clone2::truncate();
        echo 'ok';
    }

}
