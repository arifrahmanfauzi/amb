<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Models\Tadrib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TadribController extends Controller
{
    public function tadrib(Request $request, $id)
    {
        $bab = new Tadrib();

        $tadrib = $bab->where('bab', $id)->with('berkas')->with('jawaban')->get();
        return $tadrib;
    }
    public function create(Request $request, $id)
    {
        // save file audio
        $uploadFile = $request->file('file');
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'tadrib/',
            $uploadFile,
            $filename
        );

        $tadrib = Tadrib::firstOrCreate(
            ['nomor_soal' => $request->nomor_soal, 'bab' => $id],
            ['nomor_soal' => $request->nomor_soal, 'bab' => $id]
        );

        //save file to berkas database
        $berkasAudio = new Berkas();
        $berkasAudio->tadrib_id = $tadrib->getKey();
        $berkasAudio->file_name = $filename;
        $berkasAudio->type = $request->type;
        $berkasAudio->save();

        DB::table('jawaban')->insert([
            ['tadrib_id' => $tadrib->getKey(), 'jawaban' => $request->a],
            ['tadrib_id' => $tadrib->getKey(), 'jawaban' => $request->b],
            ['tadrib_id' => $tadrib->getKey(), 'jawaban' => $request->c],
            ['tadrib_id' => $tadrib->getKey(), 'jawaban' => $request->d],
        ]);

        return "success";
    }

    public function viewTadrib(Request $request, $id)
    {
        $bab = new Tadrib();

        $tadrib = $bab->where('bab', $id)->with('berkas')->with('jawaban')->get();

        return view('tadrib', ['id' => $id, 'data' => $tadrib]);
    }
}
