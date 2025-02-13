<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'title', 'image', 'content'];
    
    // Fix the eager loading property
    protected $with = ['user']; // Use 'user', not 'users'

    public function category(): HasMany 
    {
        return $this->hasMany(DetailCategoryNews::class, 'news_id'); 
    }

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}
