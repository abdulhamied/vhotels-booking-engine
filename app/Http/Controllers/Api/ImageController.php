<?php
namespace vengine\Http\Controllers\Api;

use vengine\Http\Controllers\Controller;

class ImageController extends Controller{
    public function getImage($path, $fileName)
    {
        $path = storage_path().DIRECTORY_SEPARATOR."app".DIRECTORY_SEPARATOR.$path.DIRECTORY_SEPARATOR.$fileName;
        
        if(!file_exists($path))
        {
            return \Response::make(file_get_contents(public_path().DIRECTORY_SEPARATOR."img".DIRECTORY_SEPARATOR."placeholder_mountain.jpg"), 200, [
                'Content-Type' => 'image/jpeg',
                'Content-Disposition' => 'inline; '.'NotFound.jpg',
            ]);
        }
        return \Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'image/jpeg',
            'Content-Disposition' => 'inline; '.$fileName,
        ]);
    }
}