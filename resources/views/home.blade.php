@extends('layouts.main')
@section('container')
@include('layouts.navbar')
    <div class="container-fluid">
        @include('sweetalert::alert')
        <img src="asdf/img/sasha-set-GURzQwO8Li0-unsplash.jpg" class="image-fluid">
        <div  class="main-text">
            <H1>SKILL VILLAGE ISLAMIC SCHOOL</H1>
            <p>Berbasis Pesantren Integratif Holistik</p>
            <div class="buttons mt-3 center">
                <a href="{{ route('form') }}" class="btn btn-warning">Pendaftaran</a>
            </div>
        </div>
    </div>
<div class="container my-5">
    <div class="justify-content-center center mt-5 fs-2 ">
        <h2 class="bold black-blue center" data-aos="fade-up">SMK Skillage Islamic School Sekolah<br> Pilihan Terbaik!</h2>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
            <div class="card colom-card center p-5" data-aos="fade-up">
                <h4 class="bold black-blue center">Disain Pembelajaran Berorientasi Proses</h3>
                <p class="text-colom-card">Proses pembelajaran dikembangkan untuk memberikan perhatian yang khusus pada perkembangan setiap siswa secara pribadi dan proses mereka di dalam kelompok dan lingkungan yang lebih besar.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
            <div class="card colom-card center p-5" data-aos="fade-up">
                <h4 class="bold black-blue center">Holistic Integrated ABCGP</h3>
                <p class="text-colom-card">ACBCG Integrated School adalah program integratif - kolaboratif Academic (sekolah), Business (Perusahaan), Community (masyarakat), Goverment (Pemerintah) dan Family (orang Tua).</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
            <div class="card colom-card center p-5" data-aos="fade-up">
                <h4 class="bold black-blue center">Lingkungan Pembelajaran Berbasis Peradaban Masjid</h3>
                <p class="text-colom-card">Kawasan berbasis peradaban Masjid mengisaratkan Akhlak Mulia (akhlakul karimah) Muhammad Rasulullah SAW sebagai Core Value (nilai inti) menghasilkan pengetahuan, inovasi, kreatifitas dan budaya sosial yang unggul.</p>
            </div>
        </div>
    </div>
