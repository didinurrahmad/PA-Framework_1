<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    public function Kelas(){
        return $this->belongsTo(Kelas::class);
    }
    use HasFactory;

    protected $table = "pesertas";
    protected $fillable = ['id', 'nama', 'alamat', 'no_hp', 'kelas_id'];
}
