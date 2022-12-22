<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function home(){

        $pengaduan = Pengaduan::all();
        return view('index', [
            "title" => "Home",
            "active" => 'home'
        ])->with(compact('pengaduan'));
    }
}
