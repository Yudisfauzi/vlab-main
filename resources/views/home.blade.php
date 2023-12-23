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
            <div class="title-head text-center">
                <h4>modul pembelajaran</h4>
                <span>laboratorium manajemen menengah</span>
            </div>
            <div class="wrapper">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card">
                            <div class="card-header">
                                <img src="img/modul-1.ppm" alt="gambar-1">
                            </div>
                            <div class="card-body">
                                <h4>Riset Operasional 1</h4>
                                <p>Riset operasi adalah pendekatan dalam pengambilan keputusan yang ditandai dengan
                                    penggunaan
                                    pengetahuan ilmiah melalui usaha kelompok antar disiplin yang bertujuan menentukan
                                    penggunaan terbaik sumber daya yang terbatas.</p>
                                <a href="#">View More</a>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-header">
                                <img src="img/modul-2.jpg" alt="gambar-1">
                            </div>
                            <div class="card-body">
                                <h4>E-Commerce</h4>
                                <p>Electronic commerce atau e-commerce adalah suatu proses terjadinya transaksi jual beli yang dalam prakteknya dilakukan secara online melalui media elektronik.</p>
                                <a href="#">View More</a>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-header">
                                <img src="img/modul-3.jpeg" alt="gambar-1">
                            </div>
                            <div class="card-body">
                                <h4>Manajemen Operasional 1</h4>
                                <p>Manajemen operasional adalah area bisnis yang berfokus pada proses produksi, serta memastikan pemeliharaan dan perkembangan berlangsung secara efektif dan efisien. Seorang manajer operasi bertanggung jawab mengelola proses pengubahan input menjadi output.</p>
                                <a href="#">View More</a>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-header">
                                <img src="img/modul-4.jpeg" alt="gambar-1">
                            </div>
                            <div class="card-body">
                                <h4>Manajemen Jasa</h4>
                                <p>Jasa merupakan kegiatan ekonomi yang menghasilkan produk yang tidak berwujud (intangible) seperti reparasi, akomodasi, transportasi, asuransi, tempat tinggal, pendidikan, hiburan, penginapan, pemerintahan, keuangan, kesehatan dan bidang professional lainnya.</p>
                                <a href="#">View More</a>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-header">
                                <img src="img/modul-5.jpeg" alt="gambar-1">
                            </div>
                            <div class="card-body">
                                <h4>Dasar Manajemen Keuangan</h4>
                                <p>Manajemen keuangan adalah segala aktivitas yang berhubungan dengan keputusan pengelolaan keuangan dan aset keuangan. Tujuan utama dari manajemen keuangan adalah memperoleh keuntungan yang maksimal melalui sumber daya keuangan yang tersedia.</p>
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 3,
            spaceBetween: 30,
            grabCursor: true,
            
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
@endsection
