   @extends('template2.base')
   @php
   function tgl_indo($tanggal){
         $bulan = array (
           1 =>   'Januari',
           'Februari',
           'Maret',
           'April',
           'Mei',
           'Juni',
           'Juli',
           'Agustus',
           'September',
           'Oktober',
           'November',
           'Desember'
           );
           
           $pecahkan = explode('-', $tanggal);
           
           // variabel pecahkan 0 = tahun
           // variabel pecahkan 1 = bulan
           // variabel pecahkan 2 = tanggal
    
           return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
       
   }
   @endphp
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
                                      <form action="{{url('admin/log/bulan')}}" method="get">
                                           <div class="row">
                                               <label for="" class="col-md==-3">Filter Berdasarkan Bulan</label>
                                               <div class="col-md-10">
                                                   <select name="bulan" id="" onclick class="form-control" onchange="this.form.submit()">
                                                       <option value="">--Pilih--</option>
                                                       <option value="1">Januari</option>
                                                       <option value="2">Februari</option>
                                                       <option value="3">Maret</option>
                                                       <option value="4">April</option>
                                                       <option value="5">Mai</option>
                                                       <option value="6">Juni</option>
                                                       <option value="7">Juli</option>
                                                       <option value="8">Agustus</option>
                                                       <option value="9">September</option>
                                                       <option value="10">Oktober</option>
                                                       <option value="11">November</option>
                                                       <option value="12">Desember</option>
                                                   </select>
                                               </div>
                                           </div>
                                      </form>
                                     
                                    </div>
                                 </div>
                                 <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                       <table id="example" class="display nowrap" style="width:100%">
               <thead>
                  <tr>
                     <th>NO</th>
                     <th>LOG PANGGILAN</th>
                     <th>TANGGAL</th>
                     <th>STATUS</th>
                     <th>AKSI</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($list_log as $key=>$log)
                  <tr>
                     <td>{{$key+1}}</td>
                     <td>
                        @if($log->subEdukasi == null )
                        Edukasi Tidak Tersedia
                        @else
                        {{$log->subEdukasi->nama_edukasi}}
                        @endif
                     </td>
                     <td>{{tgl_indo(date('y-m-d',strtotime($log->created_at)))}}</td>
                     <td>{{$log->penanganan}}</td>
                     <td><a href='{{url("admin/log/hapus/$log->id")}}' type="button" class="btn btn-outline-danger " ><i class="fa fa-trash-o" style="color:black;"></i></a></td>
                  </tr>

                  @endforeach
               </tbody>
               
            </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- footer -->

   @endsection
   @section('script')
   <script> 
     $(document).ready(function() {
       $('#example').DataTable( {
           dom: 'Bfrtip',
           buttons: [
               'copy', 'csv', 'excel', 'pdf', 'print'
           ]
       } );
   } );
   </script>
   @if(session()->has("Hapus"))
   <script type="text/javascript">
      alert('data berhasil dihapus');
   </script>

   @endif
   @endsection 



