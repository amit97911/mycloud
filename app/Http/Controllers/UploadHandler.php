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
        $request->validate([
            'upload_file' => 'required',
        ]);
        if ($request->hasFile('upload_file')) {
            $allowedfileExtension = ['pdf', 'jpg', 'png', 'docx','mp4'];
            $files = $request->file('upload_file');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                if ($check) {
                    foreach ($request->upload_file as $photo) {
                        $filename = $photo->store('upload_file');
                    }
                    event(new MyEvent('Uploaded'.$filename));
                } else {
                    event(new MyEvent('Error uploading'.$filename));
                }
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
