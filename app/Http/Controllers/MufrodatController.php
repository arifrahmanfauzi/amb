<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\Mufrodat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MufrodatController extends Controller
{
    public function upload(Request $request)
    {
        try {
            $request->validate([
                'file_audio' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav'
            ]);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 422);
        }


        $uploadFile = $request->file('file_audio');
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'mufrodat/',
            $uploadFile,
            $filename
        );
        return $filename;
    }
    public function mufrodat(Request $request, $id, $mufrodat)
    {
        $bab = new Mufrodat();

        $mufrot = $bab->where('bab', $id)->where('id', $mufrodat)->with('berkas')->get();
        return $mufrot;
    }

}
