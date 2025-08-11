<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\Login;

class UserController extends Controller
{
    function index()
    {
        return view('welcome');
        // return redirect()->route('/welcome/home/page'); 
        // return to_route('home'); 
    }
    // function profile()
    // {

    //     return to_route('user', ['name' => 'Guest']); 
    // }

    function about()
    {
        return view('about'); // This will return the about view
    }

    function contact()
    {
        return view('contact'); // This will return the contact view
    }

    function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Process the form data (e.g., save to database, send email, etc.)
        // For demonstration, we'll just return a success message
        // return response()->json(['message' => 'Form submitted successfully!', 'data' => $validatedData]);
        return DB::table('contacts')->insert($validatedData);
    }

    function login()
    {
        // Return the login view
        return view('admin.login'); // This will return the admin login view
    }

    function submitLogin()
    {
        $credentials = \App\Models\Login::all();
        return $credentials;
        
       
    }







    // function submitLogin(Request $request)
    // {
    //     // Validate the login data
    //     $validatedData = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|string|min:6',
    //     ]);

    //     // Here you would typically check the credentials against the database
    //     // For demonstration, we'll just return a success message
    //     // return response()->json(['message' => 'Login successful!', 'data' => $validatedData]);
    //     return DB::table('logins')->insert(['email' => $validatedData['email'], 'password' => bcrypt($validatedData['password'])]);
    // }
}

// You can add more methods here for different functionalities
// For example, you can create a method to handle user registration
// or login, and return the respective views.
// You can also use this controller to handle form submissions
// and other user-related actions.
