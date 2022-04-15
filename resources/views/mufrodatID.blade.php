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
                            <h1>المُتَرَادِفَاتْ</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="card widget widget-info">
                        <div class="card-body">
                            <div class="widget-info-container">
                                <div class="example-content bg-white overflow-hidden">
                                    <img src="{{ url('/') }}/storage/mufrodat/{{ $data[0]['berkas'][1]['file_name'] }}" alt="" srcset=""
                                        class="img-fluid">
                                </div>
                                <br>
                                <audio controls>
                                    <source src="{{ url('/') }}/storage/mufrodat/{{ $data[0]['berkas'][0]['file_name'] }}" type="audio/mp3">
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
