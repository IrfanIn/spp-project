@if ($siswa->count() < 1)
    <p class="bg-white p-4 text-secondary text-center">Tidak ada data</p>
@else
    <div class="card">
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr class="text-center">
                        <th>Nis</th>
                        <th>nama siswa</th>
                        <th>kelas</th>
                        <th>alamat</th>
                        <th>no telepon</th>
                        <th>nominal spp</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $data)
                        <tr>
                            <td>{{ $data->nis }}</td>
                            <td>{{ $data->nama_siswa }}</td>
                            <td>{{ $data->kelas->nama_kelas }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->no_telp }}</td>
                            <td>{{ $data->spp->nominal }}</td>
                            <td class="d-flex gap-2 justify-content-evenly">
                                <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"
                                    data-bs-target="#{{ $data->id }}">edit</button>
                                <form action="{{ route('siswa.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-outline-danger"
                                        onclick="confirm('Delete data?')">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif
