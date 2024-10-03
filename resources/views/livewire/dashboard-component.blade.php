<div wire:poll class="d-flex flex-wrap">
   <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $pendaki }}</h3>

                <p> Orang Sudah Mendaki</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer"> <i></i></a>
            </div>
          </div>

           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $laporanmasuk }}</h3>

                <p>Laporan Masuk</p>
              </div>
              <div class="icon">
                <i class="nav-icon fa fa-envelope"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $laporanproses}}</h3>

                <p>Laporan Dalam Proses</p>
              </div>
              <div class="icon">
                <i class="nav-icon fa fa-spinner"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $laporanselesai}}</h3>

                <p>Laporan Selesai</p>
              </div>
              <div class="icon">
                <i class="nav-icon fa fa-check-circle"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $sampah}}<sup>Kg</sup>
                </h3>

                <p>Sampah Diturunkan</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-trash"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
</div>
