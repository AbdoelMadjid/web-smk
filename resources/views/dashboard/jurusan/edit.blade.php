@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            {{ $title }}
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/master-data/jurusan/{{ $jurusan->id }}">
                @method('put')
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="name" class="form-label">Jurusan</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Masukan Jurusan" autofocus required
                                value="{{ old('name', $jurusan->name) }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="alias" class="form-label">Alias</label>
                            <input type="text" class="form-control @error('alias') is-invalid @enderror" id="alias"
                                name="alias" placeholder="Masukan Alias" autofocus required
                                value="{{ old('alias', $jurusan->alias) }}">
                            @error('alias')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="descript" class="form-label">Deskipsi</label>
                            <input id="descript" type="hidden" name="descript"
                                value="{{ old('descript', $jurusan->descript) }}">
                            <trix-editor input="descript"></trix-editor>
                            @error('descript')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="color" class="form-label">Pilih Warna</label>
                            <input type="color" name="color" class="form-control form-control-color" id="color"
                                value="{{ $jurusan->color }}" title="Pilih Warna Jurusan">
                            @error('color')
                                <p class="text-danger">{{ $message }}</p>
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
