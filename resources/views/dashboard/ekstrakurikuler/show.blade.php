@extends('dashboard.layouts.main')

@section('container')
    <span></span>
    <div class="container py-5">
        <div class="d-flex mb-3 justify-content-start">
            <a href="/dashboard/master-data/ekstrakurikuler/{{ $ekstrakurikuler->id }}/edit"
                class="badge mx-1 bg-warning p-2">
                Ubah <i class="fas fa-edit"></i>
            </a>

            <form action="/dashboard/master-data/ekstrakurikuler/{{ $ekstrakurikuler->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge mx-1 badge-danger p-2 border-0" onclick="return confirm('Anda takin?')">
                    Hapus <i class="fas fa-trash"></i>
                </button>
            </form>

        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center fs-3"><strong>{{ $ekstrakurikuler->name }}</strong></h5>
            </div>
            <div class="card-body">

                <div class="mb-3 row justify-content-center">
                    <img src="{{ asset('storage/' . $ekstrakurikuler->image) }}" class="img-fluid img-thumbnail w-50"
                        alt="{{ $ekstrakurikuler->image }}">
                </div>

                <span class="card-text fs-4">
                    {!! $ekstrakurikuler->body !!}
                </span>
            </div>
            <a href="/dashboard/master-data/ekstrakurikuler" class="text-decoration-none mb-3 fs-4 text-center">
                <span class="fas fa-chevron-left my-3"></span> Kembali ke halaman Ekstrakurikuler
            </a>
            <div class="card-footer text-muted">
                <div class="row justify-content-center text-center">
                    <div class="col-3 fs-5">
                        <i class="fas fa-calendar"></i> {{ $ekstrakurikuler->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
