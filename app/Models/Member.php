<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
        return $this->hasMany(DetailSosmed::class, 'member_id'); 
    }

    public function detaiTraining(): HasMany 
    {
        return $this->hasMany(DetailTraining::class, 'id'); 
    }

    public function trainings(): BelongsToMany
    {
        return $this->belongsToMany(Training::class, 'detail_training', 'member_id', 'training_id');
    }

    public function detailSosmed()
{
    return $this->hasMany(DetailSosmed::class, 'member_id', 'id');
}
}
