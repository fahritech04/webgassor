<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Motor Rental</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @vite(['resources/css/kategorimotor.css', 'resources/js/kategorimotor.js'])
</head>
<body>
    <div class="element-kategori-motor">
        <div class="div">
            <header class="header">
                <i class="fa-solid fa-chevron-left"></i>
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
                            <i class="fa-solid fa-star"></i>
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
</body>
</html>
