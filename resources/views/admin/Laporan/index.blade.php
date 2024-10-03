@extends('layout.main')

@push('styles')
 @livewireStyles
@endpush

@push('scripts')
@livewireScripts
@endpush



@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Laporan</h1>
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
        <div class="col-12"></div>
        @livewire('laporantable')

      </div>
    </div>
    </section>
@endsection