<?php

namespace App\Models;

use App\Models\Member;
use App\Models\Sosmed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailSosmed extends Model
{
    use HasFactory;
    protected $table = 'detail_sosmed';
    protected $fillable = ['member_id', 'sosmed_id', 'link'];

    // Fix eager loading property
    protected $with = ['member', 'sosmed']; // Corrected this

    public function member(): BelongsTo // Renamed from `article` to `news`
    {
        return $this->belongsTo(Member::class);
    }

    public function sosmed()
    {
        return $this->belongsTo(Sosmed::class, 'sosmed_id', 'id');
    }
}
