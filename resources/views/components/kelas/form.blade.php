<div class="form">
    <div class="mb-3 form-floating">
        <input class="form-control" type="text" name="nama_kelas" id="nama_kelas" placeholder="nama_kelas"
            value="{{ $val->nama_kelas ?? '' }}">
        <label class="form-label" for="nama_kelas">nama kelas</label>
    </div>
    <div class="mb-3 form-floating">
        <input class="form-control" type="text" name="kompetensi_keahlian" id="kompetensi_keahlian"
            placeholder="kompetensi_keahlian" value="{{ $val->kompetensi_keahlian ?? '' }}">
        <label class="form-label" for="kompetensi_keahlian">kompetensi keahlian</label>
    </div>
</div>
