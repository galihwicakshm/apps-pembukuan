@extends('dashboard')


@section('content')
 <button
                          type="button"
                          class="btn btn-primary mt-4 mb-3"
                          data-bs-toggle="modal"
                          data-bs-target="#basicModal"
                        >
                          Tambah Bulan
                        </button>
<div class="card">

  <div class="container">
      
    <table class="table">
  <thead>

    @php
        $no = 1;
    @endphp
    <tr>
      <th scope="col" class="text-center">No</th>
      <th scope="col" class="text-center">Total Bulan</th>
      <th scope="col" class="text-center">Alfabet</th>
    </tr>
  </thead>
  <tbody>


    @forelse ($bulan as $bulan)
         <tr>
      <th scope="row" class="text-center">{{ $no++ }}</th>
      <td class="text-center">{{ $bulan->jumlah_bulan }}</td>
      <td class="text-center">{{ $bulan->alfabet }}</td>
    </tr>
    @empty
         <tr>
      <th colspan="3"class="text-center">Data Kosong</th>
    </tr>
    @endforelse
   
   
  </tbody>
</table>
  </div>
</div>


{{-- modal --}}
   <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ url('bulan/store') }}" method="POST">
                                  @method('post')
                                  @csrf
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Jumlah Bulan</label>
                                    <input type="number" id="nameBasic" class="form-control" placeholder="Enter Name" name="jumlah_bulan"/>
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Alfabet</label>
                                    <input type="text"  class="form-control" placeholder="Enter Alfabet" name="alfabet" />
                                  </div>
                                  
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    
    
@endsection