@extends('template2.base')
@section('content') 
<div class="container-fluid">
   <div class="row column_title">
      <div class="col-md-12">
         <div class="page_title">
            <h2>Gejala {{$deskripsi->nama_edukasi}}</h2>
         </div>
      </div>
   </div>
   <!-- row -->
   <div class="row">
      <!-- invoice section -->
      <div class="col-md-12">
         <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
               <div class="heading1 margin_0">
                  <h2><i class="fa fa-file-text-o"></i> List Gejala</h2>
               </div>
            </div>
            <div class="full padding_infor_info">
               <div class="modal-footer">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Gejala</button>
               </div>
               <div class="table_row">
                  <div class="table-responsive">
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>Gejala</th>
                             
                              <th>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($list_pertanyaan as $pertanyaan)
                           <tr>
                              <td>{!!$pertanyaan->pertanyaan !!}</td>
                             
                              <td>
                                 {{-- <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">Status</button>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href='{{url("admin/edukasi/deskripsi/pertanyaan/status/$pertanyaan->id/1")}}'> Aktif</a>
                                    <a class="dropdown-item" href='{{url("admin/edukasi/deskripsi/pertanyaan/status/$pertanyaan->id/0")}}'></i> Tidak Aktif</a>
                                 </div> --}}
                                 <a href='{{url("admin/edukasi/deskripsi/pertanyaan/hapus/$pertanyaan->id")}}' type="button" class="btn btn-outline-danger " ><i class="fa fa-trash-o" style="color:black;"></i></a>
                                 <a href="" type="button" class="btn btn-outline-warning " data-toggle="modal" data-target="#modal_{{$pertanyaan->id}}"><i class="fa fa-pencil-square-o" style="color:black;"></i> </a>  
                              </td>
                           </tr>
                           <div class="modal fade" id="modal_{{$pertanyaan->id}}" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel1">Edit Gelaja</h5>
                                      
                                    </div>
                                    <div class="modal-body">
                                       <form action='{{url("admin/edukasi/deskripsi/pertanyaan/edit/$pertanyaan->id")}}' method="post" enctype="multipart/form-data">
                                          @csrf
                                          <div class="row">
                                             <div class="col mb-3">
                                                <label for="nameBasic" class="form-label">Pertanyaan</label>
                                                <textarea name="pertanyaan"  class="form-control" id="editor{{$pertanyaan->id}}">{{$pertanyaan->pertanyaan}}</textarea>
                                             </div>
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button class="btn btn-primary">Save changes</button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- row -->
</div>
<!-- footer -->

</div>
<div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Buat Gejala</h5>
            {{-- <button
               type="button"
               class="btn-close"
               data-bs-dismiss="modal"
               aria-label="Close"
               ></button> --}}
         </div>
         <div class="modal-body">
            <form action='{{url("admin/edukasi/deskripsi/pertanyaan/add")}}' method="post" enctype="multipart/form-data">
               @csrf
               <input type="hidden" value="{{$deskripsi->id_jenis_edukasi}}" name="id_edukasi" required>
               <input type="hidden" value="{{$deskripsi->id}}" name="id_deskripsi" required>
               <div class="row">
                  <div class="col mb-3">
                     <textarea  name="pertanyaan" class="form-control " required></textarea>
                  </div>
               </div>
         </div>
         <div class="modal-footer">
         <button class="btn btn-primary">Simpan</button>
         </form>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>
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
          @foreach($list_pertanyaan as $pertanyaan)
          ClassicEditor
            .create( document.querySelector( '#editor{{$pertanyaan->id}}' ) )
            .catch( error => {
               console.error( error );
            } );
          @endforeach
</script>
@endsection