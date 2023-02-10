<?php

namespace App\Http\Controllers;
use App\Models\Citie;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function cities(){
        return response()->json(citie::all());
    }   
}
