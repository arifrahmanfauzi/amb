<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamrin extends Model
{
    use HasFactory;
    protected $table = 'tamrin';

    public $timestamps = false;
    protected $fillable = ['nomor_soal','bab'];
    public function jawaban()
    {
        return $this->hasMany(Jawaban::class, 'tadrib_id', 'id');
    }
    public function berkas()
    {
        return $this->hasMany(Berkas::class, 'tamrin_id', 'id');
    }
}
