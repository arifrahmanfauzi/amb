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
                @forelse ($data as $tadrib)
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Soal nomor {{ $tadrib->nomor_soal }}</h5>
                                </div>
                                <div class="card-body">
                                    <div class="example-container">
                                        <div class="example-content bg-light">
                                            <div class="alert alert-custom" role="alert">
                                                @if ($tadrib->berkas[0]['type'] == 1)
                                                    @if ($tadrib->nomor_soal == 5)
                                                        <h1>Untuk mengerjakan soal nomor 5 - 6 dan 7 - 8 gunakan link
                                                            berikut <a
                                                                href="https://docs.google.com/forms/d/11w-bH6H1u4ZrmTBdYTqqICTBS_IHUQPhP7Gc8ocxFhY/edit?usp=sharing">disini</a>
                                                        </h1>

                                                        @foreach ($tadrib->berkas as $berkas)
                                                            <div>
                                                                <div class="custom-alert-icon icon-primary"><img
                                                                        src="{{ env('APP_URL') }}/assets/images/other/man.png"
                                                                        alt="" srcset=""></div>
                                                                <div class="alert-content d-flex">
                                                                    <div class="col-xl-5">
                                                                        <audio controls>
                                                                            <source
                                                                                src="{{ env('APP_URL') }}/storage/tamrin/{{ $berkas->file_name }}"
                                                                                type="audio/mpeg">
                                                                        </audio>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="alert" role="alert">
                                                                <div class="custom-alert-icon icon-success"
                                                                    style="float:right;"><img
                                                                        src="{{ url('/') }}/assets/images/other/muslimah.png"
                                                                        alt="" srcset=""></div>
                                                                <div class="alert-content d-flex flex-row-reverse">
                                                                    <div class="col-xl-5">
                                                                        <audio controls>
                                                                            <source src="" type="audio/mpeg">
                                                                        </audio>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        @foreach ($tadrib->berkas as $berkas)
                                                            <div class="custom-alert-icon icon-primary"><img
                                                                    src="{{ env('APP_URL') }}/assets/images/other/man.png"
                                                                    alt="" srcset="">
                                                            </div>
                                                            <div class="alert-content d-flex">
                                                                <div class="col-xl-5">
                                                                    <audio controls>
                                                                        <source
                                                                            src="{{ env('APP_URL') }}/storage/tamrin/{{ $berkas->file_name }}"
                                                                            type="audio/mpeg">
                                                                    </audio>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                @elseif ($tadrib->berkas[0]['type'] == 2)
                                                    <div class="card widget widget-info">
                                                        <div class="card-body">
                                                            <div class="widget-info-container">
                                                                <div class="widget-info-image"
                                                                    style="background: url({{ env('APP_URL') }}/storage/tamrin/{{ $tadrib->berkas[0]['file_name'] }})">
                                                                </div>
                                                                <audio controls>
                                                                    <source
                                                                        src="{{ env('APP_URL') }}/storage/tamrin/{{ $tadrib->berkas[1]['file_name'] }}"
                                                                        type="audio/mpeg">
                                                                </audio>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @elseif ($tadrib->nomor_soal == 6)
                                                    <p>Bacalah cerita dibawah ini dan rekamlah bacaan anda!</p>
                                                    {!! $tadrib->berkas[0]['file_name'] !!}

                                                @elseif ($tadrib->nomor_soal == 7)
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-6">
                                                        <div class="card widget widget-info">

                                                                <div class="card-body">
                                                                    <h5>Dengar dan tulislah kalimat yang anda dengar dengan benar!</h5>
                                                                    <div class="widget-info-container">
                                                                        <div
                                                                            class="example-content bg-white overflow-hidden">

                                                                            <audio width="320" height="240" controls>
                                                                                <source
                                                                                    src="{{ url('/') }}/storage/tamrin/{{ $tadrib->berkas[0]['file_name'] }}"
                                                                                    type="audio/mpeg">
                                                                            </audio>
                                                                        </div>
                                                                        <br>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else

                                                @endif
                                            </div>

                                            <div class="list-group" style="">
                                                @foreach ($tadrib->jawaban as $jawaban)
                                                    <li class="list-group-item">
                                                        <h1 class="float-end">
                                                            @switch($loop->iteration)
                                                                @case(1)
                                                                    أ
                                                                @break

                                                                @case(2)
                                                                    ب
                                                                @break

                                                                @case(3)
                                                                    ج
                                                                @break

                                                                @case(4)
                                                                    د
                                                                @break

                                                                @default
                                                                    none
                                                            @endswitch
                                                            {{ $jawaban->jawaban }}

                                                        </h1>
                                                    </li>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
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
