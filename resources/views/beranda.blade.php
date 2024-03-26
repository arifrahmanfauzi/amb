@extends('layouts.app')
@section('tittle')
        <title>Beranda</title>
@endsection
@section('app-content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 card">
                    <div class="d-flex justify-content-center align-content-center p-3 gap-5">
                        <img src="assets/images/other/logo.png" alt="" class="rounded float-start"
                            width="100" height="100">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card widget widget-action-list">
                        <div class="card-body">
                            <div class="widget-action-list-container">
                                <ul class="list-unstyled d-flex no-m">
                                    <li class="widget-action-list-item">
                                        <a href="{{ url('silabus') }}"
                                            class="text-center d-flex flex-column align-items-center">
                                            <span class="widget-action-list-item-title">
                                                <button class="btn btn-outline-dark btn-lg">
                                                    {{-- <h1> مَهَارَةُ الاِسْتِمَاعْ وَالْكَلَامْ </h1> --}}
                                                    <h4> Media Belajar Bahasa Arab </h4>
                                                </button>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 card widget">
                    <div class="card-body">
                        <div class="widget-info-container">
                            <p class="card-text" style="text-align: justify;text-justify: inter-word;">
                                Bismillahirrahmanirrahim..
                                <br>
                                <br>
Alhamdulillahi rabbil 'alamin, puji syukur hanya milik Allah SWT yang telah menganugerahkan hidayah, taufiq dan inayah sehingga proses pengembangan media pembelahjaran Bahasa Arab pada madrasah ini dapat diselesaikan. Shalawat serta salam semoga tercurah keharibaan Rasulullah SAW. Aamiin.
Perkembangan ilmu pengetahuan, teknologi dan komunikasi di era global mengalami perubahan yang sangat cepat dan sulit diprediksi. Kurikulum Bahasa Arab pada madrasah harus bisa mengantisipasi cepatnya perubahan tersebut disamping menjalankan mandat mewariskan budaya-karakter bangsa dan nilai-nilai akhlak pada peserta didik. Dengan demikian, generasi muda akan memiliki kepribadian, berkarakter kuat dan tidak tercerabut dari akar budaya bangsa namun tetap bisa menjadi aktor di zamannya.
Aplikasi ini dibuat sebagai media pendukung pembelajaran bahasa Arab maharah istima’ dan maharah kalam kelas VIII, Semester II Tingkat Madrasah Tsanawiyah.
Materi maharah istima’ dan maharah kalam yang terdapat pada aplikasi ini bersumber dari buku ajar Bahasa Arab cetakan Kementerian Agama Republik Indonesia Tahun 2020 dengan nomor ISBN : 978-623-6687-39-0 (Jilid lengkap) dan ISBN : 978-623-6687-41-3 (Jilid 2)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
