<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Models\Muhadasa;
use App\Models\Qisah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MuhadasaController extends Controller
{
    public function muhadasa($id)
    {
        $bab = new Muhadasa();

        $muhadasah = $bab->where('bab', $id)->with('berkas')->get();
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
        // save file audio
        $uploadFileAudio = $request->file('file_audio');
        $filenameAudio = time().$uploadFileAudio->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'muhadasa/',
            $uploadFileAudio,
            $filenameAudio
        );

        $muhadasa = Muhadasa::firstOrCreate(
            ['soal' => $request->soal, 'bab' => $id],
            ['soal' => $request->soal, 'bab' => $id]
        );

        //save file to berkas database
        $berkasAudio = new Berkas();
        $berkasAudio->muhadasa_id = $muhadasa->getKey();
        $berkasAudio->file_name = $filenameAudio;
        $berkasAudio->type = 1;
        $berkasAudio->save();

        return "success";
    }

    public function update(Request $request, $bab, $id)
    {
        try {
            $request->validate([
                'file_audio' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',
            ]);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 422);
        }
        // save file audio
        $uploadFileAudio = $request->file('file_audio');
        $filenameAudio = time().$uploadFileAudio->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'muhadasa/',
            $uploadFileAudio,
            $filenameAudio
        );

        $muhadasa = Muhadasa::firstOrCreate(
            ['soal' => $request->soal, 'bab' => $id],
            ['soal' => $request->soal, 'bab' => $id]
        );

        //save file to berkas database
        $berkasAudio = new Berkas();
        $berkasAudio->muhadasa_id = $muhadasa->getKey();
        $berkasAudio->file_name = $filenameAudio;
        $berkasAudio->type = 1;
        $berkasAudio->save();

        return "success";
    }

    public function getAllKhiwar($bab)
    {
        $bab = new Muhadasa();

        $muhadasah = $bab->where('bab', $bab)->with('berkas')->get();
        return $muhadasah;
    }
    public function viewMuhadasa($id)
    {
        $bab = new Muhadasa();

        $muhadasah = $bab->where('bab', $id)->with('berkas')->get();
        // return $muhadasah;
        return view('muhadasa', ['id'=>$id, 'data' => $muhadasah]);
    }
    public function uploadQisah(Request $request, $bab)
    {
        try {
            $request->validate([
                'file_video' => 'mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4',
            ]);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 422);
        }

        // save file audio
        $uploadVideo = $request->file('file_video');
        $filenameVideo = time().$uploadVideo->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'qisah/',
            $uploadVideo,
            $filenameVideo
        );


        $qisah = new Qisah();
        $qisah->bab = $bab;
        $qisah->save();

        //save file to berkas database
        $berkasAudio = new Berkas();
        $berkasAudio->qisah_id = $qisah->getKey();
        $berkasAudio->file_name = $filenameVideo;
        $berkasAudio->type = 3;
        $berkasAudio->save();

        return "success";
    }
    public function viewQisah($bab)
    {
        $qisah =   Qisah::where('bab', $bab)->with('berkas')->get();
        return view('qisah', ['id'=>$bab, 'data' => $qisah]);
    }
}
