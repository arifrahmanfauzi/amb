<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\Berkas;
use App\Models\Mufrodat;
use App\Models\Qasirah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MufrodatController extends Controller
{
    public function upload(Request $request, $id)
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
            'mufrodat/',
            $uploadFileAudio,
            $filenameAudio
        );

        $uploadFileImage = $request->file('file_image');
        $filenameImage = time().$uploadFileImage->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'mufrodat/',
            $uploadFileImage,
            $filenameImage
        );


        //save mufrodat to database
        $mufrodat = new Mufrodat();
        $mufrodat->bab = $id;
        $mufrodat->nama = $request->nama;
        $mufrodat->save();

        //save file to berkas database
        $berkasAudio = new Berkas();
        $berkasAudio->mufrodat_id = $mufrodat->getKey();
        $berkasAudio->file_name = $filenameAudio;
        $berkasAudio->type = 1;
        $berkasAudio->save();

        $berkasImage = new Berkas();
        $berkasImage->mufrodat_id = $mufrodat->getKey();
        $berkasImage->file_name = $filenameImage;
        $berkasImage->type = 2;
        $berkasImage->save();

        return "success";
    }

    public function update(Request $request, $bab, $id)
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
            'mufrodat/',
            $uploadFileAudio,
            $filenameAudio
        );

        $uploadFileImage = $request->file('file_image');
        $filenameImage = time().$uploadFileImage->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'mufrodat/',
            $uploadFileImage,
            $filenameImage
        );


        //save mufrodat to database
        $mufrodat = Mufrodat::find($id);
        $mufrodat->bab = $bab;
        $mufrodat->nama = $request->nama;
        $mufrodat->save();

        //save file to berkas database
        $berkasAudio = Berkas::where('mufrodat_id', $id)->where('type', 1);
        $berkasAudio->mufrodat_id = $mufrodat->getKey();
        $berkasAudio->file_name = $filenameAudio;
        $berkasAudio->type = 1;
        $berkasAudio->save();

        //save file image
        $berkasImage = Berkas::where('mufrodat_id', $id)->where('type', 2);
        $berkasImage->mufrodat_id = $mufrodat->getKey();
        $berkasImage->file_name = $filenameImage;
        $berkasImage->type = 2;
        $berkasImage->save();

        return "success";
    }
    public function getAllMufrodat($id)
    {
        $mufrodat = new Mufrodat();
        $data = $mufrodat->where('bab', $id)->with('berkas')->get();

        return $data;
    }

    public function mufrodat(Request $request, $id, $mufrodat)
    {
        $bab = new Mufrodat();

        $mufrot = $bab->where('bab', $id)->where('id', $mufrodat)->with('berkas')->get();
        return $mufrot;
    }

    public function viewMufrodat($id)
    {
        $mufrodat = new Mufrodat();
        $data = $mufrodat->where('bab', $id)->with('berkas')->get();

        return view('mufrodat', ['data' => $data, 'id' => $id]);
    }
    public function viewMufrodatbyID(Request $request, $id, $mufrodat)
    {
        $bab = new Mufrodat();

        $mufrot = $bab->where('bab', $id)->where('id', $mufrodat)->with('berkas')->get();
        return view('mufrodatID', ['id'=>$id, 'data'=>$mufrot]);
    }
    public function viewQasirah($bab)
    {
        return view('qasirah', ['id' => $bab]);
    }

    public function insertQasirah($bab, Request $request)
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
            'qasirah/',
            $uploadFileAudio,
            $filenameAudio
        );

        $uploadFileImage = $request->file('file_image');
        $filenameImage = time().$uploadFileImage->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'qasirah/',
            $uploadFileImage,
            $filenameImage
        );


        //save qasirah to database
        $qasirah = new Qasirah();
        $qasirah->bab = $bab;
        $qasirah->nomor = $request->nomor;
        $qasirah->save();

        //save file to berkas database
        $berkasAudio = new Berkas();
        $berkasAudio->qasirah_id = $qasirah->getKey();
        $berkasAudio->file_name = $filenameAudio;
        $berkasAudio->type = 1;
        $berkasAudio->save();

        $berkasImage = new Berkas();
        $berkasImage->qasirah_id = $qasirah->getKey();
        $berkasImage->file_name = $filenameImage;
        $berkasImage->type = 2;
        $berkasImage->save();

        return "success";
    }
}
