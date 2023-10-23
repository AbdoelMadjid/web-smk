@extends('layouts.main')

@section('container')
    @include('partials.header')

    <section class="main">
        @include('partials.welcome')
    </section>

    <section class="jurusan">
        <div class="row justify-content-center">
            <div class="col my-5">
                <h1 class="fw-bold text-center text-black text-uppercase">Program Keahlian</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($jurusan as $j)
                <div class="col-lg-4">
                    <div class="card d-flex align-items-center">
                        <div class="card-body text-center">
                            <p style="font-size: 11pt" class="fw-bold text-black">{{ $j->name }}</p>
                            <p style="font-size: 11pt" class="">{{ $j->descript }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="maps">
        <div class="row justify-content-center">
            <div class="col my-5">
                <h1 class="fw-bold text-center text-black text-uppercase">Temukan Kami</h1>
            </div>
        </div>
        <div class="card w-100" style="height: 40rem">
            <iframe class="w-100" style="height: 50rem" src="{!! $identity->maps !!}" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </section>
@endsection
