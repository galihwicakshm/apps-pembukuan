@extends('dashboard')


@section('content')
  
<h4 class="text-center mt-4 mb-3">Daftar Info Peminjam</h4>
<div class="card">
 
  <table class="table">
  
  <tbody>
    <tr>
      <th class="text-center">Nama</th>
      <td scope="row"  class="text-center">{{ $pelanggan->nama }}</td>
     
    </tr>
    <tr>
      <th scope="row" class="text-center">Total Pinjaman</th>
      <td class="text-center">Rp {{ number_format($pelanggan->total_pinjam) }}</td>
   
    </tr>
    <tr>
      <th scope="row" class="text-center">Angsuran</th>
      <td class="text-center">Rp 300,000</td>
      
    </tr>
  </tbody>
</table>
</div>
<h4 class="text-center mt-5 mb-3">Daftar Angsuran Bulanan</h4>

<div class="card mt-4">
<div class="container">
        <table class="table">
  <thead>
    <tr>
      <th class="text-center">No</th>
      <th class="text-center">Nominal</th>
      <th class="text-center">Tanggal Bayar</th>
    </tr>
  </thead>
  <tbody>
      
      @forelse ($pembayaran as $pembayaran)
      <tr>
        <th class="text-center">1</th>
             <td class="text-center">{{ number_format($pembayaran->jumlah_bayar_bulanan) }}</td>
             <td class="text-center">{{ $pembayaran->tanggal_bayar_bulanan }}</td>
            </tr>
        @empty
        <tr>
            <td colspan="3" class="text-center mt-4">Data kosong</td>
        </tr>
        @endforelse
     
   

        
  </tbody>
</table>
</div>
  </div>



  
@endsection