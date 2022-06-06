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
                            <h1>فعل</h1>
                        </div>
                    </div>
                </div>
            </div>
            @if ($data)
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <p>Fi’il adalah kata yang menunjukkan arti pekerjaan atau peristiwa yang terjadi pada suatu masa atau waktu tertentu (lampau, sekarang dan yang akan datang).</p>
                            <img src="{{ url('/') }}/storage/fiil.png" alt="" width="500" height="350">
                        </div>
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header"><h5 class="card-tittle">Secara bahasa, fi’il berarti kata kerja. Sedangkan madhi berarti yang telah lampau atau lewat. Jadi, fi’il madhi adalah kata kerja yang menunjukkan terjadinya suatu pekerjaan atau peristiwa pada waktu lampau.
                                Ciri-cirinya fi’il madhi antara lain tampak pada huruf asli kata kerjanya dan huruf akhirnya selamanya berharakat fathah jika berupa fi’il shahih dan tidak bersambung dengan dhamir mutaharrik yang di rafa’kan.
                                Bentuk Fi’il Madhi sesuai pelakunya
                                </h5></div>
                            <div class="card-body">
                                <div class="container">
                                    <table class="table">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Dhamir</th>
                                                <th>Fi'il madhi</th>
                                                <th>Arti</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $fiil)
                                                @if($fiil->jenis == 1)
                                                <tr>
                                                    <td class="display-4">{{ $fiil->dhamir }}</td>
                                                    <td class="display-4">{{ $fiil->madhi }}</td>
                                                    <td class="">{{ $fiil->arti }}</td>
                                                    <td class="">{{ $fiil->keterangan }}</td>
                                                </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header"><h5 class="card-tittle">Fi’il mudhari’ adalah kata kerja yang menunjukkan terjadinya suatu pekerjaan atau peristiwa pada pada waktu yang akan datang, sedang berlangsung atau rutinitas.
                                Ciri-ciri Fi’il Mudhari’ adalah dimulai dengan huruf Mudhoro’ah yaitu :
                                </h5></div>
                            <div class="card-body">
                                <div class="container">
                                    <table class="table">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Dhamir</th>
                                                <th>Fi'il Amr</th>
                                                <th>Arti</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $fiil)
                                                @if($fiil->jenis == 4)
                                                <tr>
                                                    <td class="display-4">{{ $fiil->dhamir }}</td>
                                                    <td class="display-4">{{ $fiil->madhi }}</td>
                                                    <td class="">{{ $fiil->arti }}</td>
                                                </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header"><h5 class="card-tittle">Bentuk Fi’il Mudhari’ sesuai pelakunya :</h5></div>
                            <div class="card-body">
                                <div class="container">
                                    <table class="table">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Huruf</th>
                                                <th>Arti</th>
                                                <th>Contoh</th>
                                                <th>Arti</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $fiil)
                                                @if($fiil->jenis == 2)
                                                <tr>
                                                    <td class="display-4">{{ $fiil->dhamir }}</td>
                                                    <td class="">{{ $fiil->madhi }}</td>
                                                    <td class="display-4">{{ $fiil->arti }}</td>
                                                    <td class="">{{ $fiil->keterangan }}</td>
                                                </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header"><h5 class="card-tittle">Fi'il Amr adalah kata kerja yang berisi pekerjaan yang dikehendaki oleh Mutakallim (pembicara) sebagai orang yang memerintah agar dilakukan oleh Mukhathab (lawan bicara) sebagai orang yang diperintah.</h5></div>
                            <div class="card-body">
                                <div class="container">
                                    <table class="table">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Dhamir</th>
                                                <th>Fi'il Mudhari'</th>
                                                <th>Arti</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $fiil)
                                                @if($fiil->jenis == 3)
                                                <tr>
                                                    <td class="display-4">{{ $fiil->dhamir }}</td>
                                                    <td class="display-4">{{ $fiil->madhi }}</td>
                                                    <td class="">{{ $fiil->arti }}</td>
                                                </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <h3>Data Kosong</h3>
            @endif

        </div>
    </div>
</div>
@endsection
