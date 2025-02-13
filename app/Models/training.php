<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class training extends Model
{
    use HasFactory;
    protected $fillable = ['training_name'];
    
    // Fix the eager loading property
    protected $with = ['user']; 
}
