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
        return Qiroah::where('bab', $bab)->with('berkas')->get();
    }
    public function detailQiroah($bab)
    {
        $qiroah = Qiroah::where('bab', $bab)->with('berkas')->get();
        return view('detail-qiroah', ['bab' => $bab, 'data' => $qiroah]);
    }
}
