<?php

namespace App\Http\Controllers;
use App\Models\User;
use PharIo\Manifest\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Apicontroller {

    // Other methods...

    public function message(Request $request) {

        return response()->json(['message' => 'Profile data received successfully']);
    }

    public function getprofile(Request $request) {

        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');

        // Retrieve the user record from the database
        $user = User::where('email', $email)->first();


        // Check if the user was found
        if ($user) {
            // Return the user profile data as a JSON response
            return response()->json(['message' => 'Profile data received successfully',
                                             'user' => $user, 'status'=>'200']);


        } else {
            // User not found
            return response()->json(['message' => 'User not found'], 404);
        }

    }
// 'user' => [
//     'name' => $user->name,
//     'age' => $user->age,
//     // Add other specific fields as needed
// ],


    public function login(Request $request) {

        $email=$request->input('email');
        $password=$request->input('password');

        $user = User::where('email', $email)->first();
        $retr_username= $user->name;
        $retr_email= $user-> email;
        $retr_password= $user-> password;


        if(($email==$retr_email)&&($password==$retr_password)){

        return response()->json(['message' => 'Profile data received successfully',
                                             'name' => $user->name,'email'=>$user->email,'status'=>'200']);


        }
    }

    //api login (used only for hashed values)
    
    public function apilogin(Request $request) {

        $email=$request->input('email');
        $password=$request->input('password');

        $user = User::where('email', $email)->first();
        $retr_username= $user->name;

        $retr_email= $user-> email;
        $retr_password= $user-> password;
        $data= $request->only("email","password");




         if(Auth::attempt($data)){

            return response()->json(['message' => 'Login successfully',
                                             'username' => $user->name,'email'=>$user->email,'status'=>'200']);

         }

         return response()->json(['message' => 'Login Failed',$data]);

    }

}



