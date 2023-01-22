<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = "pembayarans";
    protected $guarded = ['id_user',  'jumlah_bayar_bulanan', 'tanggal_bayar_bulanan'];
}
