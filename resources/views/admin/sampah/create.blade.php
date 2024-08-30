@extends('layout.main')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pendaki</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pendaki</a></li>
              <li class="breadcrumb-item active">create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->`
      </div><!-- /.container-fluid -->
    </div>
<section>

    <div class="container ">
        <div class="row justify-content-center">
         <div class="col-md-8">
           <div class="card card-primary">
             <div class="card-header">
               <h3 class="card-title">Pendaki</h3>
             </div>
             <div class="card-body">
          <form action="{{ route('sampah.store') }}" method="POST">
    @csrf
      <div class="form-group position-relative">
                    <label for="pendaki">Nama Pendaki</label>
                    <input type="text" id="pendakis" name="id_pendaki" class="form-control" placeholder="Cari Pendaki..." onkeyup="filterPendaki()" autocomplete="off" required>
                    <div id="pendakiList" class="dropdown-menu" style="width: 100%; display: none; position: absolute; z-index: 1000;"></div>
                </div>
    <div class="form-group">
        <label for="jenis_sampah">Jenis Sampah</label>
        <div class="">
            <div class="form-check form-check-inline">
                <label><input type="checkbox" name="type[]" for=""value="plastik"> Plastik</label><br>
            </div>
             <div class="form-check form-check-inline">
                <label><input type="checkbox" name="type[]" for=""value="kertas"> Kertas</label><br>
            </div>
             <div class="form-check form-check-inline">
                 </div>
                <label><input type="checkbox" name="type[]" for=""value="botol"> Botol Plastik</label><br>
             <div class="form-check form-check-inline">
                <label><input type="checkbox" name="type[]" for=""value="Organik"> Organik</label><br>
            </div>
             <div class="form-check form-check-inline">
                <label><input type="checkbox" name="type[]" for=""value="dll"> dll</label><br>
            </div>
        </div>
    </div>
    <div class="form-group">
      <label for="inputName">Berat *kg</label>
      <input type="text" id="inputName" class="form-control" name="amount" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah Sampah</button>
</form>
    
             </div>
             <!-- /.card-body -->
           </div>
           <!-- /.card -->
         </div>
       </div>
    </div>

</section>
<script>
function filterPendaki() {
    let input = document.getElementById('pendakis').value.toLowerCase();
    let list = document.getElementById('pendakiList');
    list.innerHTML = '';  // Hapus isi list sebelumnya
    let pendakis = @json($pendaki);

    let filtered = pendakis.filter(p => p.name.toLowerCase().includes(input));

    if (filtered.length > 0) {
        list.style.display = 'block';
        filtered.forEach(p => {
            let option = document.createElement('a');
            option.className = 'dropdown-item';
            option.style.cursor = 'pointer';
            option.textContent = p.name;
            option.onclick = function() {
                document.getElementById('pendakis').value = p.name;
                document.getElementById('pendakis').dataset.id = p.id;
                list.style.display = 'none';
            };
            list.appendChild(option);
        });
    } else {
        list.style.display = 'none';
    }
}
</script>



@endsection