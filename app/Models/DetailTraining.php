<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailTraining extends Model
{
    use HasFactory;
    protected $table = 'detail_training';
    protected $fillable = ['member_id', 'training_id'];

    // Fix eager loading property
    protected $with = ['members', 'sosmed']; // Corrected this
    

    // public function member(): BelongsTo // Renamed from `article` to `news`
    // {
    //     return $this->belongsTo(Member::class);
    // }

    public function sosmed(): BelongsTo 
    {
        return $this->belongsTo(Sosmed::class);
    }

    public function members() {
        return $this->belongsTo(Member::class, 'member_id');
    }

}
