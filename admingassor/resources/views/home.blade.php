@extends('layouts.app')

@section('title', 'Gassor - Gas Sewa Motor')

@section('vendor-style')
 <link rel="stylesheet" href="{{ asset('css/motor/home.css') }}">
@endsection

@section('page-style')
@endsection

@section('content')
 <div class="element-home">
  <div class="div">
   <div class="overlap-group">
    <header class="header">
     <div class="text">
      <div class="text-wrapper">Halo, Noval!</div>
      <div class="address">
       <i class="fa-solid fa-location-pin"></i>
       <div class="text-wrapper-2">Bandung, Indonesia</div>
      </div>
     </div>
     <div class="item">
      <div class="profile-picture">
       <img class="icon-outline-user"
        src="{{ asset('img/icon-outline-user.svg') }}" />
      </div>
     </div>
    </header>

    <div class="card">
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-search"></i></span>
        <input type="text"
        class="form-control"
        placeholder="Cari motor...">
     </div>
    </div>

   </div>
   <div class="section">
    <div class="section-2">
     <div class="text-wrapper-3">Motor Tersedia</div>
     <div class="text-wrapper-4">
      <a href="{{ url('/kategorimotor') }}"
       style="color: inherit; text-decoration: none;">Selengkapnya</a>
     </div>
    </div>
    <div class="slide">
     <div class="card-2">
      <div class="image">
       <img class="element"
        src="{{ asset('img/966d4328-5e60-4f37-9e65-8a067e455606-2-1.png') }}" />
      </div>
      <div class="text-2">
       <div class="review">
        <i class="fa-solid fa-star"
         style="color: #ECB009;"></i>
        <div class="text-wrapper-5">Termasuk Helm</div>
       </div>
       <div class="text-wrapper-6">Yamaha Soul GT</div>
       <div class="price">
        <div class="text-wrapper-7">Rp 65.000</div>
        <div class="text-wrapper-8">/ 1 hari</div>
       </div>
      </div>
     </div>
     <div class="card-3">
      <div class="da-fc-c-wrapper">
       <img class="da-fc-c"
        src="{{ asset('img/da063636-8fc8-49c2-9076-bba0d721f846-1-1.png') }}" />
      </div>
      <div class="text-2">
       <div class="review">
        <i class="fa-solid fa-star"
         style="color: #ECB009;"></i>
        <div class="text-wrapper-5">Termasuk Helm</div>
       </div>
       <div class="text-wrapper-6">Honda Vario</div>
       <div class="price">
        <div class="text-wrapper-7">Rp 80.000</div>
        <div class="text-wrapper-8">/ 1 hari</div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="overlap">
    <div class="card-promo">
     <div class="group">
      <img class="mask-group"
       src="{{ asset('img/mask-group.png') }}" />
      <div class="group-wrapper">
       <div class="group-2">
        <p class="p">Aktifkan &amp; Sambungkan GoPay &amp; GoPayLater di Tokopedia</p>
        <div class="group-3">
         <img class="img"
          src="{{ asset('img/image-11-2.png') }}" />
         <div class="text-wrapper-9">Makin Seru</div>
        </div>
       </div>
      </div>
     </div>
     <div class="group-4">
      <img class="mask-group-2"
       src="{{ asset('img/mask-group-1.png') }}" />
      <div class="group-wrapper">
       <div class="group-2">
        <p class="p">Sambungin Akun ke Tokopedia, Banyakin Untung</p>
        <div class="group-3">
         <img class="image-2"
          src="{{ asset('img/image-11-2.png') }}" />
         <div class="text-wrapper-9">Makin Seru</div>
        </div>
       </div>
      </div>
     </div>
     <div class="group-5">
      <img class="mask-group-3"
       src="{{ asset('img/mask-group-2.png') }}" />
      <div class="group-wrapper">
       <div class="group-2">
        <p class="p">Promo Belanja Online 10.10: Cashback hingga Rp100.000</p>
        <div class="group-3">
         <img class="image-3"
          src="{{ asset('img/image-11-2.png') }}" />
         <div class="text-wrapper-9">Makin Seru</div>
        </div>
       </div>
      </div>
     </div>
    </div>

    <div class="BNB">
     <div class="frame">
      <div class="navigation-menu-home">
       <i class="img-2 fa-solid fa-house"
        style="color: #E6A43B;"></i>
       <div class="text-wrapper-10">Home</div>
      </div>
      <div class="navigation-menu-home">
       <i class="img-2 fa-solid fa-search"
        style="color: #E6A43B;"></i>
       <div class="text-wrapper-10">Notifikasi</div>
      </div>
     </div>
     <div class="frame-2">
      <div class="navigation-menu-home">
       <i class="img-2 fa-solid fa-cart-shopping"
        style="color: #E6A43B;"></i>
       <div class="text-wrapper-10">Status</div>
      </div>
      <div class="navigation-menu-home">
       <i class="img-2 fa-solid fa-user"
        style="color: #E6A43B;"></i>
       <div class="text-wrapper-10">Profil</div>
      </div>
     </div>
     <div class="frame-wrapper">
      <div class="shop-wrapper">
       <i class="img-2 fa-solid fa-shop"></i>
      </div>
     </div>
    </div>

   </div>
  </div>
 </div>

@endsection
