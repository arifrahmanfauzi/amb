<?php

namespace App\Http\Controllers;

use App\Models\Fiil;
use Illuminate\Http\Request;

class QawaitController extends Controller
{
    public function viewQawait($bab)
    {
        return view('qawait', ['bab'=>$bab]);
    }

    public function viewFiil($bab)
    {
        $fiil = Fiil::where('bab', $bab)->get();
        return view('fiil', ['bab' => $bab, 'data' => $fiil]);
    }

    public function viewTamrin($bab)
    {
        return view('qawait-tamrin', ['bab' => $bab]);
    }
}
