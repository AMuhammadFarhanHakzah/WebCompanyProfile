@extends('layouts.template')
@section('judul')
    Dashboard
@endsection

@section('extracss')
    <style>
        .image-icon {
            height: 90px;
            width: 90px;
            object-fit: cover;
        }
    </style>
@endsection

@section('main')
    <section class="inner-page mt-4" style="height: 60vh;">
        <div class="container">
            <div class="row">
                <div class="col col-md-4 text-center">
                    <a href="#">
                        <img src="{{ asset('images/icon/berita.png') }}" alt="" class="image-icon">
                        <p>Kelola Berita</p>
                    </a>
                </div>
                <div class="col col-md-4 text-center">
                    <a href="{{route('pengumuman.index')}}">
                        <img src="{{ asset('images/icon/pengumuman.png') }}" alt="" class="image-icon">
                        <p>Kelola Pengumuman</p>
                    </a>
                </div>
                <div class="col col-md-4 text-center">
                    <a href="#">
                        <img src="{{ asset('images/icon/user.png') }}" alt="" class="image-icon">
                        <p>Kelola User</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
