<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function image()
    {
        $image = base64_decode(app(ImageService::class)->createDocumentNumber("2342-Xdf4", "13.089"));
        return response($image)->header('Content-Type', 'image/png');
    }
}
