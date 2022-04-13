<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MufrodatController extends Controller
{
    public function upload(Request $request)
    {
        try {
            $request->validate([
                'file_name' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav'
            ]);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 422);
        }


        $uploadFile = $request->file('file_name');
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('public')->putFileAs(
            'mufrodat/',
            $uploadFile,
            $filename
        );
        return $filename;
    }
}
