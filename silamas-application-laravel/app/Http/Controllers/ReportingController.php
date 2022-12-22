<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengaduan;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class ReportingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('laporans.create', ['title' => 'Create Laporan']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'type' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $nik = Auth::user()->nik;
        $id = Auth::user()->id;
        $name = Auth::user()->name;

        $resorce       = $request->file('image');
        $img   = $resorce->getClientOriginalName();

        $data = $request->all();
        $data['user_nik'] = $nik;
        $data['user_id'] = $id;
        $data['name'] = $name;
        $data['image'] = $img;
        $resorce->move(\base_path() ."/public/assets/images/upload", $img);

        Pengaduan::create($data);
        return redirect('/')->with('success', 'Pengaduan terkirim');


        // if($request->hasFile('gambar')){
            //     $resorce       = $request->file('gambar');
            //     $name   = $resorce->getClientOriginalName();
            //     $resorce->move(\base_path() ."/public/assets/images/upload", $name);
            // }else{
                //     echo "Gagal upload Data";
            // ]);
                //     return redirect('/')->with('error', 'Data Laporan Gagal diUpload!');
                // }
                // $save = DB::table('reporting')->insert(['gambar' => $name,'user_id'=>$request->id_user,'type'=>$request->type, 'category_id'=>$request->category_id ,'judul'=> $request->judul,'deskripsi'=>$request->deskripsi, 'tanggal'=>$request->tanggal, 'lokasi' => $request->lokasi,
                // 'lembaga'=>$request->lembaga,'secret'=>$request->secret, 'status'=>'Pending']);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('laporans.show', compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('laporans.edit', compact('laporan'));
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
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'type' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'pihak_terkait' => 'required',
            'gambar' => 'required',
            'secret' => 'required',
            'status' => 'required'
            ]);
            $laporan->update($request->all());
            return redirect()->route('laporans.index')
                            ->with('success','Laporan updated successfully.');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laporan->delete();
        return redirect()->route('laporans.index')
                        ->with('success','Laporan deleted successfully.');
    }
}
