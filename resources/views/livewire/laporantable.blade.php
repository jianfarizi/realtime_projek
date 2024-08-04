<div>
      <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Pelapor</th>
                      <th>Laporan</th>
                      <th>Deskripsi</th>
                      <th>Kategori</th>
                      <th>Foto</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($laporans as $laporan)
                    
                    <tr>
                      <td>{{  $index + 1}}</td>
                      <td></td>
                      <td>Kerusakan Jalur</td>
                      <td>pppppppppppp</td>
                      <td>Jalur</td>
                      <td>image</td>
                      <td><span class="btn btn-danger" >pending</span></td>
                      <td class="text-right align-middle"> 
                        <div class="btn-group btn-group-sm">
                           <a href="" class="btn btn-info">
                            <i class="fas fa-pen"></i>
                           </a>
                           <a href="" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                           </a>
                            <a href="" class="btn btn-success">
                            <i class="fas fa-eye"></i>
                           </a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        
          </div>
</div>
