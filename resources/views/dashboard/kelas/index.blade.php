@extends('dashboard.layouts.main')

@section('container')
    <div class="card-body">
        <p class="text-right">
            <a href="/dashboard/master-data/kelas/create" class="btn btn-outline-success text-center">
                <i class="fas fa-plus-circle"></i> Tambah Kelas
            </a>
        </p>

        <table id="datatab" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th class="scope">#</th>
                    <th class="scope">Kelas</th>
                    <th class="scope">Angka</th>
                    <th class="scope aksi">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $k)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $k->name }}</td>
                        <td>{{ $k->number }}</td>
                        <td>
                            <a href="/dashboard/master-data/kelas/{{ $k->id }}/edit" class="badge mx-1 bg-warning p-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="/dashboard/master-data/kelas/{{ $k->id }}" method="POST" class="d-inline">
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
