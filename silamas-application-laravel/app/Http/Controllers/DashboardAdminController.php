<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PDF;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')->where('roles', '=', 'USER')->get();

        return view('pages.admin.forms.user.user', [
            'data' => $data,
            'title'=>"User Control",
            'complete' => Pengaduan::where('status', 'Complete')->count(),
            'totaluser' => User::where('roles','=', 'USER')->count(),
            'tanggapan' => Tanggapan::count(),
            'pending' => Pengaduan::where('status', 'Pending')->count(),
            'process' => Pengaduan::where('status', 'Processing')->count()
        ]);
    }

    public function laporan()
    {

        $pengaduan = Pengaduan::orderBy('created_at', 'DESC')->get();

        return view('pages.admin.forms.laporans.show', [
            'title'=>'Laporan Control',
            'tanggapan' => Tanggapan::count(),
            'pending' => Pengaduan::where('status', 'Pending')->count(),
            'process' => Pengaduan::where('status', 'Processing')->count(),
            'complete' => Pengaduan::where('status', 'Complete')->count()
            ])->with(compact('pengaduan'));
    }
    public function detail_laporan($id)
    {
        $item = Pengaduan::findOrFail($id);


        return view('pages.admin.forms.laporans.detail_laporan', [
            'item' => $item,
            'title' => 'Detail Laporan',
            'tanggapan' => Tanggapan::count(),
            'pending' => Pengaduan::where('status', 'Pending')->count(),
            'process' => Pengaduan::where('status', 'Processing')->count(),
            'complete' => Pengaduan::where('status', 'Complete')->count(),
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
        DB::table('pengaduans')->where('id', $request->pengaduan_id)->update([
            'status'=> $request->status,
        ]);


        $petugas_id = Auth::user()->id;


        $data = $request->all();

        $data['pengaduan_id'] = $request->pengaduan_id;
        $data['petugas_id']=$petugas_id;

        if(Tanggapan::all() == True){
            DB::table('tanggapans')->where('petugas_id', $request->pengaduan_id)->update([
                'tanggapan'=> $request->tanggapan
            ]);
        }else{
            Tanggapan::create($data);
        }
        return redirect('admin/laporan')->with('success','Berhasil Menanggapi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = User::findOrFail($id);


        return view('pages.admin.forms.user.detail_user', [
            'item' => $detail,
            'totaluser' => User::where('roles','=', 'USER')->count(),
            'title' => 'Detail User'
        ]);
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
    public function destroy(Request $request)
    {

    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
