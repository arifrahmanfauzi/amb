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

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title text-center"></h5>
                                </div>
                                <div class="card-body">
                                    <h3>{{ $data[0]->soal }}</h3>
                                    <h6>unggah jawaban pada link drive berikut ini <a href="{{ $data[0]->link }}">klik disini</a> </h6>
                                    <div class="example-container">
                                        <div class="example-content bg-light">
                                            {!! $data[0]->text !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
