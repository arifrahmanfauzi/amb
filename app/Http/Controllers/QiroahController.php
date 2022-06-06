<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qiroah;

class QiroahController extends Controller
{
    public function viewQiroah($bab)
    {
        return view('qiroah', ['bab'=>$bab]);
    }

    public function getAll($bab)
    {
        return Qiroah::whereNull('tamrin')->where('bab', $bab)->with('berkas')->get();
    }
    public function detailQiroah($bab)
    {
        $qiroah = Qiroah::where('bab', $bab)->whereNull('tamrin')->with('berkas')->get();
        return view('detail-qiroah', ['bab' => $bab, 'data' => $qiroah]);
    }

    public function viewTamrin($bab)
    {
        $qiroah = Qiroah::where('bab', $bab)->where('tamrin', 1)->get();
        return view('qiroah-tamrin', ['bab' => $bab, 'data' => $qiroah]);
    }
}
