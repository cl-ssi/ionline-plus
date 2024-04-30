<?php

namespace App\Http\Controllers;

use App\Models\Document\Signature\DigitalSignature;
use App\Models\User;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function image()
    {
        $image = base64_decode(app(ImageService::class)->createDocumentNumber("2342-Xdf4", "13.089"));
        return response($image)->header('Content-Type', 'image/png');
    }


    public function signature($otp)
    {
        $user = User::find(15287582);
        // $otp = '123456';

        $files[] = Storage::get('samples/oficio.pdf');
        $positions[] = [ // opcional (Default: right, first, 0)
            'column'        => 'right',   // 'left','center','right'
            'row'           => 'first',   // 'first','second'
            'margin-bottom' => 20,        // subir 20 pixeles hacia arriba
        ];

        $digitalSignature = new DigitalSignature();
        $success = $digitalSignature->signature($user, $otp, $files, $positions);

        if($success) {
            return $digitalSignature->streamFirstSignedFile();
        }
        else {
            echo $digitalSignature->error;
        }
    }
}
