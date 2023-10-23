@extends('dashboard.layouts.main')

@section('container')
    <style>
        .jumbotron-title {
            font-size: 2rem;
            color: #444;
            line-height: 1.8;
            text-shadow: .1rem .1rem 0 rgba(0, 0, 0, .2);
        }
    </style>
    <div class="card">
        <div class="card-header d-flex  justify-content-center w-100">
            Identitas

            <a href="/dashboard/identity/{{ $identity->id }}/edit" class="badge mx-1 bg-warning p-2">
                <i class="fas fa-edit"></i>
            </a>

        </div>
        <div class="card-body align-items-center">
            <div class="row mb-5">
                <div class="col text-center">
                    <img src="{{ asset('storage/' . $identity->brand) }}" style="width: 5rem;">
                    <h3 class="font-weight-bold">{{ $identity->name }}</h3>
                    <p>({{ $identity->alias }})</p>
                    <p class="text-black-50">{{ $identity->quotes }}</p>
                </div>
            </div>
            <h5 class="text-center text-uppercase"><strong>Lainnya</strong></h5>
            <div class="row my-5">
                <div class="col-lg-6">
                    <ul>
                        <div class="mb-3">
                            <li><strong>URL Facebook:</strong> {{ $identity->facebook }}</li>
                        </div>
                        <div class="mb-3">
                            <li><strong>URL Instagram:</strong> {{ $identity->instagram }}</li>
                        </div>
                        <div class="mb-3">
                            <li><strong>URL Twitter:</strong> {{ $identity->twitter }}</li>
                        </div>
                        <div class="mb-3">
                            <li><strong>URL Youtube:</strong> {{ $identity->youtube }}</li>
                        </div>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <div class="mb-3">
                            <li><strong>No Handphone:</strong> {{ $identity->nohp }}</li>
                        </div>
                        <div class="mb-3">
                            <li><strong>No Telepon:</strong> {{ $identity->telp }}</li>
                        </div>
                        <div class="mb-3">
                            <li><strong>Email:</strong> {{ $identity->email }}</li>
                        </div>
                        <div class="mb-3">
                            <li><strong>Alamat:</strong> {{ $identity->address }}</li>
                        </div>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h5 class="text-center fw-bold text-uppercase"><strong>Maps</strong></h5>
                    <div class="card">
                        <iframe class="w-100" style="height: 30rem" src="{!! $identity->maps !!}" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
