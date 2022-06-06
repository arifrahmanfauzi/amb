<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IstimaTamrin extends Model
{
    use HasFactory;

    protected $table = 'istima_tamrin';

    public $timestamps = false;

    public function berkas()
    {
        return $this->hasMany(Berkas::class, 'istima_tamrin_id', 'id');
    }
}
