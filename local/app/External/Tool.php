<?php

namespace App\External;

use Image;
//namespace App\Http\Traits;
trait Tool
{
    public static function upload_picture($path, $imgwidth, $filename, $request_file)
    {
        if (!empty($request_file)) {
            $pic_name = ' ';
            $image = $request_file;
            $series = explode('.', $image->getClientOriginalName());
            $len = sizeof($series) - 1;
            $pic_name  = date('dmYHis') . $filename . '.' . $series[$len];
            list($width, $height) = getimagesize($image->getRealPath());
            $image_resize = Image::make($image->getRealPath());
            if ($width > $imgwidth) {
                $image_resize->resize($imgwidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            $image_resize->save($path . $pic_name);
            return $pic_name;
        }
    }
}
