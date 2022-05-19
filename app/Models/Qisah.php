<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qisah extends Model
{
    use HasFactory;
    protected $table = 'qisah';
    protected $fillable = ['bab'];
    public $timestamps = false;

    public function berkas()
    {
        return $this->hasMany(Berkas::class, 'qisah_id', 'id');
    }
}
