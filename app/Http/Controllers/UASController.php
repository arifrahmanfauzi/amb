<?php

namespace App\Http\Controllers;

use App\Models\Uas;
use Illuminate\Http\Request;

class UASController extends Controller
{
    public function viewUAS(Request $request)
    {
        $uas = new Uas();

        return view('uas', ['data' => $uas->getAll()]);
    }
}
