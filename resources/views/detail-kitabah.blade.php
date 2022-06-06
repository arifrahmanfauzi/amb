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
                                    <h5 class="card-title">Perhatikan dengan cermat dan teliti tulisan yang terdapat pada cerita di bawah ini.</h5>
                                </div>
                                <div class="card-body">
                                    <div class="example-container">
                                        <div class="example-content bg-light">
                                            {!! $kitabah->text !!}
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
