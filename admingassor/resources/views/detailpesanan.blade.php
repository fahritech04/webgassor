@extends('layouts.app')

@section('title', 'Kategori Motor')

@section('vendor-style')
 <link rel="stylesheet" href="{{ asset('css/motor/detailpesanan.css') }}">
@endsection

@section('page-style')
@endsection

@section('content')
<div class="element-detail-pesanan">
    <div class="div">
        <header class="header">
            <div class="item-6">
                <img class="img" src="https://c.animaapp.com/m872dfnzdLAm5F/img/icon-linear-chevron-left.svg" alt="Back">
                <div class="placeholder">Detail Pesanan</div>
            </div>
        </header>
        <div class="item">
            <div class="card">
                <div class="image">
                    <img class="element" src="https://c.animaapp.com/m872dfnzdLAm5F/img/966d4328-5e60-4f37-9e65-8a067e455606-3.png" alt="Motor">
                </div>
                <div class="text">
                    <div class="review">
                        <img class="icon-bold-star" src="https://c.animaapp.com/m872dfnzdLAm5F/img/icon-bold-star.svg" alt="Star">
                        <div class="text-wrapper">Termasuk Helm</div>
                    </div>
                    <div class="text-wrapper-2">Yamaha Soul GT</div>
                </div>
            </div>
            <div class="card-2">
                <div class="profile-picture">
                    <img class="icon-outline-user" src="https://c.animaapp.com/m872dfnzdLAm5F/img/icon-outline-user.svg" alt="User">
                </div>
                <div class="text-2">
                    <div class="text-wrapper-3">Rihansen</div>
                    <div class="text-wrapper-4">Penyewa</div>
                </div>
                <div class="icon">
                    <img class="img" src="https://c.animaapp.com/m872dfnzdLAm5F/img/icon-outline-chat.svg" alt="Chat">
                </div>
            </div>
            <div class="item-2">
                <div class="text-wrapper-5">Detail</div>
                <div class="item-3">
                    <div class="item-4">
                        <div class="text-wrapper-6">Nama</div>
                        <div class="text-wrapper-7">Noval Ramadan</div>
                    </div>
                    <div class="item-4">
                        <div class="text-wrapper-6">Waktu yang Dipilih</div>
                        <div class="text-wrapper-7">09:00 - 21:00</div>
                    </div>
                    <div class="item-4">
                        <div class="text-wrapper-6">Tanggal yang Dipilih</div>
                        <div class="text-wrapper-7">11 Januari 2025</div>
                    </div>
                    <div class="item-4">
                        <div class="text-wrapper-6">Durasi</div>
                        <div class="text-wrapper-7">12 Jam</div>
                    </div>
                </div>
            </div>
            <div class="item-5">
                <div class="text-wrapper-5">Total Pembayaran</div>
                <div class="item-3">
                    <div class="item-4">
                        <p class="text-wrapper-6">Rp 40.000 x 12 Jam</p>
                        <div class="text-wrapper-7">Rp 40.000</div>
                    </div>
                    <img class="devider" src="https://c.animaapp.com/m872dfnzdLAm5F/img/devider.svg" alt="Divider">
                    <div class="item-4">
                        <div class="text-wrapper-6">Total</div>
                        <div class="text-wrapper-7">Rp 40.000</div>
                    </div>
                </div>
            </div>
            <div class="item-5">
                <div class="text-wrapper-5">Metode Pembayaran</div>
                <div class="card-list">
                    <div class="title">Pilih Metode Pembayaran</div>
                    <img class="icon-linear-chevron" src="https://c.animaapp.com/m872dfnzdLAm5F/img/icon-linear-chevron-right.svg" alt="Chevron">
                </div>
            </div>
        </div>
        <div class="button">
            <div class="placeholder-2">Pesan Sekarang</div>
            <div class="placeholder-2">Rp 40.000</div>
        </div>
    </div>
</div>
@endsection
