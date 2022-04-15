<?php

namespace App\Http\Controllers;

use App\Models\Tadrib;
use Illuminate\Http\Request;

class TadribController extends Controller
{
    public function tadrib(Request $request, $id)
    {
        $bab = new Tadrib();

        $tadrib = $bab->where('bab', $id)->with('berkas')->with('jawaban')->get();
        return $tadrib;
    }
}
