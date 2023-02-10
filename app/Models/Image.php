<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    use HasFactory;
    protected $fillable = ['name', 'image_size' , 'downloads', 'photographer_id' , 'batch_id', 'city_id', 'exclusivity', 'tags'];

    protected $hidden = [
        'cover',
        'image',
        'image_size',
    
    ];
}
