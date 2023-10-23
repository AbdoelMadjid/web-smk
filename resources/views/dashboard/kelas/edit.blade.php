@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            {{ $title }}
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/master-data/kelas/{{ $kelas->id }}">
                @method('put')
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="name" class="form-label">Kelas (Romawi)</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Masukan Kelas" autofocus required
                                value="{{ old('name', $kelas->name) }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="number" class="form-label">Kelas (Angka)</label>
                            <input type="number" class="form-control @error('number') is-invalid @enderror" id="number"
                                name="number" placeholder="Masukan Judul" autofocus required
                                value="{{ old('number', $kelas->number) }}">
                            @error('number')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success px-5">
                                <i class="fas fa-edit"></i> Ubah
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
