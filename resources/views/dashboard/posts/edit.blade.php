@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header">
            {{ $title }}
        </div>
        <div class="card-body">
            <form method="post" action="/dashboard/master-data/posts/{{ $post->slug }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" placeholder="Masukan Judul" autofocus required
                                value="{{ old('title', $post->title) }}">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                name="slug" readonly required value="{{ old('slug', $post->slug) }}">
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategeori</label>
                            <select class="form-control" id="kategori" name="category_id">
                                @foreach ($categories as $category)
                                    @if (old('category_id', $post->category_id) == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            $ekstrakurikuler
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="body" class="form-label">Isi Berita</label>
                            <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                            <trix-editor input="body"></trix-editor>
                            @error('body')
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

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/master-data/posts/checkSlug?title=' + title.value)
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
    </script>
@endsection
