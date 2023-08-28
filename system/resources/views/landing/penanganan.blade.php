<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sispen 112</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{url('public')}}/logo112.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('public/assets2')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{url('public/assets2')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('public/assets2')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('public/assets2')}}/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
      <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->



    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="{{url('/')}}" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">Sispen112</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
               <a href="{{url('kasus')}}" class="nav-item nav-link ">Kasus Penanganan</a>
                <a href="{{url('logout')}}" onclick="return confirm('Apakah Anda Yakin Akan Keluar')" class="nav-item nav-link">Logout</a>
            </div>
            <h4 class="m-0 pe-lg-5 d-none d-lg-block"><img src="{{url('public')}}/logo112.png" height="50" alt="">112</h4>
             
        </div>
    </nav>
    <!-- Navbar End -->



    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">{{ $deskripsi->nama_edukasi }}</h1>
                    <h1 class="mb-4">Pertolongan Pertama</h1>
                    {!!  $deskripsi->penanganan !!}
                    @php
                        $id_jenis =  $deskripsi->id_jenis_edukasi;
                        $dataresponder = DB::table('jenis_edukasi')->where('id',$id_jenis)->first()
                    @endphp
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="tel:{{$dataresponder->no_layanan}}">Hubungi Responder</a>
                    <a class="btn btn-success rounded-pill py-3 px-5"
                        href='{{ url("tertangani/$id_jenis/$deskripsi->id") }}'>Tertangani</a>
                    <p></p>
                    <a class="btn btn-warning rounded-pill py-3 px-5"
                        href='{{ url("taktertangani/$id_jenis/$deskripsi->id") }}'>Tidak Tertangani</a>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('public/assets2')}}/lib/wow/wow.min.js"></script>
    <script src="{{url('public/assets2')}}/lib/easing/easing.min.js"></script>
    <script src="{{url('public/assets2')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{url('public/assets2')}}/lib/counterup/counterup.min.js"></script>
    <script src="{{url('public/assets2')}}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{url('public/assets2')}}/js/main.js"></script>
</body>

</html>