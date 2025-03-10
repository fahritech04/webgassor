<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'penyewa_id', 'id');
    }

    public function motor()
    {
        return $this->belongsTo(Motor::class, 'motor_id', 'id');
    }

    public static function boot()
    {
        parent::boot();

        static::created(function ($sewa) {
            $sewa->sewa_uuid .= 'sewa-' . $sewa->id;
            $sewa->save();
        });
    }
}
