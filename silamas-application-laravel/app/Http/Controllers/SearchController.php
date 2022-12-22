<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
class SearchController extends Controller
{
    public function search(Request $request)
    {
        $pengaduans = Pengaduan::filterById($request->id)->get();

        return view('search-results', compact('pengaduans'));
    }
}
