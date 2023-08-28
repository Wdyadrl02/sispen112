<!DOCTYPE html>
<!-- =========================================================
   * Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
   ==============================================================
   
   * Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
   * Created by: ThemeSelection
   * License: You must have a valid license purchased in order to legally use the theme for your project.
   * Copyright ThemeSelection (https://themeselection.com)
   
   =========================================================
    -->
<!-- beautify ignore:start -->
<html
   lang="en"
   class="light-style layout-menu-fixed"
   dir="ltr"
   data-theme="theme-default"
   data-assets-path="{{url('public')}}/assets/"
   data-template="vertical-menu-template-free"
   >
   <head>
      @include('template.section.head')
   </head>
   <body>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar">
         <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
               @include('template.section.sidebar')
            </aside>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
               <!-- Navbar -->
               <nav
                  class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                  id="layout-navbar"
                  >
                  @include('template.section.navbar')
               </nav>
               <!-- / Navbar -->
               <!-- Content wrapper -->
               <div class="content-wrapper">
                  <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
                    @yield('content')
                  </div>
                  <!-- / Content -->
                  <!-- Footer -->
                  <footer class="content-footer footer bg-footer-theme">
                     <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                           ©
                           <script>
                              document.write(new Date().getFullYear());
                           </script>
                           ,  by
                           <a href="#" class="footer-link fw-bolder">Widya Darlina</a>
                        </div>

                     </div>
                  </footer>
                  <!-- / Footer -->
                  <div class="content-backdrop fade"></div>
               </div>
               <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
         </div>
         <!-- Overlay -->
         <div class="layout-overlay layout-menu-toggle"></div>
      </div>
      <!-- / Layout wrapper -->
      
      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="{{url('public')}}/assets/vendor/libs/jquery/jquery.js"></script>
      <script src="{{url('public')}}/assets/vendor/libs/popper/popper.js"></script>
      <script src="{{url('public')}}/assets/vendor/js/bootstrap.js"></script>
      <script src="{{url('public')}}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
      <script src="{{url('public')}}/assets/vendor/js/menu.js"></script>
      <!-- endbuild -->
      <!-- Vendors JS -->
      <script src="{{url('public')}}/assets/vendor/libs/apex-charts/apexcharts.js"></script>
      <!-- Main JS -->
      <script src="{{url('public')}}/assets/js/main.js"></script>
      <!-- Page JS -->
      <script src="{{url('public')}}/assets/js/dashboards-analytics.js"></script>
      <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <script src=" https://code.jquery.com/jquery-3.5.1.js"> </script>
      <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"> </script>
   
      @yield('script')
   </body>
</html>