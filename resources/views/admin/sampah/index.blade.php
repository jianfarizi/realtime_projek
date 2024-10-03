@extends('layout.main')


@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Sampah Pendaki</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Sampah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->`
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-10">

<div class="card">
<div class="card-header">
<h3 class="card-title">Sampah</h3>
<div class="card-tools">
<a type="button" href="{{route('sampah.create')}}" class="btn btn-primary">
 Tambahkan
</a>

</div>
</div>
<div class="card-body">
<table class="table">
  <thead>
     <tr>
                      <th>No</th>
                      <th>Pendaki</th>
                      <th style="width: 20%;">Jenis</th>
                      <th style="width: 20%;">Berat</th>
                      <th>Action</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($sampah as $index => $sampah)

    <tr>
      <td>{{ $index + 1}}</td>
      <td>{{ $sampah->pendakis->name}}</td>
      <td>{{ $sampah->type}} </td>
      <td>{{ $sampah->amount}} <a>Kg</a></td>
       <td class="text-align align-middle">
          <div class="btn-group btn-group-sm">
            <form action="{{ route('sampah.destroy', $sampah->id)}}" method="POST" onsubmit="return confirm('Anda Yakin Menghapus Data ini')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </form>

                 <a href="" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                </div>
       </td>
    </tr>
    
    @endforeach
   
  </tbody>
</table>
</div>



</div>

</div>
</div>
</div>
</section>
@endsection