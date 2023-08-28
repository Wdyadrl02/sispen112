    @extends('template2.base')
    @section('content') 
    <div class="container-fluid">
    <div class="row column_title">
       <div class="col-md-12">
          <div class="page_title">
             <h2>Log Panggailan</h2>
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
                                        
                   <button type="button" class="btn cur-p btn-info" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square"></i> Tambah User</button>
                </div>         
             </div>
             <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                   <table id="example" class="display" style="width:100%">
                      <thead>
                         <tr>
                            <th>NO</th>
                            <th>NAMA PETUGAS</th>
                            <th>STATUS</th>
                            <th>AKSI</th>
                         </tr>
                      </thead>
                      <tbody>
                         @foreach($list_user as $key=>$user)
                         <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$user->nama_petugas}}</td>
                            <td>@if($user->level == 1)
                                  Administrator
                               @else
                                  Call Taker
                               @endif
                            
                            </td>
                            <td>
                               <a href='{{url("admin/user/hapus/$user->id")}}' onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" type="button" class="btn btn-outline-danger " ><i class="fa fa-trash-o" style="color:black;"></i></a>
                               <a href="" type="button" class="btn btn-outline-warning " data-toggle="modal" data-target="#modal_{{$user->id}}"><i class="fa fa-pencil-square-o" style="color:black;"></i> </a>  

                            </td>
                         </tr>
                    <div class="modal fade" id="modal_{{$user->id}}">
                         <div class="modal-dialog">
                            <div class="modal-content">
                               <!-- Modal Header -->
                               <div class="modal-header">
                                  <h4 class="modal-title">Tambah User</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                               </div>
                               <!-- Modal body -->
                               <div class="modal-body">
                                  <form action='{{url("admin/user/edit/$user->id")}}' method="post" enctype="multipart/form-data">
                                     @csrf
                                        <div class="row">
                                           <div class="col mb-3">
                                              <label for="nameBasic" class="form-label">Nama User</label>
                                              <input type="text" name="nama" id="nameBasic" class="form-control" value="{{$user->nama_petugas}}" required autocomplete="off" />
                                           </div>
                                        </div>
                                        <div class="row">
                                           <div class="col mb-3">
                                              <label for="nameBasic" class="form-label">Instansi</label>
                                              <input type="text" name="instansi" id="nameBasic" class="form-control" value="{{$user->instansi}}" required autocomplete="off" />
                                           </div>
                                        </div>
                                        <div class="row">
                                           <div class="col mb-3">
                                              <label for="nameBasic" class="form-label">Level</label>
                                              <select name="level" id="" class="form-control" required>
                                                 <option value="">-- Pilih --</option>
                                                 <option value="1" @if($user->level == 1) selected @endif >Administrator</option>
                                                 <option value="2" @if($user->level == 2) selected @endif>Call Taker</option>
                                              </select>
                                           </div>
                                        </div>
                                        <div class="row">
                                           <div class="col mb-3">
                                              <label for="nameBasic" class="form-label">Username</label>
                                              <input type="text" name="username" id="nameBasic" class="form-control" value="{{$user->username}}" required  autocomplete="off" />
                                           </div>
                                        </div>
                                        <div class="row">
                                           <div class="col mb-3">
                                              <label for="nameBasic" class="form-label">Password Lama</label>
                                              <input type="password" name="password_lama" id="nameBasic" class="form-control" required placeholder="Masukkan Password Lama" autocomplete="off" />
                                           </div>
                                        </div>
                                        <div class="row">
                                           <div class="col mb-3">
                                              <label for="nameBasic" class="form-label">Password Baru</label>
                                              <input type="password" name="password_baru" id="nameBasic" class="form-control" required placeholder="Masukkan Password Baru" autocomplete="off" />
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
                         @endforeach
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
    </div>
                      <div class="modal fade" id="myModal">
                         <div class="modal-dialog">
                            <div class="modal-content">
                               <!-- Modal Header -->
                               <div class="modal-header">
                                  <h4 class="modal-title">Tambah User</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                               </div>
                               <!-- Modal body -->
                               <div class="modal-body">
                                  <form action="{{url('admin/user/register')}}" method="post" enctype="multipart/form-data">
                                     @csrf
                                        <div class="row">
                                           <div class="col mb-3">
                                              <label for="nameBasic" class="form-label">Nama User</label>
                                              <input type="text" name="nama" id="nameBasic" class="form-control" required placeholder="Masukkan Nama User" autocomplete="off" />
                                           </div>
                                        </div>
                                        <div class="row">
                                           <div class="col mb-3">
                                              <label for="nameBasic" class="form-label">Instansi</label>
                                              <input type="text" name="instansi" id="nameBasic" class="form-control" required placeholder="Masukkan Nama Instansi" autocomplete="off" />
                                           </div>
                                        </div>
                                        <div class="row">
                                           <div class="col mb-3">
                                              <label for="nameBasic" class="form-label">Level</label>
                                              <select name="level" id="" class="form-control" required>
                                                 <option value="">-- Pilih --</option>
                                                 <option value="1">Administrator</option>
                                                 <option value="2">Call Taker</option>
                                              </select>
                                           </div>
                                        </div>
                                        <div class="row">
                                           <div class="col mb-3">
                                              <label for="nameBasic" class="form-label">Username</label>
                                              <input type="text" name="username" id="nameBasic" class="form-control" required placeholder="Masukkan Username" autocomplete="off" />
                                           </div>
                                        </div>
                                        <div class="row">
                                           <div class="col mb-3">
                                              <label for="nameBasic" class="form-label">Password</label>
                                              <input type="password" name="password" id="nameBasic" class="form-control" required placeholder="Masukkan Password" autocomplete="off" />
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
    <!-- footer -->
    @endsection
    @section('script')
    <script> 
       new DataTable('#example');
    </script>
    @if(session()->has("create"))
    <script type="text/javascript">
       alert('User Berhasil Ditambah');
    </script>
    @endif
    @if(session()->has("hapus"))
    <script type="text/javascript">
       alert('data berhasil dihapus');
    </script>
    @endif
    @if(session()->has("error"))
    <script type="text/javascript">
       alert('Password Lama Tidak Sesuai');
    </script>
    @endif
    @if(session()->has("edit"))
    <script type="text/javascript">
       alert('User Berhasil Di Ubah');
    </script>
    @endif
    @endsection