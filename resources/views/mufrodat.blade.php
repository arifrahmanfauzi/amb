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

            <div class="row">
                @forelse ($data as $mufrodat)
                <div class="col-xl-4">
                    <div class="card file-manager-group">
                        <div class="card-body d-flex align-items-center">
                            <div class="card-body d-flex align-items-center">
                                <a href="{{ url('/bab-').$id }}/istima/mutaradifat/{{ $mufrodat->id }}">
                                    <img src="{{ url('/') }}/storage/mufrodat/{{ $mufrodat->berkas[1]->file_name }}" alt="" class="rounded"
                                        width="300" height="300">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <h1>Data is empty</h1>
                @endforelse
                <div class="row text-center">
                    <div class="alert alert-custom" role="alert">
                        <div class="alert-content">
                            <div class="example">
                                <audio controls="">
                                    @switch($id)
                                        @case(4)

                                            @break
                                        @case(5)
                                        <source src="{{ url('/') }}/storage/mufrodat/mufrodat.mpeg" type="audio/mpeg">
                                            @break
                                        @case(6)
                                        <source src="{{ url('/') }}/storage/mufrodat/mufrodat-6.mpeg" type="audio/mpeg">

                                            @break

                                        @default
                                            <h4>Not found</h4>
                                    @endswitch
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
