@extends('dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    {{ $title }}
                </div>
                <div class="card-body">
                    <form method="post" action="/dashboard/identity/{{ $identity->id }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Sekolah</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" placeholder="Masukan Nama Instansi" autofocus required
                                        value="{{ old('name', $identity->name) }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="alias" class="form-label">Alias</label>
                                    <input type="text" class="form-control @error('alias') is-invalid @enderror"
                                        id="alias" name="alias" placeholder="Masukan Judul" autofocus required
                                        value="{{ old('alias', $identity->alias) }}">
                                    @error('alias')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="quotes" class="form-label">Quotes</label>
                                    <input type="text" class="form-control @error('quotes') is-invalid @enderror"
                                        id="quotes" name="quotes" placeholder="Masukan Judul" autofocus required
                                        value="{{ old('quotes', $identity->quotes) }}">
                                    @error('quotes')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="brand" class="form-label">Brand</label>
                                    <input type="hidden" name="oldImage" value="{{ $identity->brand }}">
                                    @if ($identity->brand)
                                        <img src="{{ asset('storage/' . $identity->brand) }}"
                                            class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                    @else
                                        <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                    @endif
                                    <input class="form-control @error('brand') is-invalid @enderror" style="height: 2.7rem;"
                                        type="file" id="brand" name="brand" onchange="previewImage()">
                                    @error('brand')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Alamat Lengkap</label>
                                    <textarea class="form-control" rows="5" id="address" name="address">{{ old('address', $identity->address) }}</textarea>
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="maps" class="form-label">Maps</label>
                                    <textarea class="form-control" rows="5" id="maps" name="maps">{{ old('maps', $identity->maps) }}</textarea>
                                    @error('maps')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="Masukan Alamat Email" required
                                        value="{{ old('email', $identity->email) }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="nohp" class="form-label">Nomor HP</label>
                                    <input type="text" class="form-control @error('nohp') is-invalid @enderror"
                                        id="nohp" name="nohp" placeholder="Masukan Nomor HP" required
                                        value="{{ old('nohp', $identity->nohp) }}">
                                    @error('nohp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="telp" class="form-label">Telp</label>
                                    <input type="text" class="form-control @error('telp') is-invalid @enderror"
                                        id="telp" name="telp" placeholder="Masukan Telp" required
                                        value="{{ old('telp', $identity->telp) }}">
                                    @error('telp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" class="form-control @error('facebook') is-invalid @enderror"
                                        id="facebook" name="facebook" placeholder="Masukan URL Facebook" required
                                        value="{{ old('facebook', $identity->facebook) }}">
                                    @error('facebook')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" class="form-control @error('instagram') is-invalid @enderror"
                                        id="instagram" name="instagram" placeholder="Masukan URL Instagram" required
                                        value="{{ old('instagram', $identity->instagram) }}">
                                    @error('instagram')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="twitter" class="form-label">Twitter</label>
                                    <input type="text" class="form-control @error('twitter') is-invalid @enderror"
                                        id="twitter" name="twitter" placeholder="Masukan URL Twitter" required
                                        value="{{ old('twitter', $identity->twitter) }}">
                                    @error('twitter')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="youtube" class="form-label">Youtube</label>
                                    <input type="text" class="form-control @error('youtube') is-invalid @enderror"
                                        id="youtube" name="youtube" placeholder="Masukan URL Youtube" required
                                        value="{{ old('youtube', $identity->youtube) }}">
                                    @error('youtube')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
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
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header font-weight-bold">
                    Wajib Diperhatikan!
                </div>
                <div class="card-body">
                    <h5>Cara mendapatkan source maps</h5>
                    <ul>
                        <li>Buka Google Maps</li>
                        <img class="img-fluid" src="/img/tutor-maps/buka-maps.png" alt="">
                        <li class="mt-3">Cari Alamat Sekolah</li>
                        <img class="img-fluid" src="/img/tutor-maps/cari-lokasi.png" alt="">
                        <li class="mt-3">Pilih Bagikan</li>
                        <img class="img-fluid" src="/img/tutor-maps/pilih-bagikan.png" alt="">
                        <li class="mt-3">Pilih Sematkan Peta</li>
                        <img class="img-fluid" src="/img/tutor-maps/pilih-sematkan.png" alt="">
                        <li class="mt-3">Copy bagian dalam dari src=""</li>
                        <img class="img-fluid" src="/img/tutor-maps/pilih-src.png" alt="">
                    </ul>
                    @php
                        $maps = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.876582326226!2d108.16892341434614!3d-6.784870468238692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f290a172857b7%3A0x9b75b5e0e32203c8!2sSMKN%201%20Kadipaten!5e0!3m2!1sid!2sid!4v1668695207058!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
                    @endphp
                    <h5>Contoh:</h5>
                    <ul>
                        <li>dari:</li>
                        <textarea rows="18" type="text" readonly disabled class="form-control">{{ $maps }}</textarea>
                        <li>Menjadi:</li>
                        <textarea rows="11" type="text" readonly disabled class="form-control">{{ $identity->maps }}</textarea>
                    </ul>
                </div>
            </div>
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
            const brand = document.querySelector('#brand');
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(brand.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        Trix.config.blockAttributes.default.tagName = "p";
    </script>
@endsection
