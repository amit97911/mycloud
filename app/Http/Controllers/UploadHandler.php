<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\MyEvent;

class UploadHandler extends Controller
{
    public function index(Type $var = null)
    {
        $data['active'] = "upload";
        return view('upload.index', $data);
    }

    public function upload(Request $request)
    {
        $data['active'] = "upload";
        if ($request->hasFile('upload_file')) {
            foreach ($request->upload_file as $photo) {
                $photo->storeAs('upload_file',$photo->getClientOriginalName());
                event(new MyEvent('Uploaded : ' .$photo->getClientOriginalName()));
            }
        }
        return view('upload.index', $data);
    }

    // public function upload(Request $request)
    // {
    //     $data['active'] = "upload";
    //     $request->validate([
    //         'upload_file' => 'required',
    //     ]);

    //     $path = $request->file('upload_file')->store('public/profile');
    //     return substr($path, strlen('public/'));
    //     return 1;
    //     dd($request);
    //     return response()->json(['success' => 'Successfully uploaded.']);
    // }
}
