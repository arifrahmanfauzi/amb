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
                                @if ($bab == 5)
                                    <h1>المصدر</h1>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                @if ($data)
                                    {!! $data[0]->keterangan !!}
                                    {{-- {!! $data->keterangan !!} --}}
                                @else
                                    <h3>Data Kosong</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
