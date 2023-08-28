<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sispen 112</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ url('public') }}/logo112.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('public/assets2') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ url('public/assets2') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('public/assets2') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url('public/assets2') }}/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public') }}/sweetalert2/dist/sweetalert2.min.css">
</head>

<body>
    <!-- Spinner Start -->
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="{{ url('/') }}" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">Sispen112</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0"> 
                <a href="{{url('kasus')}}" class="nav-item nav-link active">Kasus Penanganan</a>
                <a href="{{url('logout')}}" onclick="return confirm('Apakah Anda Yakin Akan Keluar')" class="nav-item nav-link">Logout</a>

            </div>
            <h4 class="m-0 pe-lg-5 d-none d-lg-block"><img src="{{ url('public') }}/logo112.png" height="50"
                    alt="">112</h4>
                   
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    {{--     <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div> --}}
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Layanan</h6>
                <h1 class="mb-5">Edukasi</h1>
            </div>
            <div class="row g-4">
                @foreach ($list_edukasi as $edukasi)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid" src="{{ url('imageEdukasi') }}/{{ $edukasi->foto }}"
                                    alt="">
                            </div>
                            <h4 class="mb-3">{{ $edukasi->nama }}</h4>
                            <p>{{ $edukasi->deskripsi }}.</p>
                            <a class="btn-slide mt-2" href="{{ url("daftar/$edukasi->id") }}"><i
                                    class="fa fa-arrow-right"></i><span>Selanjutnya</span></a> <br>

                            <a href="tel:{{$edukasi->no }}" class="btn btn-danger">{{$edukasi->no_layanan}}</a>
                           <!--  <a class="btn-slide mt-2" target="_blank" href="tel:{{ $edukasi->no }}"><i
                                    class="fa fa-arrow-right"></i><span>Responder</span></a> -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->

    <!-- Testimonial End -->


    <!-- Footer Start -->

    <!-- Footer End -->


    <!-- Back to Top -->
    {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a> --}}



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/assets2') }}/lib/wow/wow.min.js"></script>
    <script src="{{ url('public/assets2') }}/lib/easing/easing.min.js"></script>
    <script src="{{ url('public/assets2') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ url('public/assets2') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ url('public/assets2') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ url('public') }}/sweetalert2/dist/sweetalert2.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="{{ url('public/assets2') }}/js/main.js"></script>
    @if (session()->has('tertangani'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Kasus tertangani',
                showConfirmButton: true,

            });
        </script>
    @endif
    @if(session()->has('taktertangani'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Kasus Tidak Tertangani',
            showConfirmButton: true,

        });
    </script>
    @endif
</body>

</html>
