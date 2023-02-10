<?php

namespace App\Http\Controllers;
Use App\Models\Photographer;
use Illuminate\Http\Request;

class PhotographersController extends Controller
{
    public function photographers(){
        return response()->json(photographer::all());
    }   
}
