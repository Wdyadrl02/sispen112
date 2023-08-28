@extends('template2.base')
@section('content') 
  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Edukasi</h2>
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
                                    
                                    <button type="button" class="btn cur-p btn-info" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square"></i> Tambah Edukasi</button>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
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
                     <td>
                        {{$key+1}}
                     </td>
                     <td>
                        {{$edukasi->nama}}
                     </td>
                     <td>
                        {{$edukasi->deskripsi}}
                     </td>
                     <td>
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">Pilih</button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')" href='{{url("admin/edukasi/hapus/$edukasi->id")}}'><i class="fa fa-trash-o" style="color:black;"></i> Hapus</a>


                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_{{$edukasi->id}}"><i class="fa fa-pencil-square-o" style="color:black;"></i> Edit</a>
                              
                              @if($edukasi->sub_edukasi == 1)
                              <a href='{{url("admin/edukasi/deskripsi/$edukasi->id")}}'  class="dropdown-item" ><i class="fa fa-tasks" style="color:black;"></i> Sub Edukasi</a>
                              @else
                              <a href='{{url("admin/edukasi/deskripsi/$edukasi->id")}}' class="dropdown-item" ><i class="fa fa-tasks" style="color:black;"></i> Penanganan</a>
                              @endif
                           </div>
                      
                        
                       
                     </td>
                  </tr>
                  @include('admin.edukasi.model')
               @endforeach
               
            </tbody>
            
         </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- footer -->
                     <div class="container-fluid">
                        <div class="footer">
                           <p>Credit By: Widya Darlina.
                            
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="modal fade" id="myModal">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <!-- Modal Header -->
                           <div class="modal-header">
                              <h4 class="modal-title">Tambah Edukasi</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                           </div>
                           <!-- Modal body -->
                           <div class="modal-body">
                              <form action="{{url('admin/edukasi/add')}}" method="post" enctype="multipart/form-data">
                                 @csrf
                                    <div class="row">
                                       <div class="col mb-3">
                                          <label for="nameBasic" class="form-label">Nama Edukasi</label>
                                          <input type="text" name="nama" id="nameBasic" class="form-control" required placeholder="Enter Name" />
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col mb-3">
                                          <label for="nameBasic" class="form-label">Deskripsi</label>
                                          <textarea name="deskripsi"  class="form-control" id="" required></textarea>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col mb-3">
                                          <label for="nameBasic" class="form-label">Pertanyaan</label>
                                          <select name="pertanyaan" id="" class="form-control" required>
                                             <option value="">-- Pilih --</option>
                                             <option value="1">ya</option>
                                             <option value="0">Tidak</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col mb-3">
                                          <label for="nameBasic" class="form-label">Sub edukasi</label>
                                          <select name="sub" id="" class="form-control" required>
                                             <option value="">-- Pilih --</option>
                                             <option value="1">ya</option>
                                             <option value="0">Tidak</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col mb-3">
                                          <label for="nameBasic" class="form-label">Nomor Layanan</label>
                                          <input type="text" name="no" id="nameBasic" class="form-control" placeholder="No Layanan" />
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col mb-3">
                                          <label for="nameBasic" class="form-label">foto</label>
                                          <input type="file" name="file" class="form-control" required />
                                       </div>
                                    </div>
                                    
                                 </div>
                                 <div class="modal-footer">
                                    <button class="btn btn-primary">Save changes</button>
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
</script>
@if(session()->has('create'))
<script>
     Swal.fire({
                icon: 'success',
                title: 'Berhasil Menambahkan Edukasi',
                showConfirmButton: true,

            });
</script>
@endif
@if(session()->has('update'))
<script>
     Swal.fire({
                icon: 'success',
                title: 'Berhasil Mengubah Edukasi',
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



