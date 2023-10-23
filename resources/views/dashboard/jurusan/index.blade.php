@extends('dashboard.layouts.main')

@section('container')
    <div class="card-body">
        <p class="text-right">
            <a href="/dashboard/master-data/jurusan/create" class="btn btn-outline-success text-center">
                <i class="fas fa-plus-circle"></i> Tambah Jurusan
            </a>
        </p>
        <table id="datatab" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th class="scope">#</th>
                    <th class="scope">Jurusan</th>
                    <th class="scope">Alias</th>
                    <th class="scope">Deskripsi</th>
                    <th class="scope">Warna</th>
                    <th class="scope">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jurusans as $jurusan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $jurusan->name }}</td>
                        <td>{{ $jurusan->alias }}</td>
                        <td>{!! $jurusan->descript !!}</td>
                        <td>
                            <div style="width: 60px; height: 30px; margin: auto; background-color: {{ $jurusan->color }}">
                            </div>
                        </td>
                        <td>
                            <a href="/dashboard/master-data/jurusan/{{ $jurusan->id }}/edit"
                                class="badge mx-1 bg-warning p-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="/dashboard/master-data/jurusan/{{ $jurusan->id }}" method="POST"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge mx-1 badge-danger p-2 border-0"
                                    onclick="return confirm('Anda takin?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
