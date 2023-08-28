@extends('template.base')
@section('content')
<h4 class="fw-bold py-3 mb-4">Data Jenis Edukasi</h4>
<div class="col-md-12 col-lg-12 mb-12">
   <div class="card">
      <div class="card-body">
         <a href="javascript:void(0)" class="btn btn-outline-primary" data-bs-toggle="modal"data-bs-target="#basicModal">Tambah Edukasi</a>
         <p>   </p>
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
               <form action="{{url('edukasi/add')}}" method="post" enctype="multipart/form-data">
                  @csrf
                     <div class="row">
                        <div class="col mb-3">
                           <label for="nameBasic" class="form-label">Nama</label>
                           <input type="text" name="nama" id="nameBasic" class="form-control" placeholder="Enter Name" autocomplete="off"/>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col mb-3">
                           <label for="nameBasic" class="form-label">Deskripsi</label>
                           <textarea name="deskripsi"  class="form-control" id=""></textarea>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col mb-3">
                           <label for="nameBasic" class="form-label">foto</label>
                           <input type="file" name="file" class="form-control"  />
                        </div>
                     </div>
                     
                  </div>
                  <div class="modal-footer">
                     <button class="btn btn-primary">Save changes</button>
               </form>
                     <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                     Close
                     </button>
                  </div>
               </div>
            </div>
         </div>
         <table id="example" class="display" style="width:100%">
            <thead>
               <tr>
                  <th>NO</th>
                  <th>EDUKASI</th>
                  <th>DESKRIPSI</th>
                  <th>AKSI</th>
               </tr>
            </thead>
            <tbody>
               @foreach($list_edukasi as $key=>$edukasi)
               <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$edukasi->nama}}</td>
                  <td>{{$edukasi->deskripsi}}</td>
                  <td><div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                data-bs-toggle="modal" data-bs-target="#Modal{{$edukasi->id}}"><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href='{{url("edukasi/hapus/$edukasi->id")}}'
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                             {{--  <a class="dropdown-item" href='{{url("edukasi/detail/$edukasi->id")}}'
                                ><i class="bx bx-exit me-1"></i> Detail Edukasi</a
                              > --}}
                            </div>
                          </div></td>
               </tr>
                              @include('edukasi.model')
               @endforeach
            </tbody>
            <tfoot>
               <tr>
                  <th>NO</th>
                  <th>EDUKASI</th>
                  <th>DESKRIPSI</th>
                  <th>AKSI</th>
               </tr>
            </tfoot>
         </table>
      </div>
   </div>
</div>
@endsection
@section('script')
<script> 
   new DataTable('#example');
</script>
@endsection