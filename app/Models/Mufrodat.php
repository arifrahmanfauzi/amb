<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mufrodat extends Model
{
    use HasFactory;

    protected $table = 'mufrodat';

    public $timestamps = false;

    public function berkas()
    {
        return $this->hasMany(Berkas::class, 'mufrodat_id', 'id');
    }
}
