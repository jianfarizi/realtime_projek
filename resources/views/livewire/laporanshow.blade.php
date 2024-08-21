<div>
  <div wire:ignore.self class="modal fade" id="laporanModal" tabindex="-1" aria-labelledby="laporanDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="laporanDetailModalLabel">Detail Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="laporanDetail">
                <div class="modal-body">
                    <div>
                      <div class="mb-3">
                          <label for="pelapor" class="form-label">Pelapor</label>
                          <input type="text" class="form-control" id="pelapor" wire:model ="pelapor" value="pelapor" readonly>
                      </div>
                      <div class="mb-3">
                          <label for="laporan" class="form-label">Laporan</label>
                          <input type="text" class="form-control" id="name" wire:model="name" value="name" readonly>
                      </div>
                      <div class="mb-3">
                          <label for="deskripsi" class="form-label">Deskripsi</label>
                          <textarea class="form-control" id="desc" rows="3" wire:model ="desc" value="desc"readonly></textarea>
                      </div>
                      <div class="mb-3">
                          <label for="kategori" class="form-label">Kategori</label>
                          <input type="text" class="form-control" id="category" wire:model ="category" value="category" readonly>
                      </div>
                      <div class="mb-3">
                          <label for="status" class="form-label">Status</label>
                          <input type="text" class="form-control" id="status" wire:model ="status" value="status" readonly>
                      </div>
                      <div class="mb-3">
                          <label for="image" class="form-label">Foto</label><br>
                          <img src="{{ $image_file }}" alt="Foto Laporan" wire:model="image_file" width="200px">
                      </div>
                    
                  
                </div>
    
                </div>

            </form>
        </div>
    </div>
</div>
</div>
<script>
    window.addEventListener('show-modal', event => {
        var myModal = new bootstrap.Modal(document.getElementById('laporanModal'));
        myModal.show();
    });
</script>