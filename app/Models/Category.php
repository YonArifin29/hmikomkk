<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

    public function detailCategoryArticle(): HasMany {
        return $this->hasMany(DetailCategoryArticle::class, 'category_id'); 
    }
    
}
