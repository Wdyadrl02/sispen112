@extends('template2.base')
@section('content')
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30 yellow_bg">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">{{$jumlahLog}}</p>
                                    <p class="head_couter">Jumlah Penelpon</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30 blue1_bg">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-clock-o"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">{{$tertangani}}</p>
                                    <p class="head_couter">Penelpon tertangani</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30 green_bg">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-cloud-download"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">{{$tidak}}</p>
                                    <p class="head_couter">Tidak Tertangani</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30 red_bg">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-comments-o"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">{{$edukasi}}</p>
                                    <p class="head_couter">Jumlah Edukasi</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Grafik Data Panggilan</h2>
                                 </div>
                              </div>
                              <div class="map_section padding_infor_info">
                                 <canvas id="bar_chart"></canvas>
                              </div>
                           </div>
                        </div>
                     </div>
                   
                     <!-- graph -->
                     
                  </div>
                  <!-- footer -->
                 <!--  <div class="container-fluid">
                     <div class="footer">
                        <p>Credit By: Widya Darlina.
                         
                        </p>
                     </div>
                  </div> -->
                    
@endsection
@section('script')
<script>
$(function () {
   
    new Chart(document.getElementById("bar_chart").getContext("2d"), getChartJs('bar'));
    new Chart(document.getElementById("radar_chart").getContext("2d"), getChartJs('radar'));
    new Chart(document.getElementById("pie_chart").getContext("2d"), getChartJs('pie'));
});

function getChartJs(type) {
    var config = null;
 if (type === 'bar') {
        config = {
            type: 'bar',
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli","Agustus","September","Oktober","Nopember","Desember"
                  ],
                datasets: [{
                    label: "Tidak Tertangani",
                    data: [{{$JanuariT}}, {{$FebruariT}}, {{$MaretT}}, {{$AprilT}}, {{$MaiT}}, {{$JuniT}}, {{$JuliT}},{{$AgustusT}},{{$SeptemberT}},{{$OktoberT}},{{$NovemberT}},{{$DesemberT}}],
                    backgroundColor: 'rgba(0, 150, 136)'
                }, {
                        label: "Tertangani",
                        data: [{{$Januari}}, {{$Februari}}, {{$Maret}}, {{$April}}, {{$Mai}}, {{$Juni}}, {{$Juli}},{{$Agustus}},{{$September}},{{$Oktober}},{{$November}},{{$Desember}}],
                        backgroundColor: 'rgba(88, 164, 245)'
                    }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    else if (type === 'radar') {
        config = {
            type: 'radar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    data: [65, 25, 90, 81, 56, 55, 40],
                    borderColor: 'rgba(30, 208, 133, 1)',
                    backgroundColor: 'rgba(30, 208, 133, 0.3)',
                    pointBorderColor: 'rgba(0, 188, 212, 0)',
                    pointBackgroundColor: 'rgba(0, 188, 212, 0)',
                    pointBorderWidth: 1
                }, {
                        label: "My Second dataset",
                        data: [72, 48, 40, 19, 96, 27, 100],
                        borderColor: 'rgba(255, 87, 34, 1)',
                        backgroundColor: 'rgba(255, 87, 34, 0.3)',
                        pointBorderColor: 'rgba(233, 30, 99, 0)',
                        pointBackgroundColor: 'rgba(233, 30, 99, 0.8)',
                        pointBorderWidth: 1
                    }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    else if (type === 'pie') {
        config = {
            type: 'pie',
            data: {
                datasets: [{
                    data: [225, 50, 100, 40],
                    backgroundColor: [
                        "rgb(233, 30, 99)",
                        "rgb(255, 193, 7)",
                        "rgb(0, 188, 212)",
                        "rgb(139, 195, 74)"
                    ],
                }],
                labels: [
                    "Pink",
                    "Amber",
                    "Cyan",
                    "Light Green"
                ]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    return config;
}
</script>
@endsection