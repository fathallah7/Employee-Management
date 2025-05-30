<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

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

        //     public function show(ُEmployee $user) //type hinting
        // {
        //     return view('users.info', ['info' => $user]);
        // }
    }







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

        Employee::create([
            'first_name' => $name,
            'last_name' => $name2,
            'email' => $email,
            'xyz' => 'ssss'   // will ignore it - bec. not in the fillable 
        ]);

        // $employee = new Employee;
        // $employee->first_name = $name;
        // $employee->last_name = $name2;
        // $employee->email = $email;
        // $employee->save();

        // 3- redirection to index
        return to_route('index');
    }








    public function edit($userID)
    {
        $user = Employee::find($userID);
        return view('users.edit', ['info' => $user]);
    }





    public function update($userID)
    {
        // dd($userID);

        // 1- Get User Data
        $name = request()->firstName;
        $name2 = request()->lastName;
        $email = request()->email;

        // 2- Update Data in Database
        $singleUserFromDB = Employee::find($userID);

        $singleUserFromDB->update([
            'first_name' => $name,
            'last_name' => $name2,
            'email' => $email
        ]);

        // $Employee = Employee::updateOrCreate(
        //     ['id' => $userID] ,
        //     ['first_name' => $name, 'last_name' => $name2 , 'email' => $email]
        // );

        // 3- redirection to index
        return to_route('index');
    }






    public function destroy($userID)
    {
        // 1- Delete User From Database

        $user = Employee::find($userID);

        $user->delete();

        // 2- redirection to index
        return to_route('index');
    }
}
