@extends('layouts.main')
@section('container')
@include('layouts.navbar')

<div class="container-fluid">
        <img src="asdf/img/sasha-set-GURzQwO8Li0-unsplash.jpg" class="image-fluid">
        <div  class="main-text">
            <H1>PENERIMAAN PESERTA DIDIK BARU TAHUN 2023-2024</H1>
            <p>Daftarkan diri anda segera kuota terbatas!</p> 
            <div class="mt-3 d-flex justify-content-center">
                <a href="{{ route('form') }}" class="btn btn-warning mx-3" style="width:150px">Pendaftaran</a> 
                <a href="{{ route('login') }}" class="btn btn-primary mx-3 " style="width:150px">Login</a> 
            </div>
        </div>
    </div>
    <div class="extra-container">
        <div class="center my-5">
            <h2 class="bold black-blue underlined" data-aos="fade-up">Kompetensi Keahlian</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 center p-5 fade-up">
                <i class="black-blue fa-solid fa-building fa-8x center" data-aos="fade-up"></i>
                <h3 class="bold black-blue center my-3" data-aos="fade-up">Agribisnis tanaman pangan dan hortikultura</h3>
                <ul class="padding-x" data-aos="fade-up">
                  <p class="fs-6">Agribisnis tanaman pangan dan hortikultura (ATPH) merupakan kompetensi keahlian yang mempelajari tentang pengolahan lahan, pembibitan, pemeliharaan, pemupukan, dan pengolahan aneka tanaman pangan dan holtikultura.</P>
                </ul>
            </div>
            <div class="col-lg-4 center p-5 fade-up">
                <i class="black-blue fa-solid fa-computer fa-8x center" data-aos="fade-up"></i>
                <h3 class="bold black-blue center my-3" data-aos="fade-up">Rekayasa perangkat lunak</h3>
                <ul class="padding-x" data-aos="fade-up">
                   <p class="fs-6">Program Keahlian Rekayasa Perangkat Lunak (RPL) adalah salah satu kompetensi keahlian dalam bidang Teknologi Komputer dan Informatika yang berkaitan dengan software komputer, seperti pembuatan website, aplikasi, game, dan semua yang berhubungan dengan programmer.</p>
                </ul>
            </div>
            <div class="col-lg-4 center p-5 fade-up">
                <i class="black-blue fa-regular fa-leaf fa-8x" data-aos="fade-up"></i>
                <h3 class="bold black-blue center my-3" data-aos="fade-up">Konstruksi Gedung, Sanitasi dan Perawatan</h3>
                <ul class="padding-x" data-aos="fade-up">
                    <p class="fs-6">KGSP (4 Tahun) mempelajari beberapa materi pelajaran, diantaranya adalah: Gambar Teknik, Mekanika Teknik, Dasar-dasar Konstruksi Bangunan dan Teknik Pengukuran Tanah, Konstruksi bangunan Gedung, Sistem Utilitas Bangunan Gedung, Perawatan Gedung, Estimasi Biaya Konstruksi, dan Sanitasi dan Perawatan Gedung.</p>
                </ul>
            </div>
        </div>
    </div>
    <div class="extra-container my-5">
        <div class="row my-5 py-5">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 p-3">
                <h2 class="bold black-blue underlined" data-aos="fade-up">Persyaratan Administrasi</h2>
                <p class="text-small" data-aos="fade-up">Untuk calon siswa yang ingin mendaftar dimohon untuk melengkapi berkas di bawah ini</p>
                <br>
                <h4 class="bold black-blue" data-aos="fade-up">Persyaratan Berkas</h3>
                <p data-aos="fade-up">Bagi yang ingin mendaftar program SMP atau SMK, harap melengkapi berkas di bawah ini:</p>
                <ol data-aos="fade-up">
                    <li>1. Akte kelahiran</li>
                    <li>2. Kartu Keluarga</li>
                    <li>3. Surat Keterangan lulus/ijazah</li>
                    <li>4. Sertifikasi Prestasi</li>
                </ol>
                <p class="bold fs-5" data-aos="fade-up">Semua berkas di atas disediakan dalam bentuk Soft Copy/Scan</p>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                <img src="asdf/img/domenico-loia-hGV2TfOh0ns-unsplash.jpg" data-aos="fade-up" alt="" class="require-image">
            </div>
        </div>
        <!-- <div class="row my-5 py-5">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                <img src="asdf/img/IMG_2826-1024x683.jpg" alt="" data-aos="fade-up" class="require-image">
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 p-3">
                <h2 class="bold black-blue underlined" data-aos="fade-up">Agenda PSB</h2>
                <p class="text-small" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, fugiat consequuntur dicta vitae architecto dolores laborum perferendis reprehenderit cupiditate qui tempore quo est ipsum ducimus ad modi odio blanditiis voluptates.</p>
                <br>
                <h4 class="bold black-blue" data-aos="fade-up">Persyaratan Berkas</h3>
                <p data-aos="fade-up">Bagi yang ingin mendaftar program SMP atau SMK, harap melengkapi berkas di bawah ini:</p>
                <ol data-aos="fade-up">
                    <li>1. Pas photo dengan 80% wajah dan background biru</li>
                    <li>2. Akte kelahiran</li>
                    <li>3. KTP orang tua</li>
                    <li>4. Kartu keluarga</li>
                    <li>5. Surat pernyataan orang tua (format disediakan)</li>
                    <li>6. Surat pernyataan santri (format disediakan)</li>
                    <li>7. Sertifikat prestasi (jika ada)</li>
                </ol>
                <b>Semua berkas di atas disediakan dalam bentuk Soft Copy/Scan</b>
            </div>
        </div> -->
    </div>
    <div class="extra-container my-5">
        <div class="center my-5">
            <h2 class="bold black-blue underlined mb-3" data-aos="fade-up">Jadwal PPDB SMK Skill Village</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-5">
                <h4 data-aos="fade-up">7 Agustus 2023</h4>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mb-5">
                <h4 data-aos="fade-up">Pendaftaran Online PPDB SMK Skillage Islamic</h4>
                <p class="text-grey" data-aos="fade-up">Pendaftaran online gelombang 1</p>
            </div>
            <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-5">
                <h4 data-aos="fade-up">5-10 Juni 2022</h4>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mb-5">
                <h4 data-aos="fade-up">Pendaftaran Online PPDB SMK Skillage Islamic</h4>
                <p class="text-grey" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate sed veritatis doloribus </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-5">
                <h4 data-aos="fade-up">5-10 Juni 2022</h4>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mb-5">
                <h4 data-aos="fade-up">Pendaftaran Online PPDB SMK Skillage Islamic</h4>
                <p class="text-grey" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate sed veritatis doloribus quam iste nihil consequuntur perspiciatis animi repudiandae! Officia quia numquam consequuntur fugit velit molestias non eligendi ex.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-5">
                <h4 data-aos="fade-up">5-10 Juni 2022</h4>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mb-5">
                <h4 data-aos="fade-up">Pendaftaran Online PPDB SMK Skillage Islamic</h4>
                <p class="text-grey" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate sed veritatis doloribus.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-5">
                <h4 data-aos="fade-up">5-10 Juni 2022</h4>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mb-5">
                <h4 data-aos="fade-up">Pendaftaran Online PPDB SMK Skillage Islamic</h4>
                <p class="text-grey" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate sed veritatis doloribus quam iste nihil consequuntur perspiciatis animi repudiandae! Officia quia numquam consequuntur fugit velit molestias non eligendi ex.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-5">
                <h4 data-aos="fade-up">5-10 Juni 2022</h4>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mb-5">
                <h4 data-aos="fade-up">Pendaftaran Online PPDB SMK Skillage Islamic</h4>
                <p class="text-grey" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate sed veritatis doloribus.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-5">
                <h4 data-aos="fade-up">5-10 Juni 2022</h4>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mb-5">
                <h4 data-aos="fade-up">Pendaftaran Online PPDB SMK Skillage Islamic</h4>
                <p class="text-grey" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate sed veritatis doloribus quam iste nihil consequuntur perspiciatis animi repudiandae! Officia quia numquam consequuntur fugit velit molestias non eligendi ex.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-5">
                <h4 data-aos="fade-up">5-10 Juni 2022</h4>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mb-5">
                <h4 data-aos="fade-up">Pendaftaran Online PPDB SMK Skillage Islamic</h4>
                <p class="text-grey" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate sed veritatis doloribus.</p>
            </div> -->
        </div>
    </div>
    <div class="blue-background">
        <div class="container">
            <div class="center my-3">
                <h5 class="text-white">© 2023 SMK Skill Village Islamic School</h5>
            </div>
        </div>
    </div>