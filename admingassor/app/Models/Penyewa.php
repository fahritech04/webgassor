<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function boot()
    {
        parent::boot();

        static::created(function ($penyewa) {
            $penyewa->restuid .= 'rent-'. $penyewa->id;
            $penyewa->save();
        });
    }
}
