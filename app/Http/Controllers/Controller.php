<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function getImg(Request $request) {

        $inputPic = $request->file('inputPic');


     

        if($inputPic && isset($_POST['submit'])) {
            
            $url = Storage::url($inputPic);
            $pic = Storage::disk('public')->put('uploads', $inputPic);

            return view('remover', ['pic' => $pic]);

        }

    }

}
