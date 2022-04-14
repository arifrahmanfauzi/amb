<?php

namespace App\Http\Controllers;

use App\Models\Muhadasa;
use Illuminate\Http\Request;

class MuhadasaController extends Controller
{
    public function muhadasa(Request $request, $id, $muhadasa)
    {
        $bab = new Muhadasa();

        $muhadasah = $bab->where('bab', $id)->where('id', $muhadasa)->with('berkas')->get();
        return $muhadasah;
    }
}
