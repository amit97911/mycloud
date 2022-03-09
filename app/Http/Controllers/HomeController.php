<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use File;
use App\Http\Resources\MyEvent;

class HomeController extends Controller
{
    public function index() 
    {
    	$zip = new ZipArchive;
        $fileName = 'zipFileName.zip';
        if ($zip->open(storage_path('app/public/'.$fileName), ZipArchive::CREATE) === TRUE)
        {
            $files = File::files(storage_path('app/public/upload_file'));
            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }
            $zip->close();
        }
        return response()->download(storage_path('app/public/'.$fileName));
    }
}