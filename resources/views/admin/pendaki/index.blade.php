@extends('layout.main')


@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pendaki</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Laporan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->`
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">

<div class="card">
<div class="card-header">
<h3 class="card-title">Pendaki</h3>
<div class="card-tools">
<a type="button" href="{{route('pendaki.create')}}" class="btn btn-primary">
 Tambahkan
</a>

</div>
</div>
<div class="card-body">
<table class="table">
  <thead>
     <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>No. Telp</th>
                      <th>No. KTP</th>
                      <th>Status</th>
                      <th>Action</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($pendaki as $index => $pendaki)
    
    <tr>
      <td>{{ $index + 1 }}</td>
      <td>{{ $pendaki->name}}</td>
      <td>{{ $pendaki->address}}</td>
      <td>{{ $pendaki->telp}}</td>
      <td>{{ $pendaki->ktp}}</td>
      <td>{{ $pendaki->status}}</td>
      <td class="text-align align-middle">
          <div class="btn-group btn-group-sm">
            <form action="{{ route('pendaki.destroy', $pendaki->id)}}" method="POST" onsubmit="return confirm('Anda Yakin Menghapus Data ini')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </form>

                 <a href="{{ route('pendaki.edit', $pendaki->id)}}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
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