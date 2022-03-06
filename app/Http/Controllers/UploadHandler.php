<?php

namespace App\Http\Controllers;

use App\Http\Resources\MyEvent;
use App\Models\UploadModel;
use Illuminate\Http\Request;

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
                $file_path = UploadModel::saveFile($photo);
                $file_type = UploadModel::fileType($photo);
                if ($file_type) {
                    UploadModel::makeIcon($photo);
                } else {
                    //provide some icon from defaults
                }
                event(new MyEvent('Uploaded : ' . $photo->getClientOriginalName()));
            }
        }
        return view('upload.index', $data);
    }
}
