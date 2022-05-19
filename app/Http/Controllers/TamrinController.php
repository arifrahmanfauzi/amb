<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamrin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Berkas;

class TamrinController extends Controller
{
    public function insertTamrin(Request $request, $bab)
    {
        // save file audio
        $uploadFile = $request->file('file');
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'tamrin/',
            $uploadFile,
            $filename
        );

        $tadrib = Tamrin::firstOrCreate(
            ['nomor_soal' => $request->nomor_soal, 'bab' => $bab],
            ['nomor_soal' => $request->nomor_soal, 'bab' => $bab]
        );

        //save file to berkas database
        $berkasAudio = new Berkas();
        $berkasAudio->tadrib_id = $tadrib->getKey();
        $berkasAudio->file_name = $filename;
        $berkasAudio->type = $request->type;
        $berkasAudio->save();

        //ini jawaban tamrin ikut tadrib
        DB::table('jawaban')->insert([
           ['tadrib_id' => $tadrib->getKey(), 'jawaban' => $request->a],
           ['tadrib_id' => $tadrib->getKey(), 'jawaban' => $request->b],
           ['tadrib_id' => $tadrib->getKey(), 'jawaban' => $request->c],
           ['tadrib_id' => $tadrib->getKey(), 'jawaban' => $request->d],
       ]);

        return "success";
    }

    public function viewTamrin($bab)
    {
        $tam = new Tamrin();

        $tamrin = $tam->where('bab', $bab)->with('berkas')->with('jawaban')->get();
        // return $tamrin;
        return view('tamrin', ['id' => $bab, 'data' => $tamrin]);
    }
    public function viewTamrinApi($bab)
    {
        $tam = new Tamrin();

        $tamrin = $tam->where('bab', $bab)->with('berkas')->with('jawaban')->get();
        return $tamrin;
        // return view('tamrin', ['id' => $bab, 'data' => $tamrin]);
    }
    public function createMuhadasa(Request $request, $bab)
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
            'tamrin/',
            $uploadFileAudio,
            $filenameAudio
        );

        $muhadasa = Tamrin::firstOrCreate(
            ['nomor_soal' => $request->nomor_soal, 'bab' => $bab],
            ['nomor_soal' => $request->nomor_soal, 'bab' => $bab]
        );

        //save file to berkas database
        $berkasAudio = new Berkas();
        $berkasAudio->tamrin_id = $muhadasa->getKey();
        $berkasAudio->file_name = $filenameAudio;
        $berkasAudio->type = $request->type;
        $berkasAudio->save();

        return "success";
    }
}
