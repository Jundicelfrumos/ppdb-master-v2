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
        <h2 class="bold black-blue center" data-aos="fade-up">SMK Skill Village Islamic School <br> Sekolah Pilihan Terbaik</h2>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <!-- <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
            <div class="card colom-card center p-5" data-aos="fade-up">
                <h4 class="bold black-blue center">Disain Pembelajaran Berorientasi Proses</h3>
                <p class="text-colom-card">Proses pembelajaran dikembangkan untuk memberikan perhatian yang khusus pada perkembangan setiap siswa secara pribadi dan proses mereka di dalam kelompok dan lingkungan yang lebih besar.</p>
            </div>
        </div> -->
        <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
            <div class="card colom-card center p-5" data-aos="fade-up">
                <h4 class="bold black-blue">Konsep Pendidikan Integratif Holistik</h3>
                <p class="text-colom-card mt-3" style="text-align:start">Konsep pendidikan Integratif adalah Keterpaduan dan sinergi antara 5 aspek dalam aktifitas pendidikan yaitu akademis (academic), bisnis (busisness), masarakat (community), keluarga (family) dan pemerintah (government). Keterpaduan 5 aspek Skill Village Islamic School di kenal dengan Integrasi ABCFG. Keterpaduan di ejawantahkan dalam aktifitas, dan ruang. </p>
                <br>
                <p class="text-colom-card" style="text-align:start"><strong>Pendidikan Holistik</strong> adalah menjadikan <strong>Akhlakul Karimah</strong> sebagai keutuhan proses dan pencapaian profil peserta didik. Akhlaqul karimah memiliki kecerdasan di bidang otak (IQ), qalb (EQ), ruhani (SQ), dan sabar (AQ). </p>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
            <div class="card colom-card center p-5" data-aos="fade-up">
                <h4 class="bold black-blue">Program Unggulan (Roadmap to Excellence)</h3>
                <p class="text-colom-card mt-3" style="text-align:start">Setiap program studi memiliki roadmap to excellence dengan program unggulan  Character Building and  Quantum Skillage , Program Habituasi/ Literasi Bahasa Inggris dan Bahasa Arab, Program Takhassus  TQT (Tahfiz Quran Tematik) dan Belajar Cepat Kitab Kuning, dan Program Unggulan Profesional dan Entrepreneurship</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
            <div class="card colom-card center p-5" data-aos="fade-up">
                <h4 class="bold black-blue">Berada di Kampung Tumbuh Berbasis Masjid</h3>
                <p class="text-colom-card mt-3" style="text-align:start">Skill Village Berada dalam satu kawasan yang dinamakan <strong>Kampung Tumbuh Berbasis Masjid.</strong> Beralamat di RT 01/RW06 Kampung Tegal Putat, Desa Sukasirna, Kecamatan Jonggol, Kabupaten Bogor, Propinsi Jawa Barat, Indonesia. Integrasi dan kesatupaduan aktifitas, dan ruang kawasan memaduserasikan Bisnis, Pemberdayaan Masyarakat, dan kegiatan pembelajaran dalam satu kampung (nuasa pedesaan yang harmoni)</p>
                <br>
                <p class="text-colom-card" style="text-align:start">Kawasan berbasis peradaban Masjid mengisaratkan Akhlak Mulia (akhlakul karimah) Muhammad Rasulullah SAW sebagai Core Value (nilai inti) pengetahuan, inovasi, kreatifitas dan budaya sosial yang unggul. Mengembangkan kecerdasan di bidang otak (IQ), qalb (EQ), ruhani (SQ), dan sabar (AQ). berbasis </p>
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
                        <a href="/atph" class="btn btn-warning rounded px-4">Selengkapnya <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 my-3">
                <div class="card" style="border: 0;" data-aos="fade-up">
                    <img src="asdf/img/rpl.jpeg" class="card-img-top img-sized" alt="...">
                    <div class="card-body">
                        <h4 class="bold black-blue mt-3 mb-3">Rekayasa Perangkat Lunak</h4>
                        <a href="/rpl" class="btn btn-warning rounded px-4">Selengkapnya <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 my-3">
                <div class="card" style="border: 0;" data-aos="fade-up">
                    <img src="asdf/img/kgsp.jpeg" class="card-img-top img-sized" alt="...">
                    <div class="card-body">
                        <h4 class="bold black-blue mt-3 mb-3">Konstruksi Gedung, Sanitasi dan Perawatan</h4>
                        <a href="/kgsp" class="btn btn-warning rounded px-4">Selengkapnya <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="center">
        <h2 class="bold black-blue center underlined mt-5 mb-3" data-aos="fade-up">Program Khusus Skill Village Islamic Islamic School</h2>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
            <a href="/supercamp" class="anchor-program">
                <div class="yellow-background yellow-card center p-4" data-aos="fade-up">
                    <img src="asdf/img/icon program/Icon Skillage Quantum 3.png" class="program-img"> 
                    <h5 class="mt-5">Program Quantum Skillage</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
            <a href="/supercamp" class="anchor-program">
                <div class="yellow-background yellow-card center p-4" data-aos="fade-up">
                    <img src="asdf/img/icon program/Icon Character Building Skillage 3.png" class="program-img">
                    <h5 class="mt-5">Program Character Building</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
            <a href="/supercamp" class="anchor-program">
                <div class="yellow-background yellow-card center p-4" data-aos="fade-up">
                    <img src="asdf/img/icon program/Icon eng language skillage 3.png" class="program-img">
                    <h5 class="mt-5">Program Habituasi/Literasi Bahasa Inggris</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
            <a href="/supercamp" class="anchor-program">
                <div class="yellow-background yellow-card center p-4" data-aos="fade-up">
                    <img src="asdf/img/icon program/Icon arab language skillage 3.png" class="program-img">
                    <h5 class="mt-5">Program Habituasi/Literasi Bahasa Arab</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
            <a href="/supercamp" class="anchor-program">
                <div class="yellow-background yellow-card center p-4" data-aos="fade-up">
                    <img src="asdf/img/icon program/Icon Kitab Kuning Skillage 3.png" class="program-img">
                    <h5 class="mt-5">Belajar Cepat Baca Kitab Kuning</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
            <a href="/supercamp" class="anchor-program">
                <div class="yellow-background yellow-card center p-4" data-aos="fade-up">
                    <img src="asdf/img/icon program/Icon TQT Skillage 3.png" class="program-img">
                    <h5 class="mt-5">TQT (Tahfidzh Qur'an Tematik)</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
            <a href="/supercamp" class="anchor-program">
                <div class="yellow-background yellow-card center p-4" data-aos="fade-up">
                    <img src="asdf/img/icon program/Icon Profesional Skillage 3.png" class="program-img">
                    <h5 class="mt-5">Program Profesional</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
            <a href="/supercamp" class="anchor-program">
                <div class="yellow-background yellow-card center p-4" data-aos="fade-up">
                    <img src="asdf/img/icon program/Icon Entrepreneur Skillage 3.png" class="program-img">
                    <h5 class="mt-5">Program Entrepreneurship</h3>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="center">
        <h2 class="bold black-blue center underlined mb-5" data-aos="fade-up">
            Berita
        </h2>
    </div>
    <div class="row mx-2">
            @foreach ($berita as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-5">
                    <a href="{{url('detail-news',$item->id)}}" class="anchor-news">
                        <div class="card card-news rounded" data-aos="fade-up">
                        <!-- <img src="{{asset('images/'. $item->gambar)}}" class="card-img-top image-news" alt="..."> -->
                            <img src="{{$item->gambar}}" alt="" class="card-img-top image-news" alt="">
                            <div class="card-body">
                                <h5 class="bold black-blue mt-3">{{$item->judul}}</h5>
                                <span class="text-smaller text-limit">{!!$item->caption!!}</span>
                                <div class="row mt-1">
                                    <div class="col-2">
                                        <img src="asdf/img/avatar-1.png" class="rounded-image avatar-image mr-2" alt="">
                                    </div>
                                    <div class="col-10 justify-content-center px-3">
                                        <h5 class="text-small">Posted by Admin</h5>
                                        <span class="text-small">{{$item->tanggal}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
               </div>
            @endforeach
           </div>
</div>
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
            <h5 class="text-white">© 2023 SMK Skill Village Islamic School</h5>
        </div>
    </div>
</div>
<script src="asdf/js/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="asdf/js/swiper-bundle.min.js"></script>