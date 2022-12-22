<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\SoftDeletes;

class MyReportsController extends Controller
{
    public function index(){
        $user = Auth::id();
        $pengaduan = Pengaduan::where('user_id', Auth::id())->get();
        return view('show-laporans.myreports',['title'=>'My Reports'],['user'=>$user])->with(compact('pengaduan'));
    }
}
