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
              <form action="{{ route('pendaki.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="form-group">
                  <label for="inputName">Nama</label>
                  <input type="text" id="inputName" class="form-control" name="name" required>
                 
                </div>
                 <div class="form-group">
                  <label for="inputName">Address</label>
                  <input type="text" id="inputName" class="form-control" name="address" required>
                 
                </div>
                 <div class="form-group">
                  <label for="inputName">Telp</label>
                  <input type="text" id="inputName" class="form-control" name="telp" required>
                </div>
                    <div class="form-group">
                    <label for="inputName">No Ktp</label>
                    <input type="text" id="inputName" class="form-control" name="ktp" required>
                </div>
                <div class="">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                 </div>
                
              </form>
    
             </div>
             <!-- /.card-body -->
           </div>
           <!-- /.card -->
         </div>
       </div>
    </div>

</section>
@endsection