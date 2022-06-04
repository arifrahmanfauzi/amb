<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KitabahController extends Controller
{
    public function viewKitabah($bab)
    {
        return view('kitabah', ['bab'=>$bab]);
    }
}
