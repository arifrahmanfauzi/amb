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
                                <h1>التمرين</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="alert alert-custom" role="alert">
                        <div class="alert-content">
                            <div class="example">
                                <p>Dengarkan dan jawablah pertanyaan di bawah ini dengan benar!
                                    Silahkan mengumpulkan jawaban anda pada link berikut : </p>
                                <a href="https://docs.google.com/forms/d/1gpw1VyGbUrWyksLYZR_UXHhHo03CZi8NqKjz_5uLRMw/edit?usp=sharing"
                                    target="_blank">Klik Disini</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-xl-4 align-center">
                        <div class="card file-manager-group">
                            <div class="card-body d-flex align-items-center">
                                @if ($bab == 4)
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6">
                                            <div class="card widget widget-info">
                                                <div class="card-body">
                                                    <div class="widget-info-container">
                                                        <a href="javascript:playSound(0)">
                                                            <img src="{{ url('/') }}/storage/istimaTamrin/16551947961.contoh.jpg"
                                                                alt="" class="rounded" width="300"
                                                                height="300">
                                                        </a>
                                                        <audio controls id="0" style="display: none">
                                                            <source
                                                                src="{{ url('/') }}/storage/istimaTamrin/contoh-4.mp3"
                                                                type="audio/mp3">
                                                        </audio>
                                                        <br>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($bab == 5)
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6">
                                            <div class="card widget widget-info">
                                                <div class="card-body">
                                                    <div class="widget-info-container">
                                                        <a href="javascript:playSound(0)">
                                                            <img src="{{ url('/') }}/storage/istimaTamrin/contoh-5.png"
                                                                alt="" class="rounded" width="300"
                                                                height="300">
                                                        </a>
                                                        <audio controls id="0" style="display: none">
                                                            <source
                                                                src="{{ url('/') }}/storage/istimaTamrin/contoh-5.mpeg"
                                                                type="audio/mpeg">
                                                        </audio>
                                                        <br>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @forelse ($data as $tamrin)
                        @if ($tamrin->pertanyaan)
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">{!! $tamrin->pertanyaan !!}</p>
                                </div>
                            </div>
                        @endif
                        <div class="col-xl-4">
                            <div class="card file-manager-group">
                                <div class="card-body d-flex align-items-center">
                                    @foreach ($tamrin->berkas as $berkas)
                                        @if ($berkas->type == 1)
                                            <audio controls id="{{ $tamrin->id }}" style="display: none">
                                                <source
                                                    src="{{ url('/') }}/storage/istimaTamrin/{{ $berkas->file_name }}"
                                                    type="audio/mp3">
                                            </audio>
                                        @endif
                                        @if ($berkas->type == 2)
                                            <a href="javascript:playSound({{ $tamrin->id }})">
                                                <img src="{{ url('/') }}/storage/istimaTamrin/{{ $berkas->file_name }}"
                                                    alt="" class="rounded" width="300" height="300">
                                            </a>
                                        @endif
                                    @endforeach


                                    {{-- <div class="card-body d-flex align-items-center">
                                        <a href="javascript:playSound({{ $tamrin->id }})">
                                            <img src="{{ url('/') }}/storage/istimaTamrin/{{ $tamrin->berkas[1]->file_name }}"
                                                alt="" class="rounded" width="300" height="300">
                                        </a>
                                    </div>
                                    <audio controls id="{{ $tamrin->id }}" style="display: none">
                                        <source
                                            src="{{ url('/') }}/storage/istimaTamrin/{{ $tamrin->berkas[0]->file_name }}"
                                            type="audio/mp3">
                                    </audio> --}}
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1>Data is empty</h1>
                    @endforelse

                </div>
                <div class="row">
                    @if ($bab == 4)
                        <audio controls id="mufrot">
                            <source src="{{ url('/') }}/storage/istimaTamrin/istima-tamrin-4.mp3" type="audio/mp3">
                        </audio>
                    @endif
                    @if ($bab == 5)
                        <audio controls id="mufrot">
                            <source src="{{ url('/') }}/storage/istimaTamrin/istima-tamrin-5.mp3" type="audio/mp3">
                        </audio>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function playSound(mufrot) {
            document.getElementById(mufrot).play();
        };
    </script>
@endsection
