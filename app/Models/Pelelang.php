<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelelang extends Model
{
    protected $table = 'pelelang';

    public function barang()
    {
        return $this->belongsToMany(Barang::class)->withPivot(['bid'])->orderBy('bid', 'DESC')->take(3);
    }
}
