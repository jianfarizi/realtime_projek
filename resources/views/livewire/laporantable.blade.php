<div>
    @include('livewire.laporanshow')

    <div class="container">
        <div class="col">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <table wire:poll.refreshLaporanData.5s id="laporan-table" class="table">
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
                        <tbody> <!-- Polling secara berkala pada data yang diinginkan -->
                            @foreach ($laporans as $index => $laporan)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $laporan->users->name }}</td>
                                    <td>{{ $laporan->name }}</td>
                                    <td>{{ Str::limit($laporan->desc, 5) }}</td>
                                    <td>{{ $laporan->category }}</td>
                                    <td><img src="{{ asset('storage/' . $laporan->image_file) }}" width="50px" alt=""></td>
                                    <!-- Status dan Action tidak termasuk dalam polling -->
                                    <td>@livewire('laporan_update', ['laporanId' => $laporan->id, 'status' => $laporan->status], key($laporan->id))</td>
                                    <td class="text-right align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-danger" wire:click="delete({{ $laporan->id }})">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#laporanModal" wire:click="laporandetail({{ $laporan->id }})">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- {{ $laporans->links() }} -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
