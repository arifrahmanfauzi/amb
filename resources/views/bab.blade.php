@extends('layouts.app')
@section('tittle')
        <title>Bab {{ $id }}</title>
@endsection
@section('app-content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 card widget">
                    <div class="card-body">

                        @switch($id)
                            @case(4)
                            <p class="card-text" style="text-align: justify;text-justify: inter-word;">
                                BAB 4
                                KOMPETENSI INTI :
                                1. Menghargai dan menghayati ajaran agama yang dianutnya
                                2. Menunjukkan perilaku jujur, disiplin, tanggung jawab, peduli (toleran, gotong royong), santun, percaya diri dalam berinteraksi secara efektif dengan lingkungan sosial dan alam dalam jangkauan pergaulan dan keberadaannya
                                3. Memahami dan menerapkan pengetahuan (fakraal, konseptual, dan prosedural) berdasarkan rasa ingin tahunya tentang ilmu pengetahuan, teknologs, seni, budaya terkait fenomena dan kejadian tampak mata
                                4. Mengolah, menyajı, dan menalar dalam tanah konkret (menggunakan, mengurai, merangkai, memodifikasi, dan membuat) dan ranah abstrak (menulis, membaca. menghitung, menggambar, dan mengarang) sesuai dengan yang dipelajari di sekolah dan sumber lain yang sama dalam sudut pandang/teori
                               </p>
                               <br>
                               <p>KOMPETENSI DASAR :</p>
                               <table class="table table-bordered">
                                {{-- <thead></thead> --}}
                                <tbody>
                                    <tr>
                                        <td>3.7 Memahami fungsi sosial, struktur teks dan unsur kebahasaan (bunyi, kata, dan makna) dari teks sederhana yang berkaitan dengan tema: الرياضة yang melibatkan tindak turur memberi dan meminta informasi tentang tujuan sebuah aktifitas dengan memperhatikan susunan gramatikal (أن-لن-لِ) الفعل المضارع) </td>
                                        <td>4.7 Mendemonstrasikan tindak tutur memberi dan meminta informasi tentang tujuan sebuah aktifitas dengan memperhatikan susunan gramatikal (أن-لن-لِ) الفعل المضارع) baik secara lisan maupun tulisan. </td>
                                    </tr>
                                    <tr>
                                        <td>3.8 Menganalisis gagasan dari teks naratif sederhana yang berkaitan dengan tema: الرياضة dengan memperhatikan bentuk. makna dan fungsi dari susunan gramatikal (أن-لن-لِ) الفعل المضارع)</td>
                                        <td>4.8 Menyajikan hasil analisis gagasan dari teks naratif sederhana yang berkaitan dengan tema: الرياضة  dengan memperhatikan bentuk. makna dan fungsi dari susunan gramatikal (أن-لن-لِ) الفعل المضارع)</td>
                                    </tr>
                                </tbody>
                               </table>
                                @break

                            @case(5)
                            <p class="card-text" style="text-align: justify;text-justify: inter-word;">
                                BAB 5
                                KOMPETENSI INTI :
                                1. Menghargai dan menghayati ajaran agama yang dianutnya
                                2. Menunjukkan perilaku jujur, disiplin, tanggung jawab, peduli (toleran, gotong royong), santun, percaya diri dalam berinteraksi secara efektif dengan lingkungan sosial dan alam dalam jangkauan pergaulan dan keberadaannya
                                3. Memahami dan menerapkan pengetahuan (fakraal, konseptual, dan prosedural) berdasarkan rasa ingin tahunya tentang ilmu pengetahuan, teknologs, seni, budaya terkait fenomena dan kejadian tampak mata
                                4. Mengolah, menyajı, dan menalar dalam tanah konkret (menggunakan, mengurai, merangkai, memodifikasi, dan membuat) dan ranah abstrak (menulis, membaca. menghitung, menggambar, dan mengarang) sesuai dengan yang dipelajari di sekolah dan sumber lain yang sama dalam sudut pandang/teori
                               </p>
                               <br>
                               <p>KOMPETENSI DASAR :</p>
                               <table class="table table-bordered">
                                {{-- <thead></thead> --}}
                                <tbody>
                                    <tr>
                                        <td>3.9 Memahami fungsi sosial, struktur teks dan unsur kebahasaan (bunyi, kata, dan makna) dari teks naratif sederhana yang berkaitan dengan tema:المهنة  yang melibatkan tindak tutur memberi dan meminta informasi terkait profesi dengan memperhatikan susunan gramatikal المصدر الصريح </td>
                                        <td>4.9 Mendemonstrasikan tindak tutur memberi dan meminta informasi terkait profesi dengan memperhatikan susunan gramatikal المصدر الصريح baik secara lisan maupun tulisan. </td>
                                    </tr>
                                    <tr>
                                        <td>3.10 Menganalisis gagasan dari teks naratif sederhana yang berkaitan dengan tema: المهنة dengan memperhatikan bentuk, makna dan fungsi dari susunan gramatikal المصدر الصريح</td>
                                        <td>4.10 Menyajikan hasil analisis gagasan dari teks naratif sederhana yang berkaitan dengan tema: المهنة dengan memperhatikan bentuk, makna dan fungsi dari susunan gramatikal المصدر الصريح</td>
                                    </tr>
                                </tbody>
                               </table>
                                @break

                            @case(6)
                           <p class="card-text" style="text-align: justify;text-justify: inter-word;">
                            BAB 6
                            KOMPETENSI INTI :
                            1. Menghargai dan menghayati ajaran agama yang dianutnya
                            2. Menunjukkan perilaku jujur, disiplin, tanggung jawab, peduli (toleran, gotong royong), santun, percaya diri dalam berinteraksi secara efektif dengan lingkungan sosial dan alam dalam jangkauan pergaulan dan keberadaannya
                            3. Memahami dan menerapkan pengetahuan (fakraal, konseptual, dan prosedural) berdasarkan rasa ingin tahunya tentang ilmu pengetahuan, teknologs, seni, budaya terkait fenomena dan kejadian tampak mata
                            4. Mengolah, menyajı, dan menalar dalam tanah konkret (menggunakan, mengurai, merangkai, memodifikasi, dan membuat) dan ranah abstrak (menulis, membaca. menghitung, menggambar, dan mengarang) sesuai dengan yang dipelajari di sekolah dan sumber lain yang sama dalam sudut pandang/teori
                           </p>
                           <br>
                           <p>KOMPETENSI DASAR :</p>
                           <table class="table table-bordered">
                            {{-- <thead></thead> --}}
                            <tbody>
                                <tr>
                                    <td>3.11 Memahami fungsi sosial, struktur teks dan unsur kebahasaan (bunyi, kata, dan makna) dari teks sederhana yang berkaitan dengan tema: عيادة المرضي yang melibatkan tindak tutur mendoakan orang sakit dengan memperhatikan susunan gramatikal الفعل ماضي والجملة الفعلية </td>
                                    <td>4.11 Mendemonstrasikan tindak tutur mendoakan orang sakit dengan memperhatikan bentuk, makna dan fungsi dari susunan gramatika الفعل ماضي والجملة الفعلية baik secara lisan maupun tulisan. </td>
                                </tr>
                                <tr>
                                    <td>3.12 Menganalisis gagasan dari teks sederhana yang berkaitan dengan tema:  عيادة المرضي memperhatikan bentuk, makna dan fungsi dari susunan gramatikal الفعل ماضي والجملة الفعلية</td>
                                    <td>4.12 Menyajikan hasil analisis gagasan dari teks sederhana yang berkaitan dengan tema:  عيادة المرضي dengan memperhatikan bentuk, makna dan fungsi dari susunan gramatikal الفعل ماضي والجملة الفعلية</td>
                                </tr>
                            </tbody>
                           </table>
                                @break

                            @default

                        @endswitch
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 card justify-content-center">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center align-content-center p-2 gap-3">
                        <img src="assets/images/other/UINSA.png" alt="" class="rounded float-end"
                            width="100" height="100">
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
                                        <a href="{{ url('/bab-' . $id .'/istima') }}"
                                            class="text-center d-flex flex-column align-items-center">
                                            <span class="widget-action-list-item-title">
                                                <button class="btn btn-outline-dark btn-lg">
                                                    {{-- <h1> المُتَرَادِفَاتْ</h1> --}}
                                                    <h1> مهارة الاستماع </h1>
                                                </button>
                                            </span>
                                        </a>
                                        <a href="{{ url('/bab-' . $id .'/kalam') }}"
                                            class="text-center d-flex flex-column align-items-center">
                                            <span class="widget-action-list-item-title">
                                                <button class="btn btn-outline-dark btn-lg">
                                                    {{-- <h1> مُحَادَثَة </h1> --}}
                                                    <h1> مهارة الكلام </h1>
                                                </button>
                                            </span>
                                        </a>
                                        <a href="{{ url('/bab-' . $id .'/qiroah') }}"
                                            class="text-center d-flex flex-column align-items-center">
                                            <span class="widget-action-list-item-title">
                                                <button class="btn btn-outline-dark btn-lg">
                                                    <h1> مهارة القراءة </h1>
                                                </button>
                                            </span>
                                        </a>
                                        <a href="{{ url('/bab-' . $id .'/kitabah') }}"
                                            class="text-center d-flex flex-column align-items-center">
                                            <span class="widget-action-list-item-title">
                                                <button class="btn btn-outline-dark btn-lg">
                                                    <h1> مهارة الكتابة </h1>
                                                </button>
                                            </span>
                                        </a>
                                        <a href="{{ url('/bab-' . $id .'/qawait') }}"
                                            class="text-center d-flex flex-column align-items-center">
                                            <span class="widget-action-list-item-title">
                                                <button class="btn btn-outline-dark btn-lg">
                                                    <h1> القواعد </h1>
                                                </button>
                                            </span>
                                        </a>
                                        <a href="{{ url('/bab-' . $id .'/tamrin') }}"
                                            class="text-center d-flex flex-column align-items-center">
                                            <span class="widget-action-list-item-title">
                                                <button class="btn btn-outline-dark btn-lg">
                                                    <h1> التمرين </h1>
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
        </div>
    </div>
</div>
@endsection
