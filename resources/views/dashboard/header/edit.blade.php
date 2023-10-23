{{-- @dd($header->main_image) --}}
@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            {{ $title }}
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/header/{{ $header->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="image_1" class="form-label">Image 1</label>
                        <input type="hidden" name="oldImage_1" value="{{ $header->image_1 }}">
                        @if ($header->image_1)
                            <img src="{{ asset('storage/' . $header->image_1) }}"
                                class="img-preview img-fluid mb-3 col-sm-5 d-block" alt="{{ $identity->image_1 }}">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5 d-block" alt="{{ $identity->image_1 }}">
                        @endif
                        <input class="form-control @error('image_1') is-invalid @enderror" style="height: 2.7rem;"
                            type="file" id="image_1" name="image_1" onchange="previewImage1()">
                        @error('image_1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="image_2" class="form-label">Image 2</label>
                        <input type="hidden" name="oldImage_2" value="{{ $header->image_2 }}">
                        @if ($header->image_2)
                            <img src="{{ asset('storage/' . $header->image_2) }}"
                                class="img-preview2 img-fluid mb-3 col-sm-5 d-block" alt="{{ $identity->image_2 }}">
                        @else
                            <img class="img-preview2 img-fluid mb-3 col-sm-5 d-block" alt="{{ $identity->image_2 }}">
                        @endif
                        <input class="form-control @error('image_2') is-invalid @enderror" style="height: 2.7rem;"
                            type="file" id="image_2" name="image_2" onchange="previewImage2()">
                        @error('image_2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="image_3" class="form-label">Image 3</label>
                        <input type="hidden" name="oldImage_3" value="{{ $header->image_3 }}">
                        @if ($header->image_3)
                            <img src="{{ asset('storage/' . $header->image_3) }}"
                                class="img-preview3 img-fluid mb-3 col-sm-5 d-block" alt="{{ $identity->image_3 }}">
                        @else
                            <img class="img-preview3 img-fluid mb-3 col-sm-5 d-block" alt="{{ $identity->image_3 }}">
                        @endif
                        <input class="form-control @error('image_3') is-invalid @enderror" style="height: 2.7rem;"
                            type="file" id="image_3" name="image_3" onchange="previewImage3()">
                        @error('image_3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="image_4" class="form-label">Image 4</label>
                        <input type="hidden" name="oldImage_4" value="{{ $header->image_4 }}">
                        @if ($header->image_4)
                            <img src="{{ asset('storage/' . $header->image_4) }}"
                                class="img-preview4 img-fluid mb-3 col-sm-5 d-block" alt="{{ $identity->image_4 }}">
                        @else
                            <img class="img-preview4 img-fluid mb-3 col-sm-5 d-block" alt="{{ $identity->image_4 }}">
                        @endif
                        <input class="form-control @error('image_4') is-invalid @enderror" style="height: 2.7rem;"
                            type="file" id="image_4" name="image_4" onchange="previewImage4()">
                        @error('image_4')
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
            </form>
        </div>
    </div>
    </div>

    <script>
        function previewImage1() {
            const image = document.querySelector('#image_1');
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewImage2() {
            const image = document.querySelector('#image_2');
            const imgPreview = document.querySelector('.img-preview2')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewImage3() {
            const image = document.querySelector('#image_3');
            const imgPreview = document.querySelector('.img-preview3')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewImage4() {
            const image = document.querySelector('#image_4');
            const imgPreview = document.querySelector('.img-preview4')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        // Trix.config.blockAttributes.default.tagName = "p";
        // Trix.config.blockAttributes.default.breakOnReturn = 'true';
    </script>
@endsection
