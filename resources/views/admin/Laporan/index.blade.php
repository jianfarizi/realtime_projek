@extends('layout.main')

@push('styles')
 @livewireStyles
@endpush

@push('scripts')
@livewireScripts
@endpush



@section('content')
<div class="content-header">
      <div class="container">
        <div class="row ">
          <div class="col-sm-6">
            <h1 class="m-0">Data Laporan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
    <div>
        @livewire('laporantable')
    </div>
    </section>
@endsection