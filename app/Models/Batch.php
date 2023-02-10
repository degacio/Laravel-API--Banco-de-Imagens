<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'photographer_id', 'usage', 'usage_limit_date', 'authorization_file', 'exclusivity'];
       

    protected $hidden = [
    'authorization_file',
    
];
}