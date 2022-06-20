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
        if ($bab == 6) {
            $fiil = Fiil::where('bab', $bab)->get();
            return view('fiil', ['bab' => $bab, 'data' => $fiil]);
        }
        if ($bab == 5 || 4) {
            $fiil = Fiil::where('bab', $bab)->get();
            return view('viewfiil', ['bab' => $bab, 'data' => $fiil]);
        }
    }

    public function viewTamrin($bab)
    {
        if ($bab == 6) {
            # code...
            return view('qawait-tamrin', ['bab' => $bab]);
        }
        if ($bab == 5 || 4) {
            $fiil = Fiil::where('bab', $bab)->where('tamrin', 1)->get();
            return view('viewqawait-tamrin', ['bab' => $bab, 'data' => $fiil]);
        }
    }
}
