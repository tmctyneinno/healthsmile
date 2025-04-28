<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    use HasFactory; 

    protected $fillable = [
        'bio', 
        'qualification', 
        'bio_img',  
        'experience', 
        'experience_img', 
        'approach',     
        'approach_img',
    ];
}
