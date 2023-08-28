<div class="modal fade" id="modal_{{$deskripsi->id}}" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Edit Edukasi</h5>
            {{-- <button
               type="button"
               class="btn-close"
               data-bs-dismiss="modal"
               aria-label="Close"
               ></button> --}}
         </div>
         <div class="modal-body">
            <form action='{{url("admin/edukasi/deskripsi/edit/$deskripsi->id")}}' method="post" enctype="multipart/form-data">
               @csrf
               <div class="row">
                  <div class="col mb-3">
                     <label for="nameBasic" class="form-label"></label>
                     <input type="text" name="nama" id="nameBasic" class="form-control" value="{{$deskripsi->nama_edukasi}}" />
                  </div>
               </div>
               <div class="row">
                  <div class="col mb-3">
                     <label for="nameBasic" class="form-label">Keterangan</label>
                     <textarea id="editor{{$deskripsi->id}}" name="keterangan" class="form-control ">{!!$deskripsi->keterangan!!}</textarea>
                  </div>
               </div>
         </div>
         <div class="modal-footer">
         <button class="btn btn-primary">Save changes</button>
         </form>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>