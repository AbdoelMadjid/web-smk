<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col my-5">
            <h1 class="fw-bold text-center text-black text-uppercase">Sambutan Kepala Sekolah</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <img src="{{ asset('storage/' . $welcome->image) }}" class="img-fluid rounded-circle p-5"
                alt="Kepsek {{ $identity->alias }}">
        </div>
        <div class="col-lg-7">
            <p>{{ $welcome->kepsek_name }}</p>
            <p class="fw-bold" style="margin-top: -1.5rem;">Kepala Sekolah {{ $identity->name }}</p>
            {!! $welcome->body !!}
        </div>
    </div>
</div>
