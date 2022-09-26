<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
use Session;
use App\Models\admin;

class UserController extends Controller
{
    function loginform(){
        if(session()->get('email')){
            return redirect('userProfile');
        }
        return view('loginForm');
    }
    function loginData(Request $req){
        $user = User::where('email',$req->email)->first();

            if(!$user || !Hash::check($req->password,$user->password)){
                return "Incorrect Credintails";
        }
        $returnResponse['status']="success";
        session()->put('email',$req->email);
        
        return redirect('/userProfile');
    }
    function userProfile(Request $req){
        // return view('userProfile');
        if(!$req->session()->get('email')){
            return redirect('/');
        }

        $email = $req->session()->get('email');
        $user = User::where('email',$email)->first();

        $data=[
            'user' => $user
        ];

        return  view("userProfile",compact('data'));
    }
    function createAccount(){
        if(session()->get('email')){
            return redirect('userprofile');
        } 
        return view('createAccount');
      
    }
    function saveUser(Request $req){
        $returnResponse = array();
        $existingUser = user::where('email',$req->email)->orWhere('phone',$req->phone)->first();
        if($existingUser){
            $returnResponse["status"] = "error";
            return json_encode($returnResponse);
        } 
        $user = new user; 
        $user->name= $req->name;
        $user->email= $req->email;
        $user->password= Hash::make($req->password);
        $user->gender= $req->gender;
        $user->phone = $req->phone;
        
       $result= $user ->save();
         
        $returnResponse["status"] = "success";
    
        return json_encode($returnResponse);

       
    }
    function logout(){
        if(session()->get('email')){
            session()->pull('email');
        }return redirect('/');
    }

    function subPost(){
        return view('post');
    }
    /*admin  closed */
    function adminlogin(){
        if(session()->get('email')){
            return reditect('admin');
        }
        return view('adminlogin');
    }
     
    function adminsave(Request $req){
        $admin = admin::where('email',$req->email)->where('password',$req->password)->first();
        if($admin== $req->email ){
            return "incorrect credintails";
        }session()->put('email',$req->email);
        return redirect('/admin');
    }
    function admin(Request $req){
        if($req->session()->get('email')){
            return redirect('/adminlogin');
        }

        $email = $req->session()->get('email');
        $user = User::all();
        return view('admin',['user'=>$user]);
    }
    /*admin closed*/

 
}
