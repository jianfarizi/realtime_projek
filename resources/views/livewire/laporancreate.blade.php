<div>
<div class="container ">
    <div class="row justify-content-center">
     <div class="col-md-10">
       <div class="card card-primary">
         <div class="card-header">
           <h3 class="card-title">Laporan</h3>
         </div>
         <div class="card-body">
        
          <form wire:submit.prevent="store">
            <div class="form-group">
              <label for="inputName">Nama Laporan</label>
              <input type="text" id="inputName" class="form-control" @error('name') is-invalid @enderror wire:model="name">
             
            </div>
            <div class="form-group">
              <label for="inputDescription">Deskripsi Laporan</label>
              <textarea id="inputDescription"  @error('desc') is-invalid @enderror class="form-control" rows="4" wire:model="desc"></textarea>
            </div>
            <div class="form-group">
              <label for="inputStatus">Kategori Laporan</label>
              <select id="inputStatus" class="form-control custom-select" @error('category') is-invalid @enderror wire:model="category">
                <option selected >Kategori Laporan</option>
                <option>Jalur</option>
                <option>Sampah</option>
                <option>Lingkungan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputClientCompany">Foto</label>
              <input type="file" id="inputClientCompany" wire:model="image_file" @error('iamge_file') is-invalid @enderror class="form-control" placeholder="Masukan foto">
            </div>
              <div class="">
                <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
              </div>
          </form>

         </div>
         <!-- /.card-body -->
       </div>
       <!-- /.card -->
     </div>
   </div>
</div>
</div>
