@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header d-flex justify-content-center w-100" style="z-index: 999">
            Header
            <a href="/dashboard/header/{{ $header->id }}/edit" class="badge mx-1 bg-warning p-2">
                <i class="fas fa-edit"></i>
            </a>
        </div>
        <div class="card-body align-items-center">
            <div class="row justify-content-center align-items-center" style="transform: scale(.7)">
                <div style="margin-top: -18rem;">
                    @include('partials.header')
                </div>
            </div>
        </div>
    </div>
@endsection
