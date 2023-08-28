@extends('template2.base')
@section('content') 
<div class="container-fluid">
   <div class="row column_title">
      <div class="col-md-12">
         <div class="page_title">
            <h2>Sub {{$edukasi->nama}}</h2>
         </div>
      </div>
   </div>
   <!-- row -->
   <div class="row column4 graph">
      <!-- Gallery section -->
      <div class="col-md-12">
         <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
               <div class="heading1 margin_0">
                  <button type="button" class="btn cur-p btn-info" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square"></i> Tambah Sub Edukasi</button>
               </div>
            </div>
            <div class="table_section padding_infor_info">
               <div class="table-responsive-sm">
                  <table id="example" class="display" style="width:100%">
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>Deskripsi</th>
                           <th>Keterangan</th>
                           <th>AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($list_deskripsi as $key=>$deskripsi)
                        <tr>
                           <td>
                              {{$key+1}}
                           </td>
                           <td>
                              {{$deskripsi->nama_edukasi}}
                           </td>
                           <td>
                              {!!$deskripsi->keterangan!!}
                           </td>
                           <td>
                              <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">Pilih</button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')" href='{{url("admin/edukasi/deskripsi/hapus/$deskripsi->id")}}'><i class="fa fa-trash-o" style="color:black;"></i> Hapus</a>
                                 <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_{{$deskripsi->id}}"><i class="fa fa-pencil-square-o" style="color:black;"></i> Edit</a>
                                 @if($edukasi->pertanyaan == 1)
                                 <a href='{{url("admin/edukasi/deskripsi/pertanyaan/$deskripsi->id")}}' class="dropdown-item"><i class="fa fa-question-circle" style="color:black;"></i> gejala</a>
                                 @endif
                                 <a href='#'  class="dropdown-item"  data-toggle="modal" data-target="#penanganan_{{$deskripsi->id}}"><i class="fa fa-tasks" style="color:black;"></i> Penanganan</a>
                                 <a href='{{url("admin/edukasi/deskripsi/detail/$deskripsi->id")}}'  class="dropdown-item" ><i class="fa fa-tasks" style="color:black;"></i> Detail</a>
                              </div>
                           </td>
                        </tr>
                        @include('admin.edukasi.modalPenanganan')
                        @include('admin.edukasi.deskmodel')
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer -->
  
</div>
<div class="modal fade" id="myModal">
   <div class="modal-dialog">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <h4 class="modal-title">Tambah Sub Edukasi</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <form action="{{url('admin/edukasi/deskripsi/add')}}" method="post" enctype="multipart/form-data">
               @csrf
               <input type="hidden" value="{{$edukasi->id}}" name="jenis">
               <div class="row">
                  <div class="col mb-3">
                     <label for="nameBasic" class="form-label">Nama</label>
                     <input type="text" name="nama" id="nameBasic" class="form-control" placeholder="" required />
                  </div>
               </div>
               <div class="row">
                  <div class="col mb-3">
                     <label for="nameBasic" class="form-label">Keterangan</label>
                     <textarea id="editor" name="keterangan" class="form-control" ></textarea>
                  </div>
               </div>
         </div>
         <div class="modal-footer">
         <button class="btn btn-primary">Save changes</button>
         </form>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </form>
         </div>
         <!-- Modal footer -->
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
   
@foreach($list_deskripsi as $key=>$deskripsi)
         ClassicEditor
         .create( document.querySelector( '#editor{{$deskripsi->id}}' ) )
         .catch( error => {
            console.error( error );
         } );
         
          ClassicEditor
         .create( document.querySelector( '#penanganan{{$deskripsi->id}}' ) )
         .catch( error => {
            console.error( error );
         } );
@endforeach
</script>
@if(session()->has('create'))
<script>
     Swal.fire({
                icon: 'success',
                title: 'Berhasil Menambahkan sub Edukasi',
                showConfirmButton: true,

            });
</script>
@endif
@if(session()->has('update'))
<script>
     Swal.fire({
                icon: 'success',
                title: 'Berhasil Mengubah sub Edukasi',
                showConfirmButton: true,

            });
</script>
@endif
@if(session()->has('delete'))
<script>
     Swal.fire({
                icon: 'success',
                title: 'Berhasi Menghapus Data',
                showConfirmButton: true,  

            });
</script>
@endif

@endsection