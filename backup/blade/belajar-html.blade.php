<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="my-4">Data Siswa</h3>
        @if (session()->has('update'))
            <div class="alret alert-success col-lg-8" role="alert">
                {{ session('update') }}
            </div>
        @endif
        @if (session()->has('delete'))
            <div class="alret alert-success col-lg-8" role="alert">
            </div>
        @endif
        @if (session()->has('success'))
            <div class="alret alert-success col-lg-8" role="alert">
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">Pelajaran Html</th>
                    <th scope="col">email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->nama_siswa }}</td>
                        <td>{{ $data->email }}</td>
                        <td class="d-flex gap-2">
                            <a href="/data/{{ $data->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="/data/{{ $data->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" onclick="return confirm('hapus data?')"
                                    class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/data/create" class="btn btn-primary">Tambah Data</a>
    </div>
</body>

</html>
