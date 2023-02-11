@if ($pembayaran->count() < 1)
    <p class="bg-white p-4 text-secondary text-center">Tidak ada data</p>
@else
    <div class="card">
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr class="text-center">
                        <th>no</th>
                        <th>tanggal bayar</th>
                        <th>nama siswa</th>
                        <th>nama petugas</th>
                        <th>bulan bayar</th>
                        <th>tahun bayar</th>
                        <th>jumlah bayar</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembayaran as $data)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->tgl_bayar }}</td>
                            <td>{{ $data->siswa->nama_siswa }}</td>
                            <td>{{ $data->user->username }}</td>
                            <td>{{ $data->bulan_dibayar }}</td>
                            <td>{{ $data->tahun_dibayar }}</td>
                            <td>{{ number_format($data->jumlah_dibayar) }}</td>
                            @if (auth()->user()->username == $data->user->username)
                                <td class="d-flex gap-2 justify-content-center">
                                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"
                                        data-bs-target="#{{ $data->id }}">edit</button>
                                    <form action="{{ route('pembayaran.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-outline-danger"
                                            onclick="confirm('Delete data?')">delete</button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif
