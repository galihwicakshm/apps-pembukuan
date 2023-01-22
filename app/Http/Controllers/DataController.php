<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pelanggan;
use App\Models\Pembukuan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function showData($id)
    {

        $pembayaran = Pembayaran::where('id_user', '=', $id)->get();

        $data = array(
            'pembayaran' => $pembayaran,
            'pembukuan' => Pembukuan::find($id),
            'pelanggan' =>  Pelanggan::find($id),
        );


        return view('data.index', $data);
    }

    public function show()
    {
        return view('data.data');
    }
}
