<div class="form">
    <div class="mb-3 form-floating">
        <input class="form-control" type="text" name="tahun" id="tahun" placeholder="tahun"
            value="{{ $val->tahun ?? '' }}">
        <label class="form-label" for="tahun">tahun</label>
    </div>
    <div class="mb-3 form-floating">
        <input class="form-control" type="text" name="nominal" id="nominal" placeholder="nominal"
            value="{{ $val->nominal ?? '' }}">
        <label class="form-label" for="nominal">nominal</label>
    </div>
</div>
