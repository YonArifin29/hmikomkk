<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'image', 'content'];
    
    // Fix the eager loading property
    protected $with = ['user']; // Use 'user', not 'users'

    public function detailCategoryArticle(): HasMany 
    {
        return $this->hasMany(DetailCategoryArticle::class, 'id'); 
    }

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public static function getArticleWithWriter() {
        // return DB::table('users as u')
        // ->join('articles as a', 'u.id', '=', 'a.user_id')
        // ->select('u.name', 'a.id', 'a.title', 'a.image', 'a.content', 'a.created_at')
        // ->orderBy('a.id', 'desc')    
        // ->paginate(7);

    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'detail_category_articles', 'article_id', 'category_id');
    }
   

    // public function detaiTraining(): HasMany 
    // {
    //     return $this->hasMany(DetailTraining::class, 'id'); 
    // }

    // public function trainings(): BelongsToMany
    // {
    //     return $this->belongsToMany(Training::class, 'detail_training', 'member_id', 'training_id');
    // }
}

