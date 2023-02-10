<?php

namespace App\Http\Controllers;
use App\Models\Download;
use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    public function downloads(){
        return response()->json(Download::all());
    }   
}    
