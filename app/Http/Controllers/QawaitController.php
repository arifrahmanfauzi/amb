<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QawaitController extends Controller
{
    public function viewQawait($bab)
    {
        return view('qawait', ['bab'=>$bab]);
    }
}
