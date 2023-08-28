<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
     @include('template2.section.head')
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_2">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               @include('template2.section.sidebar')
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  @include('template2.section.navbar')
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  @yield('content')
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{url('public/assets3')}}/js/jquery.min.js"></script>
      <script src="{{url('public/assets3')}}/js/popper.min.js"></script>
      <script src="{{url('public/assets3')}}/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="{{url('public/assets3')}}/js/animate.js"></script>
      <!-- select country -->
      <script src="{{url('public/assets3')}}/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="{{url('public/assets3')}}/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="{{url('public/assets3')}}/js/Chart.min.js"></script>
      <script src="{{url('public/assets3')}}/js/Chart.bundle.min.js"></script>
      <script src="{{url('public/assets3')}}/js/utils.js"></script>
      <script src="{{url('public/assets3')}}/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="{{url('public/assets3')}}/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->


      {{-- table --}}
      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"> </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"> </script>
      <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"> </script>


      <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
      <script src="{{ url('public') }}/sweetalert2/dist/sweetalert2.min.js"></script>
      @yield('script')
   </body>
</html>

{{-- 

https://code.jquery.com/jquery-3.7.0.js
https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js
https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js
https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js
https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js
https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js
https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js --}}