<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public function Peserta()
    {
        return $this->hasMany(Peserta::class);
    }
    use HasFactory;
}