@extends('dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-around">
                        <div class="col-6 col-lg-4">
                            <a href="/dashboard/identity">
                                <div class="card bg-primary mb-0 p-3">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-8">
                                            <span>Identitas Sekolah</span>
                                        </div>
                                        <div class="col text-right">
                                            <i class="fas fa-info-circle p-3" style="transform: scale(2)"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-4">
                            <a href="/dashboard/header">
                                <div class="card mb-0 p-3" style="background-color: #525E75; color: #fff">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-8">
                                            <span>Header</span>
                                        </div>
                                        <div class="col text-right">
                                            <i class="fas fa-pager p-3" style="transform: scale(2)"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-4">
                            <a href="/dashboard/welcome">
                                <div class="card mb-0 p-3" style="background-color: #3A6351; color: #fff">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-8">
                                            <span>Sambutan Kepsek</span>
                                        </div>
                                        <div class="col text-right">
                                            <i class="fas fa-star p-3" style="transform: scale(2)"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #E6BA95; color: #fff">
                <div class="inner">
                    <h3>{{ $kelas->count() }}</h3>
                    <p>Data Kelas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-door-open"></i>
                </div>
                <a href="/dashboard/master-data/kelas" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #D3E4CD; color: #fff">
                <div class="inner">
                    <h3>{{ $jurusan->count() }}</h3>
                    <p>Data Jurusan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <a href="/dashboard/master-data/jurusan" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #9D5353; color: #fff">
                <div class="inner">
                    <h3>{{ $category->count() }}</h3>
                    <p>Data Category</p>
                </div>
                <div class="icon">
                    <i class="fas fa-list"></i>
                </div>
                <a href="/dashboard/master-data/category" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #9AD0EC; color: #fff">
                <div class="inner">
                    <h3>{{ $post->count() }}</h3>
                    <p>Data Berita</p>
                </div>
                <div class="icon">
                    <i class="fas fa-file"></i>
                </div>
                <a href="/dashboard/master-data/posts" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #FF7878; color: #fff">
                <div class="inner">
                    <h3>{{ $ekstrakurikuler->count() }}</h3>
                    <p>Data Ekskul</p>
                </div>
                <div class="icon">
                    <i class="far fa-futbol"></i>
                </div>
                <a href="/dashboard/master-data/ekstrakurikuler" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #7F7C82; color: #fff">
                <div class="inner">
                    <h3>{{ $admin->count() }}</h3>
                    <p>Data Admin</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-cog"></i>
                </div>
                <a href="/dashboard/master-data/admin" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
