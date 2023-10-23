@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            Tambah Berita
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/about" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="nama_instansi" class="form-label">Nama Instansi</label>
                            <input type="text" class="form-control @error('nama_instansi') is-invalid @enderror"
                                id="nama_instansi" name="nama_instansi" placeholder="Masukan Nama Instansi" autofocus
                                required value="{{ old('nama_instansi') }}">
                            @error('nama_instansi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" placeholder="Masukan Judul" autofocus required value="{{ old('title') }}">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input class="form-control" style="height: 2.7rem;" type="file" id="image" name="image"
                                onchange="previewImage()">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="descript" class="form-label">Deskipsi</label>
                            <input id="descript" type="hidden" name="descript" value="{{ old('descript') }}">
                            <trix-editor input="descript"></trix-editor>
                            @error('descript')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="sejarah" class="form-label">Sejarah</label>
                            <input id="sejarah" type="hidden" name="sejarah" value="{{ old('sejarah') }}">
                            <trix-editor input="sejarah"></trix-editor>
                            @error('sejarah')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="text" class="form-control @error('facebook') is-invalid @enderror"
                                id="facebook" name="facebook" placeholder="Masukan URL Facebook" required
                                value="{{ old('facebook') }}">
                            @error('facebook')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" class="form-control @error('instagram') is-invalid @enderror"
                                id="instagram" name="instagram" placeholder="Masukan URL Instagram" required
                                value="{{ old('instagram') }}">
                            @error('instagram')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter"
                                name="twitter" placeholder="Masukan URL Twitter" required value="{{ old('twitter') }}">
                            @error('twitter')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="youtube" class="form-label">Youtube</label>
                            <input type="text" class="form-control @error('youtube') is-invalid @enderror" id="youtube"
                                name="youtube" placeholder="Masukan URL Youtube" required value="{{ old('youtube') }}">
                            @error('youtube')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="no_telp1" class="form-label">Nomor HP</label>
                            <input type="text" class="form-control @error('no_telp1') is-invalid @enderror"
                                id="no_telp1" name="no_telp1" placeholder="Masukan Nomor HP" required
                                value="{{ old('no_telp1') }}">
                            @error('no_telp1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="no_telp2" class="form-label">Nomor HP</label>
                            <input type="text" class="form-control @error('no_telp2') is-invalid @enderror"
                                id="no_telp2" name="no_telp2" placeholder="Masukan Nomot HP" required
                                value="{{ old('no_telp2') }}">
                            @error('no_telp2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="gmail" class="form-label">Gmail</label>
                            <input type="email" class="form-control @error('gmail') is-invalid @enderror"
                                id="gmail" name="gmail" placeholder="Masukan Alamat Gmail" required
                                value="{{ old('gmail') }}">
                            @error('gmail')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                id="alamat" name="alamat" placeholder="Masukan ALamat" required
                                value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="jml_dokter" class="form-label">Jumlah Dokter</label>
                            <input type="number" min="1"
                                class="form-control @error('jml_dokter') is-invalid @enderror" id="jml_dokter"
                                name="jml_dokter" placeholder="Masukan Jumlah Dokter" required
                                value="{{ old('jml_dokter') }}">
                            @error('jml_dokter')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="jml_pasien_puas" class="form-label">Jumlah Pasien Puas</label>
                            <input type="number" min="1"
                                class="form-control @error('jml_pasien_puas') is-invalid @enderror" id="jml_pasien_puas"
                                name="jml_pasien_puas" placeholder="Masukan Jumlah Pasien Puas" required
                                value="{{ old('jml_pasien_puas') }}">
                            @error('jml_pasien_puas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="jml_fasilitas_kamar" class="form-label">Jumlah Fasilitas Kamar</label>
                            <input type="number" min="1"
                                class="form-control @error('jml_fasilitas_kamar') is-invalid @enderror"
                                id="jml_fasilitas_kamar" name="jml_fasilitas_kamar"
                                placeholder="Masukan Jumlah Fasilitas Kamar" required
                                value="{{ old('jml_fasilitas_kamar') }}">
                            @error('jml_fasilitas_kamar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success px-5">
                                <i class="fas fa-plus-circle"></i> Buat
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        Trix.config.blockAttributes.default.tagName = "p";
    </script>
@endsection
