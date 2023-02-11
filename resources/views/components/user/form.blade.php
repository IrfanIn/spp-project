<div class="form">
    <div class="mb-3 form-floating">
        <input class="form-control" type="text" name="username" id="username" placeholder="username"
            value="{{ $val->username ?? '' }}">
        <label class="form-label" for="username">username</label>
    </div>
    <div class="mb-3 form-floating">
        <input class="form-control" type="text" name="password" id="password" placeholder="password"
            value="{{ $val->password ?? '' }}">
        <label class="form-label" for="password">password</label>
    </div>
    <div class="mb-3">
        <select name="level" id="" class="form-select">
            <option value="petugas">petugas</option>
            <option value="admin">admin</option>
        </select>
    </div>
</div>
