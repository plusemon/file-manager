<?php

namespace Plusemon\FileManager;
use Illuminate\Http\UploadedFile;

class FileManager
{

    /**
     * Upload file to the public media folder according to file type and the model
     * 
     * @param $file
     * @param $module
     * @param $uid
     * @param $type
     * @return string
     * 
     */
    public function upload(UploadedFile $file, $module, $uid = null, $type = 'images'): string
    {
        $file_name = $module . '-' . ($uid ?? uniqid()) . '.' . $file->extension();
        $file_path = 'media/' . $type . '/' . $module . '/';
        $file->move(public_path($file_path), $file_name);
        return $file_path . $file_name;
    }

    /**
     * Upload file to the public media folder according to file type and the model
     * 
     * @param $property_name
     * @return string
     * 
     */
    public function urlOf($property_name)
    {
        $no_image_path = 'assets/web/images/no-image.png';
        $file = public_path($this->$property_name);

        if (file_exists($file)) {
            return url($this->$property_name);
        }

        return url($no_image_path);
    }
}
