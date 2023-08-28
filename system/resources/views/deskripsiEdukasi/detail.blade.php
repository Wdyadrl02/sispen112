@extends('template.base')
@section('content')
<div class="card mb-4">
   <h5 class="card-header">Membuat Seputar Pertanyaan {{$deskripsi->nama_edukasi}}</h5>
   <div class="row">
      <div class="col-md-5 order-md-0 order-1">
         <div class="card-body">
            {!!$deskripsi->keterangan!!}
         </div>
      </div>
      <div class="col-md-7 order-md-1 order-0">
         <div class="text-center mt-4 mx-3 mx-md-0">
            <img src="{{url('public')}}/assets/img/illustrations/girl-doing-yoga-light.png" class="img-fluid" alt="Api Key Image" width="350" data-app-light-img="illustrations/sitting-girl-with-laptop-light.png" data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png">
         </div>
      </div>
   </div>
</div>

<div class="card">
	<div class="row">
		<form action="{{url('deskripsi/detail/add')}}" method="post">	
			@csrf
		<div class="col-md-12">
			<input type="hidden" name="id_deskripsi" value="{{$deskripsi->id}}" >
			<input type="hidden" name="id_edukasi" value="{{$deskripsi->id_jenis_edukasi}}">
			<div class="card-body ">
				<div class="mb-3 col-12">
					<label for="" class="control-label"> Pertanyaan</label>
					<textarea name="pertanyaan" id="" cols="10"  class="form-control" placeholder="Buat Pertanyaan" required></textarea>
				</div>
				<div class="mb-3 col-12">
					<label for="" class="control-label"> Solusi</label>
					 <textarea cols="80" id="editor" name="solusi" rows="10"></textarea>
				</div>
				<div class="mb-3 col-3">
                  <button type="submit" class="btn btn-primary me-2 d-grid w-100">Tambah Pertanyaan</button>
                </div>
			</div>
	
		</div>
		</form>
	</div>	
</div>
@endsection
@section('script')
<script>
	ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
         console.error( error );
      } );

</script>
@endsection