<div class="modal fade" id="Modal{{$edukasi->id}}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                     <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                        ></button>
                  </div>
                  <div class="modal-body">
               <form action='{{url("edukasi/edit/$edukasi->id")}}' method="post" enctype="multipart/form-data">
                  @csrf
                     <div class="row">
                        <div class="col mb-3">
                           <label for="nameBasic" class="form-label">Nama</label>
                           <input type="text" name="nama" id="nameBasic" class="form-control" value="{{$edukasi->nama}}" />
                        </div>
                     </div>
                     <div class="row">
                        <div class="col mb-3">
                           <label for="nameBasic" class="form-label">Deskripsi</label>
                           <textarea name="deskripsi"  class="form-control" id="">{{$edukasi->deskripsi}}</textarea>
                        </div>
                     </div>
                     
                  </div>
                  <div class="modal-footer">
                     <button class="btn btn-primary">Save changes</button>
               </form>
                     <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                     Close
                     </button>
                  </div>
               </div>
            </div>
         </div>