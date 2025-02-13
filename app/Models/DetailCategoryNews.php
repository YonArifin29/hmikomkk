<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailCategoryNews extends Model
{
    use HasFactory;

    protected $fillable = ['news_id', 'category_id'];

    // Fix eager loading property
    protected $with = ['news', 'category']; // Corrected this

    public function news(): BelongsTo // Renamed from `article` to `news`
    {
        return $this->belongsTo(News::class);
    }

    public function category(): BelongsTo 
    {
        return $this->belongsTo(Category::class);
    }
}
