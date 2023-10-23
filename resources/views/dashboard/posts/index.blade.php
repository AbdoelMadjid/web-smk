{{-- @dd($categories->first()) --}}
@extends('dashboard.layouts.main')

@section('container')
    <div class="card-body">
        <p class="text-right">
            <a href="/dashboard/master-data/posts/create" class="btn btn-outline-success text-center">
                <i class="fas fa-plus-circle"></i> Buat Berita
            </a>
        </p>
        <table id="datatab" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th class="scope">#</th>
                    <th class="scope">Judul</th>
                    <th class="scope">Kategori</th>
                    <th class="scope">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        @if ($categories->first())
                            <td>{{ $post->category->name }}</td>
                        @endif
                        <td>
                            <a href="/dashboard/master-data/posts/{{ $post->slug }}" class="badge mx-1 bg-info p-2">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="/dashboard/master-data/posts/{{ $post->slug }}/edit"
                                class="badge mx-1 bg-warning p-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="/dashboard/master-data/posts/{{ $post->slug }}" method="POST" class="d-inline">
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
