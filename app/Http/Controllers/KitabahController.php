<?php

namespace App\Http\Controllers;

use App\Models\Kitabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Berkas;
use DB;

class KitabahController extends Controller
{
    public function viewKitabah($bab)
    {
        return view('kitabah', ['bab'=>$bab]);
    }
    public function detailKitabah($bab)
    {
        $kitabah = Kitabah::where('bab', $bab)->whereNull('tamrin')->get();
        return view('detail-kitabah', ['bab' => $bab, 'data' => $kitabah]);
    }
    public function uploadKitabah($bab, Request $request)
    {
        $kitabah = new Kitabah();
        $kitabah->bab = $bab;
        $kitabah->text = $request->text;
        $kitabah->tamrin = $request->tamrin;
        $kitabah->link = $request->link;
        $kitabah->save();

        return "success";
    }

    public function uploadTamrin($bab, Request $request)
    {
        try {
            $request->validate([
                'file_audio' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',
            ]);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 422);
        }

        // save file audio
        $uploadAudio = $request->file('file_audio');
        $filenameAudio = time().$uploadAudio->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'kitabah/',
            $uploadAudio,
            $filenameAudio
        );


        $kitabah_id = DB::table('kitabah')->select('id')->where('tamrin', 1)->where('bab', $bab)->get();

        //save file to berkas database
        $berkasAudio = new Berkas();
        $berkasAudio->kitabah_id = $kitabah_id[0]->id;
        $berkasAudio->file_name = $filenameAudio;
        $berkasAudio->type = 1;
        $berkasAudio->save();

        return "success";
    }

    public function viewTamrin($bab)
    {
        $data =  Kitabah::where('tamrin', 1)->where('bab', $bab)->with('berkas')->get();
        return view('kitabah-tamrin', ['bab' => $bab, 'data'=>$data]);
    }
}
