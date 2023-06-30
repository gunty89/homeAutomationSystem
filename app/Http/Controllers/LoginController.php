<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function profile()
    {
        $id = auth()->user()->userId;
        $user = User::findOrFail($id);
        return view('profile', compact('user'));
    }

    public function update(Request $req, $id)
    {
        // Define validation rules
        $rules = [
            'firstname' => 'required',
            'surname' => 'required',
            'city' => 'required',
            'district' => 'required',
            'street' => 'required',
            'phone' => 'required',
        ];

        // Define custom error messages
        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        // Validate the request
        $validator = Validator::make($req->all(), $rules, $messages);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Validation passed, proceed with updating the profile

        // Retrieve the user based on the provided $id
        $user = User::find($id);

        // Update the user's attributes based on the form input
        $user->firstName = $req->input('firstname');
        $user->surname = $req->input('surname');
        $user->city = $req->input('city');
        $user->district = $req->input('district');
        $user->street = $req->input('street');
        $user->phoneNumber = $req->input('phone');

        // Save the updated user
        $user->save();

        // Optionally, you can redirect the user to another page after the profile is updated
        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }

    //
}