</div>
<div class="blue-background my-5 py-5">
    <div class="container">
        <div class="justify-content-center center mt-5 mb-3 fs-2">
            <h2 class="bold text-yellow" data-aos="fade-up">Pilihan Jurusan Di SMK Skill Village Islamic School</h2>
        </div>
        <div class="row mb-5">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 my-3">
                <div class="card" style="border: 0;" data-aos="fade-up">
                    <img src="asdf/img/ATPH.jpeg" class="card-img-top img-sized" alt="...">
                    <div class="card-body">
                        <h4 class="bold black-blue mt-3 mb-3">Agribisnis tanaman pangan dan hortikultura</h4>
                        <a href="/atph" class="btn btn-warning rounded p-2">Selengkapnya <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 my-3">
                <div class="card" style="border: 0;" data-aos="fade-up">
                    <img src="asdf/img/rpl.jpeg" class="card-img-top img-sized" alt="...">
                    <div class="card-body">
                        <h4 class="bold black-blue mt-3 mb-3">Rekayasa Perangkat Lunak</h4>
                        <a href="/rpl" class="btn btn-warning rounded p-2">Selengkapnya <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 my-3">
                <div class="card" style="border: 0;" data-aos="fade-up">
                    <img src="asdf/img/kgsp.jpeg" class="card-img-top img-sized" alt="...">
                    <div class="card-body">
                        <h4 class="bold black-blue mt-3 mb-3">Konstruksi Gedung, Sanitasi dan Perawatan</h4>
                        <a href="/kgsp" class="btn btn-warning rounded p-2">Selengkapnya <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="center">
        <h2 class="bold black-blue center underlined mt-5 mb-3" data-aos="fade-up">Program Khusus Skill Village Islamic Boarding School</h2>
    </div>
    <div class="row">
        <div class="col-lg-4 mt-3">
            <div class="yellow-background yellow-card center" data-aos="fade-up">
                <i class="fa-solid fa-book-atlas fa-8x"></i>
                <h3 class="mt-5">Skillage Quantum</h3>
            </div>
        </div>
        <div class="col-lg-4 mt-3">
            <div class="yellow-background yellow-card center" data-aos="fade-up">
                <i class="fa-solid fa-star-and-crescent fa-8x"></i>
                <h3 class="mt-5">Habituasi Bahasa Inggris</h3>
            </div>
        </div>
        <div class="col-lg-4 mt-3">
            <div class="yellow-background yellow-card center" data-aos="fade-up">
                <i class="fa-solid fa-language fa-8x"></i>
                <h3 class="mt-5">Habituasi Bahasa Arab</h3>
            </div>
        </div>
        <div class="col-lg-4 mt-3">
            <div class="yellow-background yellow-card center" data-aos="fade-up">
                <i class="fa-solid fa-star-and-crescent fa-8x" ></i>
                <h3 class="mt-5">Tahfidz Qur'an Tematik</h3>
            </div>
        </div>
        <div class="col-lg-4 mt-3">
            <div class="yellow-background yellow-card center" data-aos="fade-up">
            <i class="fa-solid fa-star-and-crescent fa-8x"></i>
                <h3 class="mt-5">Kitab Kuning </h3>
            </div>
        </div>
        <div class="col-lg-4 mt-3">
            <div class="yellow-background yellow-card center" data-aos="fade-up">
                <i class="fa-solid fa-brain fa-8x"></i>
                <h3 class="mt-5">Program Unggulan Profesional dan Entrepreneur</h3>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <!--<div class="center">-->
    <!--    <h2 class="bold black-blue center underlined mt-5 mb-3" data-aos="fade-up">-->
    <!--        Berita-->
    <!--    </h2>-->
    <!--</div>-->
    <!--<div class="row">-->
    <!--    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 my-3">-->
    <!--        <div class="card" data-aos="fade-up">-->
    <!--            <img src="asdf/img/domenico-loia-hGV2TfOh0ns-unsplash.jpg" class="card-img-top image-news" alt="...">-->
    <!--            <div class="card-body">-->
    <!--                <h5 class="card-title bold black-blue my-3" >LOREM IPSUM DOLOR SIT AMET CONSECTURE ADIPISTING ELIT.</h5>-->
    <!--                <p class="card-text text-small" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit unde quod praesentium? Nisi excepturi repudiandae ex ea unde. Quam ullam praesentium debitis officia nemo doloribus at quo rem odit voluptatibus.</p>-->
    <!--                <div class="row mt-2">-->
    <!--                    <div class="col-2">-->
    <!--                        <img src="asdf/img/avatar-1.png" class="rounded-image avatar-image mr-2" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="col-8 justify-content-center px-3">-->
    <!--                        <h5 class="text-small">Admin3</h5>-->
    <!--                        <p class="text-small">August 28 2022</p>-->
    <!--                    </div>-->
    <!--                    <div class="col-2 mt-3">-->
                            <!-- <i class="fa-regular fa-bookmark fa-2xl"></i> -->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 my-3">-->
    <!--        <div class="card" data-aos="fade-up">-->
    <!--            <img src="asdf/img/domenico-loia-hGV2TfOh0ns-unsplash.jpg" class="card-img-top image-news"  alt="...">-->
    <!--            <div class="card-body">-->
    <!--                <h5 class="card-title bold black-blue my-3" >LOREM IPSUM DOLOR SIT AMET CONSECTURE ADIPISTING ELIT.</h5>-->
    <!--                <p class="card-text text-small" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit unde quod praesentium? Nisi excepturi repudiandae ex ea unde. Quam ullam praesentium debitis officia nemo doloribus at quo rem odit voluptatibus.</p>-->
    <!--                <div class="row mt-2">-->
    <!--                    <div class="col-2">-->
    <!--                        <img src="asdf/img/avatar-1.png" class="rounded-image avatar-image mr-2" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="col-8 justify-content-center px-3">-->
    <!--                        <h5 class="text-small">Admin3</h5>-->
    <!--                        <p class="text-small">August 28 2022</p>-->
    <!--                    </div>-->
    <!--                    <div class="col-2 mt-3">-->
                            <!-- <i class="fa-regular fa-bookmark fa-2xl"></i> -->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 my-3">-->
    <!--        <div class="card" data-aos="fade-up">-->
    <!--            <img src="asdf/img/domenico-loia-hGV2TfOh0ns-unsplash.jpg" class="card-img-top image-news" alt="...">-->
    <!--            <div class="card-body">-->
    <!--                <h5 class="card-title bold black-blue my-3" >LOREM IPSUM DOLOR SIT AMET CONSECTURE ADIPISTING ELIT.</h5>-->
    <!--                <p class="card-text text-small">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit unde quod praesentium? Nisi excepturi repudiandae ex ea unde. Quam ullam praesentium debitis officia nemo doloribus at quo rem odit voluptatibus.</p>-->
    <!--                <div class="row mt-2">-->
    <!--                    <div class="col-2">-->
    <!--                        <img src="asdf/img/avatar-1.png" class="rounded-image avatar-image mr-2" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="col-8 justify-content-center px-3">-->
    <!--                        <h5 class="text-small">Admin3</h5>-->
    <!--                        <p class="text-small">August 28 2022</p>-->
    <!--                    </div>-->
    <!--                    <div class="col-2 mt-3">-->
                            <!-- <i class="fa-regular fa-bookmark fa-2xl" ></i> -->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="buttons right">-->
    <!--        <a href="/news" class="btn btn-warning p-3">Selengkapnya</a>-->
    <!--    </div>-->
    <!--</div>-->
</div>
<div class="container my-5">
    <div class="center">
        <h2 class="black-blue bold my-5">Dukungan Industri</h2>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="swiper-slide swiper-card">
                        <div class="card-image mb-3">
                            <img src="asdf/img/logo.png" alt="" class="card-image-telkom">
                        </div>
                    </div>
                    <div class="swiper-slide swiper-card">
                        <div class="card-image mb-3">
                            <img src="asdf/img/pt-phoenix-cendekia.jpeg" alt="" class="card-image-phoenix">
                        </div>
                    </div>
                    <div class="swiper-slide swiper-card">
                        <div class="card-image mb-3">
                            <img src="asdf/img/pt-sahata.jpeg" alt="" class="card-image-telkom">
                        </div>
                    </div>
                    <div class="swiper-slide swiper-card">
                        <div class="card-image mb-3">
                            <img src="asdf/img/logo horizontal.png" alt="" class="card-image-telkom">
                        </div>
                    </div>
                    <div class="swiper-slide swiper-card">
                        <div class="card-image mb-3">
                            <img src="asdf/img/skillage.jpeg" alt="" class="card-image-telkom">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div> -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
 </div>
<div class="blue-background">
    <div class="container">
        <div class="center my-3">
            <h5 class="text-white">© 2023 SMK Skill Village Boarding School</h5>
        </div>
    </div>
</div>
<script src="asdf/js/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="asdf/js/swiper-bundle.min.js"></script>