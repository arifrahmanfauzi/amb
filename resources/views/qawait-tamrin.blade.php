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
                            <h1>أُكْتُبْ الكَلِمَةَ الأَتِيَة وَقْفًا لِلظَمَائِرْ</h1>
                        </div>
                    </div>
                </div>
            </div>
            @if ($bab == 6)
            <div class="row">
                <div class="col-xl-12">
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
                                            <th style="font-size: 2.5rem">أَنْتِ</th>
                                            <th style="font-size: 2.5rem">أَنْتَ</th>
                                            <th style="font-size: 2.5rem">هِيَ</th>
                                            <th style="font-size: 2.5rem">هُوَ</th>
                                            <th style="font-size: 2.5rem">نَحْنُ</th>
                                            <th style="font-size: 2.5rem">أَنَا</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td style="font-size: 2.5rem">كَتَبْتُ</td>
                                            </tr>
                                            <tr>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">فَتَحْنَا</td>
                                                <td style="font-size: 2.5rem">...</td>
                                            </tr>
                                            <tr>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">فَحَصَ</td>
                                                <td class="display-4">...</td>
                                                <td style="font-size: 2.5rem">...</td>
                                            </tr>
                                            <tr>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">جَلَسَ</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td style="font-size: 2.5rem">...</td>
                                            </tr>
                                            <tr>
                                                <td class="display-4">...</td>
                                                <td class="display-4">وَضَعْتَ</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td style="font-size: 2.5rem">...</td>
                                            </tr>
                                            <tr>
                                                <td class="display-4">قَرأْتِ</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td style="font-size: 2.5rem">...</td>
                                            </tr>
                                            <tr>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">وَصَلْنَا</td>
                                                <td style="font-size: 2.5rem">...</td>
                                            </tr>
                                            <tr>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td style="font-size: 2.5rem">ذَهَبْتُ</td>
                                            </tr>
                                            <tr>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">فَهِمَتْ</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td style="font-size: 2.5rem">...</td>
                                            </tr>
                                            <tr>
                                                <td class="display-4">...</td>
                                                <td class="display-4">دّخَلْتَ</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td style="font-size: 2.5rem">...</td>
                                            </tr>
                                            <tr>
                                                <td class="display-4">...</td>
                                                <td class="display-4">دّخَلْتَ</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td class="display-4">...</td>
                                                <td style="font-size: 2.5rem">...</td>
                                            </tr>

                                    </tbody>
                                </table>
                                <h5>Silahkan Mengumpulkan Jawaban pada link berikut</h5>
                                <a href="https://docs.google.com/forms/d/1CazUeJqvTy6-QcUFmQcEmLrb1OYNzFoN1t1omULAZ7Y/edit?usp=sharing">Klik disini</a>
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
