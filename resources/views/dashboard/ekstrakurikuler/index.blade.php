@extends('dashboard.layouts.main')

@section('container')
    <div class="card-body">
        <p class="text-right">
            <a href="/dashboard/master-data/ekstrakurikuler/create" class="btn btn-outline-success text-center">
                <i class="fas fa-plus-circle"></i> Tambah Ekstrakurikuler
            </a>
        </p>
        <table id="datatab" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th class="scope">#</th>
                    <th class="scope">Image</th>
                    <th class="scope">Ekstrakurikuler</th>
                    <th class="scope">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ekstrakurikulers as $ekstrakurikuler)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $ekstrakurikuler->image) }}" class="img-fluid m-auto"
                                alt="{{ $ekstrakurikuler->name }}" width="200rem">
                        </td>
                        <td>{{ $ekstrakurikuler->name }}</td>
                        <td>
                            <a href="/dashboard/master-data/ekstrakurikuler/{{ $ekstrakurikuler->id }}"
                                class="badge mx-1 bg-info p-2">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="/dashboard/master-data/ekstrakurikuler/{{ $ekstrakurikuler->id }}/edit"
                                class="badge mx-1 bg-warning p-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="/dashboard/master-data/ekstrakurikuler/{{ $ekstrakurikuler->id }}" method="POST"
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
