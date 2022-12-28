<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use PDF;

class DashboardController extends Controller
{
    public function index() {
        return view('pages.admin.dashboard',[
            'title'=> 'Dashboard',
            'pengaduan' => Pengaduan::count(),
            'user' => User::where('roles','=', 'USER')->count(),
            'petugas' => User::where('roles', '=', 'PETUGAS')->count(),
            'admin' => User::where('roles', '=', 'ADMIN')->count(),
            'tanggapan' => Tanggapan::count(),
            'pending' => Pengaduan::where('status', 'Pending')->count(),
            'process' => Pengaduan::where('status', 'Processing')->count(),
            'complete' => Pengaduan::where('status', 'Complete')->count(),
        ]);
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
