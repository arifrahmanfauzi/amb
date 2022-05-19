<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qasirah extends Model
{
    use HasFactory;
    protected $table = 'qasirah';
    protected $fillable = ['id','bab','nomor'];
    public $timestamps = false;

    public function berkas()
    {
        return $this->hasMany(Berkas::class, 'qasirah_id', 'id');
    }
}
