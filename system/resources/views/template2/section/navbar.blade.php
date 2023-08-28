<nav class="navbar navbar-expand-lg navbar-light">
    <div class="full">
        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
        {{-- <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="{{url('public/assets3')}}/images/logo/logo_black.png" alt="#" /></a>
                        </div> --}}
        <div class="right_topbar">
            <div class="icon_info">
               @php
                   $jumlahlog = DB::table('log_panggilan')->where('status_notif',0)->count();
                   $lis_log = DB::table('log_panggilan')->where('status_notif',0)
                                                        ->join('deskripsi_edukasi','deskripsi_edukasi.id','=','log_panggilan.id_deskripsi')
                                                        ->get();
               @endphp
                <ul>
                    <li><a class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-bell-o"></i><span
                                class="badge">{{$jumlahlog}}</span></a>
                        <div class="dropdown-menu">
                            @foreach($lis_log as $log)
                                <a class="dropdown-item" ><h6>{{$log->nama_edukasi}}</h6></a>
                            @endforeach
                            <hr>
                             <a class="dropdown-item" href="{{url("admin/log/notif")}}"><span><h5>Log Panggilan</h5></span> <i
                                    class="fa fa-sign-out"></i></a>
                        </div>
                    </li>

                </ul>
                <ul class="user_profile_dd">
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle"
                                src="{{ url('public') }}/logo112.png" alt="#" /><span
                                class="name_user">{{ Auth::user()->nama_petugas }}</span></a>
                        <div class="dropdown-menu">
                            {{--                                        <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a> --}}
                            <a class="dropdown-item" onclick="return confirm('Apakah Anda Yakin Akan Keluar')" href="{{ url('logout') }}"><span>Log Out</span> <i
                                    class="fa fa-sign-out"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
