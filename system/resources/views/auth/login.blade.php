<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Sispen 112</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{url('public')}}/logo112.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{url('public/assets3')}}/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="{{url('public/assets3')}}/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{url('public/assets3')}}/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="{{url('public/assets3')}}/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{url('public/assets3')}}/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{url('public/assets3')}}/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{url('public/assets3')}}/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="{{url('public/assets3')}}/js/semantic.min.css" />
      <link rel="stylesheet" href="{{ url('public') }}/sweetalert2/dist/sweetalert2.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="150" src="{{url('public')}}/logo112.png" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                     <form action="{{url('loginProses')}}" method="post">
                      @csrf
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Username</label>
                              <input type="text" name="username" placeholder="Username" required autocomplete="off" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" required/>
                           </div>
                           
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Sign In</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
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
      <!-- nice scrollbar -->
      <script src="{{url('public/assets3')}}/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{url('public/assets3')}}/js/custom.js"></script>
      <script src="{{ url('public') }}/sweetalert2/dist/sweetalert2.min.js"></script>
      @if(session()->has('salah'))
      <script>
          Swal.fire({
            icon: 'error',
            title: 'Password dan Username Salah',
            showConfirmButton: true,

        });
      </script>
      @endif
   </body>
</html>