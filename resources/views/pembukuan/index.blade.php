@extends('dashboard')


@section('content')
  <div class="card">  
   <h5 class="card-header">Data Pelanggan</h5>       
    <div class="container"> <button type="button" class="btn btn-primary mt-3 mb-4" data-bs-toggle="modal" data-bs-target="#basicModal">Tambah</button></div>
           
       
    
 
    <div class="table-responsive text-nowrap ">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
          $no = 1;
    @endphp
       @foreach ($pembukuan as $pembukuan)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td> {{ $pembukuan->nama }}</td>
      <td>{{ $pembukuan->alamat }}</td>
      <td>
                        {{-- <a href="" class="btn btn-warning md-4 d-inline">Edit</a> --}}
                        <form action="{{ url('pelanggan/'. $pelanggan->id) }}" method="POST">
                          @method('delete')
                          @csrf
                        <button href="" class="btn btn-danger d-inline btn-sm">Delete</button>
                        </form>
                                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>
                 
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
                   <label  for="inputGroupSelect01">Options</label>
                            <select class="form-select" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
             

                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailBasic" class="form-label">Alamat</label>
                      <input type="text" id="emailBasic" class="form-control" placeholder="Enter Alamat" name="alamat">
                    </div>
                   
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
                </div>
              </div>
            </div>
          </div>
     

  <script src="{{ asset('chosen/chosen.jquery.min.js') }}">

  </script>
 <script>
$(function () {
  $(".select").select2();
});
 </script>
     
@endsection