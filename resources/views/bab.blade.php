@extends('layouts.app')
@section('tittle')
        <title>Bab</title>
@endsection
@section('app-content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
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
                                        <a href="kosa-kata.html"
                                            class="text-center d-flex flex-column align-items-center">
                                            <span class="widget-action-list-item-title">
                                                <button class="btn btn-outline-dark btn-lg">
                                                    <h1> المُتَرَادِفَاتْ</h1>
                                                </button>
                                            </span>
                                        </a>
                                        <a href="soal.html"
                                            class="text-center d-flex flex-column align-items-center">
                                            <span class="widget-action-list-item-title">
                                                <button class="btn btn-outline-dark btn-lg">
                                                    <h1> مُحَادَثَة </h1>
                                                </button>
                                            </span>
                                        </a>
                                        <a href="tes.html"
                                            class="text-center d-flex flex-column align-items-center">
                                            <span class="widget-action-list-item-title">
                                                <button class="btn btn-outline-dark btn-lg">
                                                    <h1> التَّدْرِيبْ </h1>
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
