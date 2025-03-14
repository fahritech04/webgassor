@extends('layouts.app')

@section('title', 'Kategori Motor')

@section('vendor-style')
 <link rel="stylesheet" href="{{ asset('css/motor/pesan.css') }}">
@endsection

@section('page-style')
@endsection

@section('content')
    <div class="element-detail-pesanan">
        <div class="div">
            <header class="header">
                <div class="item-3">
                    <a href="{{ url('/home') }}" style="color: inherit; text-decoration: none;">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                    <div class="placeholder-3">Pesan</div>
                </div>
            </header>
            <div class="frame">
                <div class="card">
                    <div class="image">
                        <img class="element" src="https://c.animaapp.com/m865lr2aVTBkkq/img/966d4328-5e60-4f37-9e65-8a067e455606-3.png" />
                    </div>
                    <div class="text">
                        <div class="review">
                            <img class="icon-bold-star" src="https://c.animaapp.com/m865lr2aVTBkkq/img/icon-bold-star.svg" />
                            <div class="text-wrapper">Termasuk Helm</div>
                        </div>
                        <div class="text-wrapper-2">Yamaha Soul GT</div>
                    </div>
                </div>
                <div class="card-2">
                    <div class="profile-picture">
                        <img class="icon-outline-user" src="https://c.animaapp.com/m865lr2aVTBkkq/img/icon-outline-user.svg" />
                    </div>
                    <div class="text-2">
                        <div class="text-wrapper-3">Rihansen</div>
                        <div class="text-wrapper-4">Pemilik Motor</div>
                    </div>
                    <div class="icon">
                        <img class="img" src="https://c.animaapp.com/m865lr2aVTBkkq/img/icon-outline-chat.svg" />
                    </div>
                </div>
                <div class="div-2">
                    <div class="text-wrapper-5">Pilih Paket</div>
                    <div class="category">
                        <div class="item">
                            <div class="text-wrapper-6">12 Jam</div>
                            <div class="text-wrapper-7">Rp 40.000</div>
                        </div>
                        <div class="item-2">
                            <div class="text-wrapper-6">24 Jam</div>
                            <div class="text-wrapper-7">Rp 65.000</div>
                        </div>
                    </div>
                </div>
                <div class="div-2">
                    <div class="text-wrapper-5">Tanggal sewa</div>
                    <div class="form">
                        <div class="div-wrapper"><div class="text-wrapper-8">Jam</div></div>
                        <div class="form-2">
                            <div class="input-field">
                                <div class="placeholder">09:00</div>
                                <img class="img" src="https://c.animaapp.com/m865lr2aVTBkkq/img/icon-outline-timer.svg" />
                            </div>
                            <img class="element-2" src="https://c.animaapp.com/m865lr2aVTBkkq/img/element.svg" />
                            <div class="input-field">
                                <div class="placeholder">21:00</div>
                                <img class="img" src="https://c.animaapp.com/m865lr2aVTBkkq/img/icon-outline-timer.svg" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-2">
                    <div class="form-3">
                        <div class="div-wrapper"><div class="text-wrapper-8">Tanggal</div></div>
                        <div class="input-field-2">
                            <img class="img" src="https://c.animaapp.com/m865lr2aVTBkkq/img/icon-outline-calendar.svg" />
                        </div>
                        <div class="calendar-white">
                            <div class="div-3">
                                <div class="text-wrapper-9">Januari 2025</div>
                                <div class="icon-2">
                                    <img class="icon-linear-chevron" src="https://c.animaapp.com/m865lr2aVTBkkq/img/icon-linear-chevron-left.svg" />
                                    <img class="icon-linear-chevron" src="https://c.animaapp.com/m865lr2aVTBkkq/img/icon-linear-chevron-right.svg" />
                                </div>
                            </div>
                            <img class="divider" src="https://c.animaapp.com/m865lr2aVTBkkq/img/divider.svg" />
                            <div class="month">
                                <div class="div-3">
                                    <div class="day"><div class="text-wrapper-10">S</div></div>
                                    <div class="day"><div class="text-wrapper-10">M</div></div>
                                    <div class="day"><div class="text-wrapper-10">T</div></div>
                                    <div class="day"><div class="text-wrapper-10">W</div></div>
                                    <div class="day"><div class="text-wrapper-10">T</div></div>
                                    <div class="day"><div class="text-wrapper-10">F</div></div>
                                    <div class="day"><div class="text-wrapper-10">S</div></div>
                                </div>
                                <div class="div-3">
                                    <div class="day"><div class="text-wrapper-11">30</div></div>
                                    <div class="day"><div class="text-wrapper-12">1</div></div>
                                    <div class="day"><div class="text-wrapper-12">2</div></div>
                                    <div class="day"><div class="text-wrapper-12">3</div></div>
                                    <div class="day"><div class="text-wrapper-12">4</div></div>
                                    <div class="day"><div class="text-wrapper-12">5</div></div>
                                    <div class="day"><div class="text-wrapper-12">6</div></div>
                                </div>
                                <div class="div-3">
                                    <div class="day"><div class="text-wrapper-12">7</div></div>
                                    <div class="day"><div class="text-wrapper-12">8</div></div>
                                    <div class="day"><div class="text-wrapper-12">9</div></div>
                                    <div class="day"><div class="text-wrapper-12">10</div></div>
                                    <div class="day-2"><div class="text-wrapper-12">11</div></div>
                                    <div class="day-3"><div class="text-wrapper-12">12</div></div>
                                    <div class="day-3"><div class="text-wrapper-12">13</div></div>
                                </div>
                                <div class="div-3">
                                    <div class="day-3"><div class="text-wrapper-12">14</div></div>
                                    <div class="day-3"><div class="text-wrapper-12">15</div></div>
                                    <div class="day"><div class="text-wrapper-12">16</div></div>
                                    <div class="day"><div class="text-wrapper-12">17</div></div>
                                    <div class="day"><div class="text-wrapper-12">18</div></div>
                                    <div class="day"><div class="text-wrapper-12">19</div></div>
                                    <div class="day"><div class="text-wrapper-12">20</div></div>
                                </div>
                                <div class="div-3">
                                    <div class="day"><div class="text-wrapper-12">21</div></div>
                                    <div class="day"><div class="text-wrapper-12">22</div></div>
                                    <div class="day"><div class="text-wrapper-12">23</div></div>
                                    <div class="day"><div class="text-wrapper-12">24</div></div>
                                    <div class="day"><div class="text-wrapper-12">25</div></div>
                                    <div class="day"><div class="text-wrapper-12">26</div></div>
                                    <div class="day"><div class="text-wrapper-12">27</div></div>
                                </div>
                                <div class="div-3">
                                    <div class="day"><div class="text-wrapper-12">28</div></div>
                                    <div class="day"><div class="text-wrapper-12">29</div></div>
                                    <div class="day"><div class="text-wrapper-12">30</div></div>
                                    <div class="day"><div class="text-wrapper-12">31</div></div>
                                    <div class="day"><div class="text-wrapper-11">1</div></div>
                                    <div class="day"><div class="text-wrapper-11">2</div></div>
                                    <div class="day"><div class="text-wrapper-11">3</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="button"><div class="placeholder-2">Pesan Sekarang</div></button>
            {{-- <header class="header">
                <div class="item-3">
                    <img class="img" src="https://c.animaapp.com/m865lr2aVTBkkq/img/icon-linear-chevron-left.svg" />
                    <div class="placeholder-3">Pesan</div>
                </div>
            </header> --}}
        </div>
    </div>
@endsection
