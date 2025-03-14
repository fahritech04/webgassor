@extends('layouts.app')

@section('title', 'Kategori Motor')

@section('vendor-style')
 <link rel="stylesheet" href="{{ asset('css/motor/detailmotor.css') }}">
@endsection

@section('page-style')
@endsection

@section('content')
    <div class="element-detail-motor">
        <div class="item-wrapper">
            <div class="item">
                <div class="div">
                    {{-- <img class="element" src="https://c.animaapp.com/m8653slo3c4TnY/img/element.svg" alt="Element"> --}}
                    <header class="header">
                        <img class="img" src="https://c.animaapp.com/m8653slo3c4TnY/img/icon-outline-close.svg" alt="Close">
                    </header>
                    <div class="image">
                        <div class="image-placeholder">
                            <img class="element-d-e-f" src="https://c.animaapp.com/m8653slo3c4TnY/img/966d4328-5e60-4f37-9e65-8a067e455606-2.png" alt="Motor">
                        </div>
                    </div>
                    <div class="content">
                        <div class="div-2">
                            <div class="text-wrapper">
                                <div class="text">
                                    <div class="review">
                                        <img class="icon-bold-star" src="https://c.animaapp.com/m8653slo3c4TnY/img/icon-bold-star.svg" alt="Star">
                                        <div class="text-wrapper-2">Termasuk Helm</div>
                                    </div>
                                    <div class="text-wrapper-3">Yamaha Soul GT</div>
                                </div>
                            </div>
                            <p class="motor-ini-memiliki">
                                Motor ini memiliki mesin 125 cc dengan sistem bahan bakar fuel injection.
                            </p>
                        </div>
                        <div class="card">
                            <div class="text-2">
                                <div class="text-wrapper-4">Plat Nomor</div>
                                <div class="text-wrapper-5">D 12345 AB</div>
                            </div>
                            <div class="text-2">
                                <div class="text-wrapper-4">Bahan Bakar</div>
                                <div class="text-wrapper-5">Pertalite</div>
                            </div>
                            <div class="text-2">
                                <div class="text-wrapper-4">Kapasitas Mesin</div>
                                <div class="text-wrapper-5">125 CC</div>
                            </div>
                            <div class="text-2">
                                <div class="text-wrapper-4">STNK</div>
                                <div class="text-wrapper-5">Tersedia</div>
                            </div>
                            <div class="text-2">
                                <div class="text-wrapper-4">Warna Motor</div>
                                <div class="text-wrapper-5">Putih</div>
                            </div>
                            <div class="text-2">
                                <div class="text-wrapper-4">Fuel Type</div>
                                <div class="text-wrapper-5">Gasoline</div>
                            </div>
                        </div>
                        <div class="card-2">
                            <div class="profile-picture">
                                <img class="icon-outline-user" src="https://c.animaapp.com/m8653slo3c4TnY/img/icon-outline-user.svg" alt="User">
                            </div>
                            <div class="text-3">
                                <div class="text-wrapper-6">Rihansen</div>
                                <div class="text-wrapper-7">Pemilik Motor</div>
                            </div>
                            <div class="icon">
                                <img class="icon-outline-chat" src="https://c.animaapp.com/m8653slo3c4TnY/img/icon-outline-chat.svg" alt="Chat">
                            </div>
                        </div>
                        <div class="div-2">
                            <div class="text-wrapper-8">Pilih Paket</div>
                            <div class="category">
                                <div class="item-2">
                                    <div class="text-wrapper-9">12 Jam</div>
                                    <div class="text-wrapper-10">Rp 40.000</div>
                                </div>
                                <div class="item-3">
                                    <div class="text-wrapper-9">24 Jam</div>
                                    <div class="text-wrapper-10">Rp 65.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="button"><div class="placeholder">Pesan Sekarang</div></button>
            </div>
        </div>
    </div>
@endsection
