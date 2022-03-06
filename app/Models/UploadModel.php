<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Image;
use File;
use Storage;

class UploadModel extends Model
{
    use HasFactory;

    public static function saveFile($file)
    {
        return $file->storeAs('upload_file',$file->getClientOriginalName(),'public');
    }

    public static function makeIcon($file)
    {
        return Image::make($file)->resize(150, 100)->save(public_path('/thumbnail/'.$file->getClientOriginalName()));
    }

    public static function fileType($file)
    {
        return $file->getClientOriginalExtension();
    }

    // public static function moveFile($path,$filename)
    // {
    //     // dd(file_exists(storage_path('app').'/'.$path));
    //    return File::copy(storage_path('app').'/'.$path, '/mnt/2310b236-c43b-4075-9cbf-acfef1ef748a/Patel/Git/cloud'.$filename->getClientOriginalName());
    // }


}
