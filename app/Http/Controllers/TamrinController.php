<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TamrinType;
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

    public function insertTamrinMufrodat($bab, Request $request)
    {
        try {
            $request->validate([
                'file_audio' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',
                'file_image' => 'required|mimes:png,jpeg,jpg,svg'
            ]);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 422);
        }

        $uploadFileAudio = $request->file('file_audio');
        $filenameAudio = time().$uploadFileAudio->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'tamrin/',
            $uploadFileAudio,
            $filenameAudio
        );

        $uploadFileImage = $request->file('file_image');
        $filenameImage = time().$uploadFileImage->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'tamrin/',
            $uploadFileImage,
            $filenameImage
        );


        //save mufrodat to database
        $tamrin = new Tamrin();
        $tamrin->bab = $bab;
        $tamrin->nomor_soal = $request->nomor_soal;
        $tamrin->type = TamrinType::MUFRODAT;
        $tamrin->save();

        //save file to berkas database
        $berkasAudio = new Berkas();
        $berkasAudio->tamrin_id = $tamrin->getKey();
        $berkasAudio->file_name = $filenameAudio;
        $berkasAudio->type = 1;
        $berkasAudio->save();

        $berkasImage = new Berkas();
        $berkasImage->tamrin_id = $tamrin->getKey();
        $berkasImage->file_name = $filenameImage;
        $berkasImage->type = 2;
        $berkasImage->save();

        return "success";
    }
    public function insertTamrinIstima($bab, Request $request)
    {
        $tamrin = Tamrin::firstOrCreate(
            ['nomor_soal' => $request->nomor_soal, 'bab' => $bab, 'type' => TamrinType::ISTIMA, 'soal_jawaban' => $request->soal_jawaban],
            ['nomor_soal' => $request->nomor_soal, 'bab' => $bab, 'type' => TamrinType::ISTIMA, 'soal_jawaban' => $request->soal_jawaban]
        );

        // save file audio
        $uploadFile = $request->file('file_audio');
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'tamrin/',
            $uploadFile,
            $filename
        );

        //save file to berkas database
        $berkasAudio = new Berkas();
        $berkasAudio->tamrin_id = $tamrin->getKey();
        $berkasAudio->file_name = $filename;
        $berkasAudio->type = 1;
        $berkasAudio->save();

        return "success";
    }
    public function insertTamrinMuhadasa($bab, Request $request)
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

        $tamrin = Tamrin::firstOrCreate(
            ['nomor_soal' => $request->nomor_soal, 'bab' => $bab],
            ['nomor_soal' => $request->nomor_soal, 'bab' => $bab, 'type' => TamrinType::MUHADASA, 'soal_jawaban' => $request->soal_jawaban]
        );

        //save file to berkas database
        $berkasAudio = new Berkas();
        $berkasAudio->tamrin_id = $tamrin->getKey();
        $berkasAudio->file_name = $filenameAudio;
        $berkasAudio->type = 1;
        $berkasAudio->save();

        return "success";
    }
    public function insertTamrinKalam($bab, Request $request)
    {
        $kalam = new Tamrin();
        $kalam->bab = $bab;
        $kalam->type = TamrinType::KALAM;
        $kalam->nomor_soal = $request->nomor_soal;
        $kalam->soal_jawaban = $request->soal_jawaban;
        $kalam->save();

        return "success";
    }
    public function insertTamrinQiroah($bab, Request $request)
    {
        $kalam = new Tamrin();
        $kalam->bab = $bab;
        $kalam->type = TamrinType::QIROAH;
        $kalam->nomor_soal = $request->nomor_soal;
        $kalam->soal_jawaban = $request->soal_jawaban;
        $kalam->save();

        return "success";
    }
    public function insertTamrinKitabah($bab, Request $request)
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

        $tamrin = Tamrin::firstOrCreate(
            ['nomor_soal' => $request->nomor_soal, 'bab' => $bab, 'type' => TamrinType::KITABAH, 'soal_jawaban' => $request->soal_jawaban],
            ['nomor_soal' => $request->nomor_soal, 'bab' => $bab, 'type' => TamrinType::KITABAH, 'soal_jawaban' => $request->soal_jawaban]
        );

        //save file to berkas database
        $berkasAudio = new Berkas();
        $berkasAudio->tamrin_id = $tamrin->getKey();
        $berkasAudio->file_name = $filenameAudio;
        $berkasAudio->type = 1;
        $berkasAudio->save();

        return "success";
    }
    public function viewTamrin($bab)
    {
        $tam = new Tamrin();

        if ($bab == 6) {
            # code...
            $tamrin = $tam->where('bab', $bab)->with('berkas')->with('jawaban')->get();
            // return $tamrin;
            return view('tamrin', ['id' => $bab, 'data' => $tamrin]);
        }

        if ($bab == 4 || 5) {
            $tamrin = $tam->where('bab', $bab)->with('berkas')->with('jawaban')->get();

            return view('viewTamrin', ['bab' => $bab, 'data' => $tamrin]);
        }
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
