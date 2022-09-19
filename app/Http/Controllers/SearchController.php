<?php

namespace App\Http\Controllers;
use App\Models\Attraction;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $attractions = Attraction::where('tempat_wisata', 'LIKE', '%'.$request->search.'%')
                                    ->orwhere('provinsi', 'LIKE', '%'.$request->search.'%')
                                    ->orwhere('jumlah_pengunjung', 'LIKE', '%'.$request->search.'%')->get();
        return view('welcome', compact('attractions'));
    }
}
