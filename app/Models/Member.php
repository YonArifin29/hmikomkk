<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'image',
        'gender',
        'phone_number',
    ];

    public function sosmed(): HasMany 
    {
        return $this->hasMany(DetailSosmed::class, 'sosmed_id'); 
    }

    public function training(): HasMany 
    {
        return $this->hasMany(DetailTraining::class, 'training_id'); 
    }
}
