@extends('dashboard')


@section('content')



<button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#basicModal">Tambah</button>

  <div class="card">  
 <div class="container">
    <div class="table">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      {{-- <th scope="col">Alamat</th> --}}
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
          $no = 1;
    @endphp
      @forelse ($pelanggan as $pelanggan)
      <tr>
      <th scope="row">{{ $no++ }}</th>
      <td> {{ $pelanggan->nama }}</td>
      {{-- <td>{{ $pelanggan->alamat }}</td> --}}
      <td>
                        {{-- <a href="" class="btn btn-warning md-4 d-inline">Edit</a> --}}
                         <form action="{{ url('pelanggan/'. $pelanggan->id) }}" method="POST">
                          @method('delete')
                          @csrf
                        <a href="{{ url('data/'. $pelanggan->id) }}" class="btn btn-primary btn-sm">Detail</a>
                       
                        <button class="btn btn-danger  btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus ini?')">Delete</button>
                        </form>
                        </td>
    </tr>
@empty
    <tr>
      <th colspan="3" class="text-center">Data Kosong</th>
    </tr>
@endforelse
  </tbody>
</table>
                
                  </div>
                </div>
              </div>


{{-- Modal Store --}}
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Tambah Data Pelanggan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <form action="{{ url('pelanggan') }}" method="POST">
                        @method('POST')
                        @csrf
                      <label for="nameBasic" class="form-label">Nama</label>
                      <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name" name="nama">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="emailBasic" class="form-label">Alamat</label>
                      <input type="text" id="emailBasic" class="form-control" placeholder="Enter Alamat" name="alamat">
                    </div>
                      </div>

                       <div class="row">
                    <div class="col mb-3">
                      <label for="emailBasic" class="form-label">Total Pinjam</label>
                      <input type="number" id="emailBasic" class="form-control" placeholder="Enter Alamat" name="total_pinjam">
                    </div>
                      </div>

                     
                       <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Jumlah Bulan</label>
                        <select class="form-select" name="total_bulan" >
                          @foreach ($bulan as $bulan)
                       <option value={{ $bulan->jumlah_bulan }} name="total_bulan">{{ $bulan->jumlah_bulan }}</option>
                      @endforeach
                         
                        </select>
                          </div></div>
                      
                   
                    
                   
               
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
                </div>
              </div>
            </div>
          </div>
     

  

              
@endsection




