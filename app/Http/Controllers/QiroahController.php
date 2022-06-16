<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qiroah;
use App\Models\Berkas;
use Illuminate\Support\Facades\Storage;

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
    public function uploadQiroah($bab, Request $request)
    {
        $qiroah = new Qiroah();

        $qiroah->bab = $bab;
        $qiroah->soal = $request->soal;
        $qiroah->tamrin = $request->tamrin;
        $qiroah->link = $request->link;
        $qiroah->text = $request->text;
        $qiroah->save();

        // save file audio
        $uploadVideo = $request->file('file_video');
        $filenameVideo = time().$uploadVideo->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'qiroah/',
            $uploadVideo,
            $filenameVideo
        );
        //save file to berkas database
        $berkasAudio = new Berkas();
        $berkasAudio->qiroah_id = $qiroah->getKey();
        $berkasAudio->file_name = $filenameVideo;
        $berkasAudio->type = 3;
        $berkasAudio->save();

        return "success";
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
