<?php

namespace App\Http\Controllers;

use App\Models\Bulan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BulanController extends Controller
{
    public function index()
    {

        $data = array(
            'bulan' => Bulan::all(),
        );

        return view('bulan.index', $data);
    }

    public function store(Request $request)
    {
        Bulan::create([
            'jumlah_bulan' => $request->jumlah_bulan,
            'alfabet' => $request->alfabet
        ]);

        return redirect('bulan');
    }
}
