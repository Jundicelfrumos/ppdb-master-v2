@extends('layouts.main')
@section('container')
@include('layouts.navbar')
<div class="container-fluid">
    <img src="{{$berita->gambar}}" class="image-fluid" style="height: 650px;">
    <div  class="main-text">
    </div>
</div>
<div class="extra-container">
    <div class="justify-content-center center my-5"  data-aos="fade-up">
        <h2 class="bold black-blue underlined">{{$berita->judul}}</h2>
        <p class="center text-grey fs-5">{{$berita->tanggal}}</p>
    </div>
    <div class="justify-content-start mt-3 mb-5 p-3"data-aos="fade-up">
        <p>{!!$berita->caption!!}</p>        
    </div>
</div>
<div class="blue-background">
    <div class="container">
        <div class="center my-2">
            <h5 class="text-white">© 2023 SMK Skill Village Islamic School</h5>
        </div>
    </div>
</div>