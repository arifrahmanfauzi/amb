<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qawait extends Model
{
    use HasFactory;
    protected $table = 'qawait';

    public $timestamps = false;

    public function berkas()
    {
        return $this->hasMany(Berkas::class, 'mufrodat_id', 'id');
    }
}
