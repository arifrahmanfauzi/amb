<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qiroah extends Model
{
    use HasFactory;
    protected $table = 'qiroah';

    public $timestamps = false;

    public function berkas()
    {
        return $this->hasMany(Berkas::class, 'qiroah_id', 'id');
    }
}
