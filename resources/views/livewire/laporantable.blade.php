<div wire:poll.2000ms>
    <div class="container">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <table id="laporan-table" class="table">
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
                            @foreach ($laporans as $index => $laporan)
                                <tr wire:key="laporan-{{ $laporan->id }}">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $laporan->users->name }}</td>
                                    <td>{{ $laporan->name }}</td>
                                    <td>{{ Str::limit($laporan->desc, 50) }}</td>
                                    <td>{{ $laporan->category }}</td>
                                    <td><img src="{{ asset('storage/' . $laporan->image_file) }}" width="50px"
                                            alt=""></td>

                                    <!-- Dropdown untuk update status -->
                                    <td>
                                        <div>
                                            <select wire:change="updatestatus({{ $laporan->id }})"
                                                wire:model.defer="statusArray.{{ $laporan->id }}" class="form-control">
                                                <option value="pending">Pending</option>
                                                <option value="processing">Processing</option>
                                                <option value="done">Done</option>
                                            </select>
                                        </div>
                                    </td>

                                    <td class="text-right align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-danger" wire:click="delete({{ $laporan->id }})">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#laporanModal"
                                                wire:click="laporandetail({{ $laporan->id }})">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{-- Pagination links --}}
                    {{ $laporans->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
