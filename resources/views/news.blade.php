@extends('layouts.main')
@section('container')
@include('layouts.navbar')

<div class="my-5">
        <div class="justify-content-center center mt-5 mb-3 fs-2 ">
            <h2 class="bold black-blue underlined">News</h2>
        </div>
        <div class="container">
            <div class="row mx-2">
            @foreach ($berita as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-5">
                    <div class="card">
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
               </div>
            @endforeach
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