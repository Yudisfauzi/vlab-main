@extends('layouts.default')
@section('content')
    <section class="home" id="home">
        <div class="home-text">
            <h1>chill</h1>
            <h2>brohhhh</h2>
        </div>
        <img class="home-img" src="/img/test.png" alt="">
    </section>
    <section class="calendar" id="calendar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="title-head text-center">
                        <h4>Kalender Akademik</h4>
                        <span>laboratorium manajemen menengah</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Kegiatan</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Proses pemilihan materi kursus angkatan 2023 (Semester 1) dan angkatan 2022
                                        (angkatan 2022) wilayah Depok dan Kalimalang</td>
                                    <td>4 Oktober - 11 Oktober 2023</td>
                                </tr>
                                <tr>
                                    <td>Pelaksanaan kursus reguler (Tingkat 1,2,3) Wilayah Depok (F4)</td>
                                    <td>23 Oktober - 13 Januari 2024</td>
                                </tr>
                                <tr>
                                    <td>UTS (tidak ada kegiatan kursus selama uts)</td>
                                    <td>23 Oktober - 9 Desember 2023</td>
                                </tr>
                                <tr>
                                    <td>Pengulangan Kloter 1 Wilayah Depok, Karawaci dan Cengkareng</td>
                                    <td>1 Januari - 13 Januari 2024</td>
                                </tr>
                                <tr>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem fugiat quam
                                        consectetur laboriosam magni repudiandae rerum soluta fugit quos necessitatibus, ut
                                        provident odit. Nulla nemo natus, magnam doloremque eaque rem.</td>
                                    <td>11 Desember - 30 Desember 2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="title-head text-center">
                        <h4>Waktu Praktikum</h4>
                        <span>laboratorium manajemen menengah</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Shift</th>
                                    <th>Jam ke -</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Shift 1</td>
                                    <td>07:30 - 09:30 WIB</td>
                                </tr>
                                <tr>
                                    <td>Shift 2</td>
                                    <td>09:30 - 11:30 WIB</td>
                                </tr>
                                <tr>
                                    <td>Shift 3</td>
                                    <td>11:30 - 13:30 WIB</td>
                                </tr>
                                <tr>
                                    <td>Shift 4</td>
                                    <td>13:30 - 15:30 WIB</td>
                                </tr>
                                <tr>
                                    <td>Shift 5</td>
                                    <td>15:30 - 17:30 WIB</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="modul" id="modul">
        <div class="container">
            <div class="title-head">
                <h4>modul pembelajaran</h4>
                <span>laboratorium manajemen menengah</span>
            </div>
        </div>
    </section>
@endsection
