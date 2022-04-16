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
                            <h1>التَّدْرِيبْ</h1>
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
                                        <div class="custom-alert-icon icon-primary"><img
                                                src="{{ url('/') }}/assets/images/other/man.png" alt="" srcset=""></div>
                                        <div class="alert-content d-flex">
                                            <div class="col-xl-5">
                                                <audio controls>
                                                    <source src="{{ url('/') }}/storage/tadrib/{{ $tadrib->berkas[0]['file_name'] }}"
                                                        type="audio/mpeg">
                                                </audio>
                                            </div>
                                        </div>
                                        @elseif ($tadrib->berkas[0]['type'] == 2)
                                        <div class="card widget widget-info">
                                            <div class="card-body">
                                                <div class="widget-info-container">
                                                    <div class="widget-info-image" style="background: url({{ url('/') }}/storage/tadrib/{{ $tadrib->berkas[0]['file_name'] }})"></div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <h1>Kosong</h1>
                                        @endif

                                    </div>

                                    <div class="list-group" style="">
                                        <li class="list-group-item">
                                            <h1 class="float-end">أ. طَبِيْبٌ</h1>
                                        </li>
                                        <li class="list-group-item">
                                            <h1 class="float-end">ب. شُرْطِيٌ</h1>
                                        </li>
                                        <li class="list-group-item">
                                            <h1 class="float-end">ج. حَدَّادٌ</h1>
                                        </li>
                                        <li class="list-group-item">
                                            <h1 class="float-end">د. خَبَّارٌ</h1>
                                        </li>
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
