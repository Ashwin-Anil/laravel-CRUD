<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class usercontroller extends Controller
{
    public function index(Request $request)
    {
        // from form submission

        // $username=$request->get("name");
        $email=$request->get("email");
        $password=$request->get("password");

        //retrieve
        $users = User::all();
        $user = User::where('email', $email)->first();
        $username1=$user->name;
        $email1=$user->email;
        $password1=$user->password;


        if(($password==$password1)&&($email==$email1)){

            return view ('dashboard', ['user' => $users]);

        }
        else{
            return redirect(route('welcome'))->with("error","wrong creditionals");
        }


    }

// registration of user

    public function register(Request $request)
    {


        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
            // Add more fields as needed
        ]);

    //    $data['name'] = $request->name;
    //    $data['email'] = $request->email;
    //    $data['password'] = Hash::make($request->password);


        // Create a new user instance
        $user = User::create($validatedData);
        return "registration sucessfull";



    }
    public function view(Request $request)
    {
        $users = User::all();
        return view('dashboard', ['user' => $users]);
    }

    public function delete($id)
    {
        $user = user::find($id);
        $user->delete();

        }
    public function editview($id)
    {
        $user = user::findorFail($id);
        return view('edit',compact('user'));

    }

    public function update(Request $request)
    {
        $user = User::find($request->input('id'));

        // Update user details
        if ($user) {
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->save();

            // Redirect back or perform any other action after update
            return ('User updated successfully!');
        }

        // If user not found, handle the error (redirect, display message, etc.)
        return ( 'User not found.');

    }
}
