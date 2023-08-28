@extends('template.base')
@section('content')
<h4 class="fw-bold py-3 mb-4">Deskripsi Edukasi</h4>
<div class="col-md-12 col-lg-12 mb-12">
   <div class="card">
      <div class="card-body">
         <a href="javascript:void(0)" class="btn btn-outline-primary" data-bs-toggle="modal"data-bs-target="#basicModal">Tambah Deskripsi</a>
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
               <form action="{{url('deskripsi/add')}}" method="post" enctype="multipart/form-data">
                  @csrf
                     <div class="row">
                        <div class="col mb-3">
                           <label for="nameBasic" class="form-label">Deskripsi</label>
                           <input type="text" name="nama" id="nameBasic" class="form-control" placeholder="" />
                        </div>
                     </div>
                     <div class="row">
                        <div class="col mb-3">
                           <label for="nameBasic" class="form-label">Keterangan</label>
                            <textarea cols="80" id="editor" name="keterangan" rows="10"></textarea>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col mb-3">
                           <label for="nameBasic" class="form-label">Jenis Edukasi</label>
                           <select name="jenis" id="" class="form-select">
                              <option value="">-- Pilih Jenis Edukasi</option>
                              @foreach($list_jenis as $jenis)
                                 <option value="{{$jenis->id}}">{{$jenis->nama}}</option>
                              @endforeach
                           </select>
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
                  <th>DESKRIPSI EDUKASI</th>
                  <th>KETERANGAN</th>
                  <th>AKSI</th>
               </tr>
            </thead>
            <tbody>
               @foreach($list_deskripsi as $key=>$deskripsi)
               <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$deskripsi->nama_edukasi}}</td>
                  <td>{!!$deskripsi->keterangan!!}</td>
                  <td><div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                data-bs-toggle="modal" data-bs-target="#Modal{{$deskripsi->id}}"><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href='{{url("deskripsi/hapus/$deskripsi->id")}}'
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                              <a class="dropdown-item" href='{{url("deskripsi/detail/$deskripsi->id")}}'
                                ><i class="bx bx-exit me-1"></i> Buat Pertanyaan</a
                              >
                            </div>
                          </div></td>
               </tr>
                            
               @endforeach
            </tbody>
            <tfoot>
               <tr>
                  <th>NO</th>
                  <th>DESKRIPSI EDUKASI</th>
                  <th>KETERANGAN</th>
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


   ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
         console.error( error );
      } );


</script>
@endsection