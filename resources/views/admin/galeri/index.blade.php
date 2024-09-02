@extends('layout.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Galeri</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Galeri</li>
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
                        <div class="card-tools">
                            <a type="button" href="{{ route('galeri.create') }}" class="btn btn-primary">
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
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="content">
                                @foreach ($galeri as $index => $galeri)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $galeri->name }}</td>
                                    <td><img src="{{ asset('storage/image_file/' . $galeri->image_file) }}" width="50px"
                                            alt=""></td>
                                    <td class="text-align align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST"
                                                onsubmit="return confirm('Anda Yakin Menghapus Data ini')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>

                                            <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-primary"><i
                                                    class="fas fa-pen"></i></a>
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
<script>
    console.log("{{$galeri}}");
    function notif(data) {
        console.log('ini data'+data);
        Toastify({
            text: data.message.message,
            classname: 'info',
            style: {
                background: "#48CFCB",
            },
            gravity: 'bottom',
            position: 'left',
        }).showToast();

        $('#content').append(` <tr>
                                            <td>${data.index + 1}</td>
                                            <td>${data.name}</td>
                                            <td><img src="/storage/image_file/${data.image_file}" width="50px" alt=""></td>

                                            
                                        </tr>`)
    }
</script>
@endsection