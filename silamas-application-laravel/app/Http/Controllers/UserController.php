<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        return view('register.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function profile()
    {
        $user = User::where('id', Auth::id())->get();
        return view('profile.profile', [
            'title' => 'Profile',
            'active' => 'Profile',
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $validatedData = $request->validate([
            'nik' => 'required|integer|min:16|unique:users',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:16|unique:users',
            'address' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'password' => 'required|min:3|max:255',
            'role' => 'required'
        ]);


        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please login');
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
    public function update(Request $request)
    {
        // // Validasi input
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users,email,' . auth()->id(),
        //     'password' => 'nullable|min:6',
        // ]);

        // // Ambil data input
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $password = $request->input('password');

        // Update data user
        // $user = User::findOrFail(Auth::id())->get();
        // $user->name = $name;
        // $user->email = $email;
        // if ($password) {
        //     $user->password = Hash::make($password);
        // }
        // User::update($user);
        if ($request->password) {
            Hash::make($request->password);
        }
        User::findOrFail(Auth::id())->update([ 'email' => $request['email'],'name' => $request['name'],'password' =>  Hash::make($request['password'])]);
        // Tampilkan pesan sukses dan kembali ke halaman sebelumnya
        return back()->with('success', 'Profile berhasil diupdate');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
