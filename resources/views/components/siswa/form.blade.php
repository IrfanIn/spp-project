<div class="form">
    <div class="mb-3 form-floating">
        <input class="form-control" type="text" name="nis" id="nis" placeholder="nis"
            value="{{ $val->nis ?? '' }}">
        <label class="form-label" for="nis">nis</label>
    </div>
    <div class="mb-3 form-floating">
        <input class="form-control" type="text" name="nama_siswa" id="nama_siswa" placeholder="nama_siswa"
            value="{{ $val->nama_siswa ?? '' }}">
        <label class="form-label" for="nama_siswa">nama siswa</label>
    </div>
    <div class="mb-3 form-floating">
        <input class="form-control" type="text" name="password" id="password" placeholder="password">
        <label class="form-label" for="password">password</label>
    </div>
    <div class="form-floating mb-3">
        <input class="form-control" type="text" name="alamat" id="alamat" placeholder="alamat"
            value="{{ $val->alamat ?? '' }}">
        <label class="form-label" for="alamat">alamat</label>
    </div>
    <div class="form-floating mb-3">
        <input class="form-control" type="text" name="no_telp" id="no_telp" placeholder="no_telp"
            value="{{ $val->no_telp ?? '' }}">
        <label class="form-label" for="no_telp">no telp</label>
    </div>
    <div class="mb-3">
        <select name="kelas_id" class="form-select">
            <option value="">pilih kelas</option>
            @foreach ($kelas as $data)
                <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <select name="spp_id" class="form-select">
            <option value="">tahun spp</option>
            @foreach ($spp as $data)
                <option value="{{ $data->id }}">{{ $data->tahun }}</option>
            @endforeach
        </select>
    </div>
</div>
