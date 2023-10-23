{{-- @dd($welcome->image) --}}
@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-header d-flex justify-content-center w-100" style="z-index: 999">
            {{ $title }}
            <a href="/dashboard/welcome/{{ $welcome->id }}/edit" class="badge mx-1 bg-warning p-2">
                <i class="fas fa-edit"></i>
            </a>
        </div>
        <div class="card-body">
            @include('partials.welcome')
        </div>
    </div>
@endsection
