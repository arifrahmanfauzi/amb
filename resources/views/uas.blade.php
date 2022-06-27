@extends('layouts.app')
@section('tittle')
    <title>UAS</title>
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
                        </div>
                    </div>
                </div>
                <div class="row">
                    @forelse ($data as $soal)
                        <div class="col-xl-6">
                            <div class="card widget">
                                <div class="card-header">
                                    <h3>Nomor {{ $soal->nomor_soal }}</h3>
                                </div>
                                <div class="card-body">
                                    <p class="card-description">
                                        {!! $soal->soal_jawaban !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3>Data Kosong</h3>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
@endsection
