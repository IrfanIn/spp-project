@if ($user->count() < 1)
    <p class="bg-white p-4 text-secondary text-center">Tidak ada data</p>
@else
    <div class="card">
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr class="text-center">
                        <th>no</th>
                        <th>username</th>
                        <th>level</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $data)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->username }}</td>
                            <td>{{ $data->level }}</td>
                            <td class="d-flex gap-2 justify-content-center">
                                <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"
                                    data-bs-target="#{{ $data->id }}">edit</button>
                                <form action="{{ route('user.destroy', $data->id) }}" method="post">
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
