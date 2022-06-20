@extends('layouts.app')
@section('tittle')
    <title>Bab {{ $bab }}</title>
@endsection
@section('css')
    <style>
        video::-webkit-media-controls-overlay-play-button {
            -webkit-appearance: media-overlay-play-button;
            display: flex;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -40px;
            margin-top: -40px;
            border: none;
            box-sizing: border-box;
            background-color: transparent;
            width: 80px;
            height: 80px;
            padding: 0;
        }
    </style>
@endsection
@section('app-content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="page-description d-flex align-items-center">
                            <div class="page-description-content flex-grow-1 flex-lg-grow-2">
                                <button class="btn btn-primary" onclick="history.back()"><i
                                        class="material-icons">chevron_left</i>Kembali</button>
                            </div>
                            <div class="page-description-actions">
                                <h1>التمرين</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3>Untuk mengerjakan soal dibawah gunakan link
                        berikut
                        @if ($bab == 4)
                            <a
                                href="https://docs.google.com/forms/d/e/1FAIpQLScregu3NY4duq0d4fL0Rlz1IpDED9ObWUBMvBv0evetiOX9UQ/viewform?usp=sf_link">disini</a>
                        @endif
                    </h3>
                </div>
                @forelse ($data as $tamrin)
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Soal nomor {{ $tamrin->nomor_soal }}</h5>
                                </div>
                                <div class="card-body">
                                    @if ($tamrin->type == 6)
                                        <div class="widget-info-container">
                                            <img src="{{ env('APP_URL') }}/storage/tamrin/{{ $tamrin->berkas[1]['file_name'] }}"
                                                alt="" class="card-image-top w-25">
                                            <div class="widget-info-image"
                                                style="background: url({{ env('APP_URL') }}/storage/tamrin/{{ $tamrin->berkas[1]['file_name'] }})">
                                            </div>
                                            <audio controls>
                                                <source
                                                    src="{{ env('APP_URL') }}/storage/tamrin/{{ $tamrin->berkas[0]['file_name'] }}"
                                                    type="audio/mpeg">
                                            </audio>
                                            <p class="card-text">
                                                {!! $tamrin->soal_jawaban !!}
                                            </p>
                                        </div>
                                    @endif
                                    @if ($tamrin->type == 1)
                                        <div class="widget-info-container">
                                            <audio controls>
                                                <source
                                                    src="{{ env('APP_URL') }}/storage/tamrin/{{ $tamrin->berkas[0]['file_name'] }}"
                                                    type="audio/mpeg">
                                            </audio>
                                            <p class="card-text">
                                                {!! $tamrin->soal_jawaban !!}
                                            </p>
                                        </div>
                                    @endif
                                    @if ($tamrin->type == 8)
                                        <p class="card-text">
                                            {!! $tamrin->soal_jawaban !!}
                                        </p>
                                    @endif
                                    @if ($tamrin->type == 3)
                                        <p>{{ $tamrin->soal_jawaban }}</p>
                                        @foreach ($tamrin->berkas as $berkas)
                                            <div class="widget-info-container">
                                                <audio width="320" height="240" controls>
                                                    <source
                                                        src="{{ env('APP_URL') }}/storage/tamrin/{{ $berkas->file_name }}"
                                                        type="audio/mpeg">
                                                </audio>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1>Data kosong</h1>
                @endforelse

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function playSound(muhadasa) {
            document.getElementById(muhadasa).play();
        };
    </script>
@endsection
