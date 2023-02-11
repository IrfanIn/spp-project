<div class="form">
    <div class="mb-3 form-floating">
        <input class="form-control" type="date" name="tgl_bayar" id="tgl_bayar" placeholder="tgl_bayar"
            value="{{ $val->tgl_bayar ?? '' }}">
        <label class="form-label" for="tgl_bayar">tanggal bayar</label>
    </div>
    <input type="text" name="user_id" value="{{ auth()->user()->id }}" hidden>
    <div class="mb-3">
        <select name="siswa_id" class="form-select" id="siswa">
            <option value="">pilih siswa</option>
            @foreach ($siswa as $data)
                <option value="{{ $data->id }}">{{ $data->nama_siswa }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 form-floating">
        <input class="form-control" type="text" name="bulan_dibayar" id="bulan_dibayar" placeholder="bulan_dibayar"
            value="{{ $val->bulan_dibayar ?? '' }}">
        <label class="form-label" for="bulan_dibayar">bulan bayar</label>
    </div>
    <div class="mb-3 form-floating">
        <input class="form-control" type="text" name="tahun_dibayar" id="tahun_dibayar" placeholder="tahun_dibayar"
            value="{{ $val->tahun_dibayar ?? '' }}">
        <label class="form-label" for="tahun_dibayar">tahun dibayar</label>
    </div>
    <div class="mb-3 form-floating">
        <input class="form-control" type="text" name="jumlah_dibayar" id="jumlah_dibayar"
            placeholder="jumlah_dibayar" value="{{ $val->jumlah_dibayar ?? '' }}">
        <label class="form-label" for="jumlah_dibayar">jumlah bayar</label>
    </div>
    <p id="total">total bayar </p>
</div>
