<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="{{url('public')}}/logo112.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="{{url('public/cssfornt')}}/fonts/icomoon/style.css">
	<link rel="stylesheet" href="{{url('public/cssfornt')}}/fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="{{url('public/cssfornt')}}/css/tiny-slider.css">
	<link rel="stylesheet" href="{{url('public/cssfornt')}}/css/aos.css">
	<link rel="stylesheet" href="{{url('public/cssfornt')}}/css/glightbox.min.css">
	<link rel="stylesheet" href="{{url('public/cssfornt')}}/css/style.css">

	<link rel="stylesheet" href="{{url('public/cssfornt')}}/css/flatpickr.min.css">

	<style>
		/* The container */

</style>
	</style>

	<title>SISPEN 112</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>



	<div class="section search-result-wrap">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading">Daftar Gejala : {{$edukasi->nama}}</div>
				</div>
			</div>
			<div class="container">
				<div class="col-md-10"></div>
				<div class="col-md-2">
					<input type="text" name="" id="cariKat" onkeyup="prosesMenu()" class="form-control" placeholder="Cari Disini...">
				</div>
				
			</div>
<form action="{{url('add/daftar')}}" method="post">
	@csrf
	<input type="hidden" name="id_jenis_edukasi" value="{{$edukasi->id}}">
	<ul id="daftarKategori">
		@foreach($list_pertanyaan as $pertanyaan)
			<li style="list-style:none;"><a href="#" style="font-size: 25px"><input type="checkbox" name="{{$pertanyaan->id}}" value="1"> {{$pertanyaan->pertanyaan}} ( {{$pertanyaan->SubEdukasi->nama_edukasi}} )</a>  <input type="hidden" class="form-check-input" name="id_{{$pertanyaan->id}}" value="{{$pertanyaan->id}}"> <input type="hidden" name="deskripsi_{{$pertanyaan->id}}" value="{{$pertanyaan->id_deskripsi}}"></li> 
		@endforeach
	</ul>
	<button class="btn btn-primary"> Cek Hasil</button>
	
</form>



			
			
			</div>
 
		</div>
	</div>

    
  </body>
  <script>

	
function prosesMenu()
{
	var input = document.getElementById("cariKat");
	var filter = input.value.toLowerCase();
	var ul = document.getElementById("daftarKategori");
	var li = document.querySelectorAll("li")
	console.log(li)
	for(var i = 0; i<li.length; i++){
		var ahref = document.querySelectorAll("a")[i];
		if(ahref.innerHTML.toLowerCase().indexOf(filter) > -1){
			li[i].style.display = "";
		}else{
			li[i].style.display = "none";
		}
	}
}
</script>
  </script>
  </html>
