<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muhadasa extends Model
{
    use HasFactory;
    protected $table = 'muhadasa';

    public $timestamps = false;

    public function berkas()
    {
        return $this->hasMany(Berkas::class, 'muhadasa_id', 'id');
    }
}
