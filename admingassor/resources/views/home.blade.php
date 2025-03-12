<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    @vite(['resources/css/home.css', 'resources/js/kategorimotor.js'])
</head>
<body>
<div class="element-home">
  <div class="div">
    <div class="overlap-group">
      <header class="header">
        <div class="text">
          <div class="text-wrapper">Halo, Noval!</div>
          <div class="address">
            <img class="icon-bold-pin" src="{{ asset('img/icon-bold-pin.svg') }}" />
            <div class="text-wrapper-2">Bandung, Indonesia</div>
          </div>
        </div>
        <div class="item">
          <img class="icon-bold" src="{{ asset('img/icon-bold-notification.svg') }}" />
          <div class="profile-picture">
            <img class="icon-outline-user" src="{{ asset('img/icon-outline-user.svg') }}" />
          </div>
        </div>
      </header>
      <div class="card">
        <div class="input-field">
          <div class="item-2">
            <img class="icon-outline-search" src="{{ asset('img/icon-outline-search.svg') }}" />
            <input class="placeholder" placeholder="Search car..." type="text" />
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="section-2">
        <div class="text-wrapper-3">Motor Tersedia</div>
        <div class="text-wrapper-4">Selengkapnya</div>
      </div>
      <div class="slide">
        <div class="card-2">
          <div class="image">
            <img class="element" src="{{ asset('img/966d4328-5e60-4f37-9e65-8a067e455606-2-1.png') }}" />
          </div>
          <div class="text-2">
            <div class="review">
              <img class="icon-bold-star" src="{{ asset('img/icon-bold-star.svg') }}" />
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
            <img class="da-fc-c" src="{{ asset('img/da063636-8fc8-49c2-9076-bba0d721f846-1-1.png') }}" />
          </div>
          <div class="text-2">
            <div class="review">
              <img class="icon-bold-star" src="{{ asset('img/icon-bold-star.svg') }}" />
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
          <img class="mask-group" src="{{ asset('img/mask-group.png') }}" />
          <div class="group-wrapper">
            <div class="group-2">
              <p class="p">Aktifkan &amp; Sambungkan GoPay &amp; GoPayLater di Tokopedia</p>
              <div class="group-3">
                <img class="img" src="{{ asset('img/image-11-2.png') }}" />
                <div class="text-wrapper-9">Makin Seru</div>
              </div>
            </div>
          </div>
        </div>
        <div class="group-4">
          <img class="mask-group-2" src="{{ asset('img/mask-group-1.png') }}" />
          <div class="group-wrapper">
            <div class="group-2">
              <p class="p">Sambungin Akun ke Tokopedia, Banyakin Untung</p>
              <div class="group-3">
                <img class="image-2" src="{{ asset('img/image-11-2.png') }}" />
                <div class="text-wrapper-9">Makin Seru</div>
              </div>
            </div>
          </div>
        </div>
        <div class="group-5">
          <img class="mask-group-3" src="{{ asset('img/mask-group-2.png') }}" />
          <div class="group-wrapper">
            <div class="group-2">
              <p class="p">Promo Belanja Online 10.10: Cashback hingga Rp100.000</p>
              <div class="group-3">
                <img class="image-3" src="{{ asset('img/image-11-2.png') }}" />
                <div class="text-wrapper-9">Makin Seru</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="BNB">
        <div class="frame">
          <div class="navigation-menu-home">
            <img class="img-2" src="{{ asset('img/home.svg') }}" />
            <div class="text-wrapper-10">Home</div>
          </div>
          <div class="navigation-menu-home-2">
            <img class="img-2" src="{{ asset('img/search.svg') }}" />
            <div class="text-wrapper-10">Notifikasi</div>
          </div>
        </div>
        <div class="frame-2">
          <div class="navigation-menu-home">
            <img class="img-2" src="{{ asset('img/cart.svg') }}" />
            <div class="text-wrapper-10">Status</div>
          </div>
          <div class="navigation-menu-home">
            <img class="img-2" src="{{ asset('img/user.svg') }}" />
            <div class="text-wrapper-10">Profil</div>
          </div>
        </div>
        <div class="frame-wrapper">
          <div class="shop-wrapper">
            <img class="img-2" src="{{ asset('img/shop.svg') }}" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
