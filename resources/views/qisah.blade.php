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
                            <h1>القصّة</h1>
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

                                        <video width="320" height="240" controls>
                                            <source src="{{ url('/') }}/storage/qisah/{{ $data[0]['berkas'][0]['file_name'] }}" type="video/mp4">
                                          </video>
                                </div>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
