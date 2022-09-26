<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class StudentController extends Controller
{
    function index(Request $req){
        $email = $req->session()->get('email');
        $user = User::all();

        // $post = Post::where('id',$user->id)->get();
        // $imageData=[
        //     'post'=>$post
        // ];
        // return $user[1]->name;
        foreach($user as $u){
            $u["name"] = 'devesh';
        }
        return $user;
        $data=[
            'user' => $user
        ];
        return view("userProfileHeader", compact('data'));
        // return view("student/index", compact('data'));
        // $User = User::all();
        // $post = Post::all();

        // return view('student/index',compact('post','User'));
    }
    function create(){
        return view('student/create');
    }
    function store(Request $req){
        $user = User::where('email',$email)->first();
        
        $post = new Post;
        $post->title= $req->input('title');
        $post->cid=$user->id;
        $post->description= $req->input('description');

        if($req->hasfile('image')){
            $file= $req->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/images/',$filename);
            
            $post->images= $filename;
        }
        $post->save();
        return redirect()->back()->with('status','Your image is added successfully');

    }

    

}
