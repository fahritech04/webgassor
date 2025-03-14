@extends('layouts.app')

@section('title', 'Kategori Motor')

@section('vendor-style')
 <link rel="stylesheet" href="{{ asset('css/motor/kategorimotor.css') }}">
@endsection

@section('page-style')
@endsection

@section('content')
    <div class="element-kategori-motor">
        <div class="div">
        <header class="header">
            <a href="{{ url('/home') }}" style="color: inherit; text-decoration: none;">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
            <div class="placeholder-2">Kategori</div>
        </header>
            <div class="filter">
                <div class="input-field">
                    <div class="item">
                        <i class="fa-solid fa-search"></i>
                        <div class="placeholder">Cari Motor...</div>
                    </div>
                </div>
            </div>
            <div class="slide">
                @foreach($motors as $motor)
                <div class="card">
                    <div class="image">
                        <img class="element" src="{{ asset($motor['image']) }}" alt="{{ $motor['name'] }}">
                    </div>
                    <div class="text">
                        <div class="review">
                        <i class="fa-solid fa-star" style="color: #ECB009;"></i>
                            <div class="text-wrapper">{{ $motor['feature'] }}</div>
                        </div>
                        <div class="text-wrapper-2">{{ $motor['name'] }}</div>
                        <div class="price">
                            <div class="text-wrapper-3">Rp {{ number_format($motor['price'], 0, ',', '.') }}</div>
                            <div class="text-wrapper-4">/ 1 hari</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
