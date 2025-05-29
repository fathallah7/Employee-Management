<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        // select * from users
        $usersFromDB = Employee::all();  // collection object

        return view('users', ['data' => $usersFromDB]);
    }


    public function show($userID)
    {

        //select * from employees where id = $userID limit 1;

        $singleUserFromDB = Employee::find($userID); //model object

        //        $singlePostFromDB = Post::findOrFail($postId); //model object 
        //        $singlePostFromDB = Post::where('id', $postId)->first(); //model object
        //        $singlePostFromDB = Post::where('id', $postId)->get(); //collection object
        //        Post::where('title', 'php')->first() //select * from posts where title = 'php' limit 1;
        //        Post::where('title', 'php')->get() //select * from posts where title = 'php';

        if (is_null($singleUserFromDB)) {
            return to_route('index');
        }

        return view('users.info', ['info' => $singleUserFromDB]);
    }
    //     public function show(ُEmployee $user) //type hinting
    // {
    //     return view('users.info', ['info' => $user]);
    // }


    public function create()
    {
        return view('users.create');
    }


    public function store()
    {

        // 1- Get User Data
        $data = request()->all();
        $name = request()->firstName;
        $name2 = request()->lastName;
        $email = request()->email;

        // @dd($data);
        // @dd($name , $name2 , $email);

        // 2- Store Data in Database


        // 3- redirection to index
        return to_route('index');
    }


    public function edit()
    {
        return view('users.edit');
    }


    public function update()
    {
        // 1- Get User Data
        $name = request()->firstName;
        $name2 = request()->lastName;
        $email = request()->email;

        // 2- Store Data in Database


        // 3- redirection to index
        return to_route('index');
    }


    public function destroy()
    {
        // 1- Delete User From Database

        // 2- redirection to index
        return to_route('index');
    }
}
