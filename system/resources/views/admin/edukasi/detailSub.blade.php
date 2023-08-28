@extends('template2.base')
@section('content') 
<div class="col-md-2"></div>
                        <div class="col-md-8">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Detail </h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- user profile section --> 
                                    <!-- profile image -->
                                    <div class="col-lg-12">
                                       <div class="full dis_flex center_text">
                                          
                                          <div class="profile_contant">
                                             <div class="contact_inner">
                                                <h3>{{$deskripsi->nama_edukasi}}</h3>
                                                <p><strong>Tentang: </strong>{!!$deskripsi->keterangan!!}</p>
                                              
                                             </div>
                                            
                                          </div>
                                       </div>
                                       <!-- profile contant section -->
                                       <div class="full inner_elements margin_top_30">
                                          <div class="tab_style2">
                                             <div class="tabbar">
                                                <nav>
                                                   <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#recent_activity" role="tab" aria-selected="true">Gejala</a>
                                                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#project_worked" role="tab" aria-selected="false">Penanganan</a>
                                                      
                                                   </div>
                                                </nav>
                                                <div class="tab-content" id="nav-tabContent">
                                                   <div class="tab-pane fade show active" id="recent_activity" role="tabpanel" aria-labelledby="nav-home-tab">
                                                      <div class="msg_list_main">
                                                         <ul class="msg_list">
                                                            @foreach($list_gejala as $gejala)
                                                            <li>
                                                               <span>
                                                               <span class="name_user">{{$gejala->pertanyaan}}</span>
                                                               
                                                              
                                                               </span>
                                                            </li>
                                                            @endforeach
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <div class="tab-pane fade" id="project_worked" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                      {!!$deskripsi->penanganan!!}
                                                   </div>
                                                  
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- end user profile section -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-2"></div>
                        </div>
<div class="container-fluid">
                 
</div>
                
@endsection
@section('script')
<script> 
   new DataTable('#example');
</script>
@endsection 



