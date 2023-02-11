@extends('template.dashboard')

@section('main-content')
    @if ($histori->count() < 1)
        <p class="bg-white p-4 text-secondary text-center">Tidak ada data</p>
    @else
        <div class="card">
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>tanggal bayar</th>
                            @if (!Auth::guard('siswa')->check())
                                <th>petugas</th>
                                <th>siswa</th>
                            @endif
                            <th>bulan dibayar</th>
                            <th>tahun dibayar</th>
                            <th>jumlah dibayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($histori as $data)
                            <tr class="text-center">
                                <td>{{ $data->tgl_bayar }}</td>
                                @if (!Auth::guard('siswa')->check())
                                    <td>{{ $data->user->username }}</td>
                                    <td>{{ $data->siswa->nama_siswa }}</td>
                                @endif
                                <td>{{ $data->bulan_dibayar }}</td>
                                <td>{{ $data->tahun_dibayar }}</td>
                                <td>{{ number_format($data->jumlah_dibayar) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
