<?php

namespace App\Http\Controllers;
use App\Models\Batch;
use Illuminate\Http\Request;

class BatchsController extends Controller
{
  
    public function lotes(){
        return response()->json(Batch::all());
    }   
}
