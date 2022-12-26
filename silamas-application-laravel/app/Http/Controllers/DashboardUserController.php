<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;


class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $user = Auth::id();
        $pengaduan = Pengaduan::where('user_id', Auth::id())->get();
        return view('pages.user.dashboard.index',
        ['title'=>'Dashboard',
        'total' => Pengaduan::where('user_id', Auth::id())->get()->count(),
        'pending' => Pengaduan::where('user_id', Auth::id())->where('status', 'Pending')->count(),
        'process' => Pengaduan::where('user_id', Auth::id())->where('status', 'Processing')->count(),
        'completed' => Pengaduan::where('user_id', Auth::id())->where('status', 'Complete')->count(),
        'tanggapan' => Tanggapan::where('pengaduan_id', Auth::id())->where('tanggapan', true)->count(),
        ],['user'=>$user])->with(compact('pengaduan'));

    }
    public function profile(){
        $type = Pengaduan::where('id', Auth::id())->get();
        $user = User::where('id', Auth::id())->get();
        return view('pages.user.dashboard.profile', [
            'title' => 'Profile',
            'active' => 'Profile',
            'user' => $user,
            'type' => $type
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
        $detail = Pengaduan::with([
            'details', 'user'
        ])->findOrFail($id);

        $tangap = Tanggapan::where('pengaduan_id', $id)->first();

        return view('pages.user.dashboard.detail', [
            'item' => $detail,
            'tangap' => $tangap,
            'title' => 'Detail Laporan'
        ]);
    }
    public function error()
    {
        return view('layouts.error', ['title'=> 'Error Found']);
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
