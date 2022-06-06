<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiil extends Model
{
    use HasFactory;

    protected $table = 'fiil';
    protected $guarded = [];

    public $timestamps = false;
}
