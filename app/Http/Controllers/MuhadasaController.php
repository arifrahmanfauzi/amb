<?php

namespace App\Http\Controllers;

use App\Models\Muhadasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MuhadasaController extends Controller
{
    public function muhadasa(Request $request, $id, $muhadasa)
    {
        $bab = new Muhadasa();

        $muhadasah = $bab->where('bab', $id)->where('id', $muhadasa)->with('berkas')->get();
        return $muhadasah;
    }

    public function create(Request $request, $id)
    {
        try {
            $request->validate([
                'file_audio' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',
            ]);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 422);
        }
        //save file audio
        $uploadFileAudio = $request->file('file_audio');
        $filenameAudio = time().$uploadFileAudio->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'muhadasa/',
            $uploadFileAudio,
            $filenameAudio
        );
    }
}
