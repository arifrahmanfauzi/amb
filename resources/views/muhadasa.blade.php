@extends('layouts.app')
@section('tittle')
        <title>Bab {{ $id }}</title>
@endsection
@section('app-content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description d-flex align-items-center">
                        <div class="page-description-content flex-grow-1">
                            <button class="btn btn-primary" onclick="history.back()"><i
                                    class="material-icons">chevron_left</i>Kembali</button>
                        </div>
                        <div class="page-description-actions">
                            <h1>مُحَادَثَة</h1>
                        </div>
                    </div>
                </div>
            </div>
            @forelse ($data as $muhadasa)
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Percakapan nomor {{ $muhadasa->soal }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="example-container">
                                <div class="example-content bg-light">
                                    @foreach ($muhadasa->berkas as $berkas)
                                    <div class="alert alert-custom" role="alert">
                                        @if ($loop->last) {{-- genap --}}
                                        <div class="custom-alert-icon icon-success" style="float:right;"><img
                                                src="{{ url('/') }}/assets/images/other/muslimah.png" alt="" srcset=""></div>
                                                <div class="alert-content d-flex flex-row-reverse">
                                                    <div class="col-xl-5">
                                                        <audio controls>
                                                            <source src="{{ url('/') }}/storage/muhadasa/{{ $berkas->file_name }}"
                                                                type="audio/mpeg">
                                                        </audio>
                                                    </div>
                                                </div>
                                        @else
                                        <div class="custom-alert-icon icon-primary"><img
                                            src="{{ url('/') }}/assets/images/other/man.png" alt="" srcset=""></div>
                                            <div class="alert-content d-flex">
                                                <div class="col-xl-5">
                                                    <audio controls>
                                                        <source src="{{ url('/') }}/storage/muhadasa/{{ $berkas->file_name }}"
                                                            type="audio/mpeg">
                                                    </audio>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    @endforeach
                                    {{-- <div class="alert alert-custom" role="alert">
                                        <div class="custom-alert-icon icon-success" style="float:right;">
                                            <img src="assets/images/other/muslimah.png" alt="" srcset="">
                                        </div>
                                        <div class="alert-content d-flex flex-row-reverse">
                                            <div class="col-xl-5">
                                                <audio controls>
                                                    <source src="{{ url('/') }}/storage/muhadasa/{{ $muhadasa->berkas[1]->file_name }}"
                                                        type="audio/mpeg">
                                                </audio>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <h1>Data empty</h1>
            @endforelse

        </div>
    </div>
</div>
@endsection
