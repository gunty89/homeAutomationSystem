<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // echo $users;
        return view('user', compact('users'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this-> authorize('userCreate');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> authorize('userCreate');
        // Validate the form data
        $validatedData = $request->validate([
            'firstname' => 'required|max:255',
            'surname' => 'required|max:255',
            'mobileNumber' => 'required|max:255',
            'email' => 'required|email|max:255',
            'city' => 'required|max:255',
            'district' => 'required|max:255',
            'street' => 'required|max:255',
        ]);

        // Create a new user instance
        $user = new User();
        $user->firstName = $request->input('firstname');
        $user->surname = $request->input('surname');
        $user->phoneNumber = $request->input('mobileNumber');
        $user->email = $request->input('email');
        $user->city = $request->input('city');
        $user->district = $request->input('district');
        $user->street = $request->input('street');
        $user->password = Hash::make(1234);

        // Save the user to the database
        $user->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'User created successfully');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('userDelete');
        //
    }
}
