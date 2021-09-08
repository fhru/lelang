<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';

    public function pelelang()
    {
        return $this->belongsToMany(Pelelang::class)->withPivot(['bid'])->orderBy('bid', 'DESC')->take(3);
    }
}
