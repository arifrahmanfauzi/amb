@extends('layouts.app')
@section('tittle')
        <title>Bab {{ $bab }}</title>
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
                            <h1>الكتابة</h1>
                        </div>
                    </div>
                </div>
            </div>
            @forelse ($data as $kitabah)
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dengar dan tulislah dengan baik dan benar kalimat yang anda dengar! </h4>
                            <br>
                            <p>Silahkan mengumpulkan jawaban anda pada link berikut : <a href="{{ $kitabah->link }}">klik disini</a></p>
                        </div>
                        <div class="card-body">
                            <div class="example-container">
                                <div class="example-content bg-light">
                                    @foreach ($kitabah->berkas as $berkas)
                                    <div class="alert alert-custom" role="alert">

                                        <div class="custom-alert-icon icon-primary"><img
                                            src="{{ url('/') }}/assets/images/other/man.png" alt="" srcset=""></div>
                                            <div class="alert-content d-flex">
                                                <div class="col-xl-5">
                                                    <audio controls>
                                                        <source src="{{ url('/') }}/storage/kitabah/{{ $berkas->file_name }}"
                                                            type="audio/mpeg">
                                                    </audio>
                                                </div>
                                            </div>

                                    </div>
                                    @endforeach
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
