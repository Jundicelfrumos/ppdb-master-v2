@extends('layouts.main')
@section('container')
@include('layouts.navbar')

<div class="container-fluid">
      <img src="asdf/img/sasha-set-GURzQwO8Li0-unsplash.jpg"  style="height: 650px;" class="image-fluid">
      <div  class="main-text">
          <H1 style="font-size: 5.5rem;">Home - Kontak Kami</H1>
      </div>
    </div>
    <div class="extra-container">
      <div class="center">
        <h2 class="bold black-blue underlined mt-5 mb-3">Kontak Kami</h2>
        <div class="underlined"></div>
      </div>
      <div class="p-3">
        <ul>
          <li><i class="fa-solid fa-location-dot" style="margin-right: 10px;"></i><b>Alamat SMK Skillage Islamic</b> : Kp. Tegal Putat Kelas A 34 Blok 022,<br> RT.01/RW.06, Sukasirna, Kec. Jonggol,<br> Kabupaten Bogor, Jawa Barat 16830</li>
          <li><i class="fa-solid fa-envelope" style="margin-right: 10px;"></i><b>Email</b> : info@skillageislamic.sch.id</li>
          <li><i class="fa-solid fa-phone" style="margin-right: 10px;"></i><b>Telp</b> : +62 812-9824-8824</li>
        </ul>
      </div>
      <div class="my-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.2432307810273!2d107.05727417485704!3d-6.490855093501171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69bdf6b3779957%3A0xdbf697642be5a11e!2sSkill%20Village%20Islamic%20School!5e0!3m2!1sid!2sid!4v1689220265188!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe>  
        <p class="mt-5"><b>Sosial Media</b> :</p>
        <ul class="inline m-3 mb-5">
          <li><a href="https://www.instagram.com/"><img src="asdf/img/share/pngtree-instagram-icon-png-image_6315974.png" alt="Instagram" class="instagram-share mr-1"></a></li>
          <li><a href="https://www.facebook.com/"><img src="asdf/img/share/facebookimages.png" alt="Facebook" class="facebook-share mr-1"></a></li>
          <li><a href="https://www.twitter.com/"><img src="asdf/img/share/673524.png" alt="twitter" class="twitter-share mr-1"></a></li>
          <li><a href="https://www.tiktok.com/"><img src="asdf/img/share/tik-tok-april-tutuapp-5.png" alt="Tiktok" class="tiktok-share mr-1"></a></li>
        </ul>
      </div>
    </div>
    <a href="https://api.whatsapp.com/send?phone=51000000000&text=olá" class="whatsapp-button" target="_blank" style="position: fixed;  right: 15px; bottom: 15px;">
      <img src="https://i.ibb.co/VgSspjY/whatsapp-button.png" alt="botão whatsapp">
    </a>
    <div class="blue-background">
        <div class="container">
            <div class="center my-3">
                <h5 class="text-white">© 2023 SMK Skill Village Islamic School</h5>
            </div>
        </div>
    </div>
@endsection