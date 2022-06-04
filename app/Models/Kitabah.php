<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitabah extends Model
{
    use HasFactory;
    protected $table = 'kitabah';

    public $timestamps = false;

    public function berkas()
    {
        return $this->hasMany(Berkas::class, 'mufrodat_id', 'id');
    }
}
