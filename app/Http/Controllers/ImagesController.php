<?php

namespace App\Http\Controllers;
Use App\Models\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function images(){
        return response()->json(image::all());
    }
}
