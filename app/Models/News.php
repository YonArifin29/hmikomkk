<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'title', 'image', 'content'];
    
    // Fix the eager loading property
    protected $with = ['user']; // Use 'user', not 'users'

    public function detailCategoryNews(): HasMany 
    {
        return $this->hasMany(detailCategoryNews::class, 'id'); 
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'detail_category_news', 'news_id', 'category_id');
    }

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function getNewsWithWriter() {
        $article = DB::table('users as u')
        ->join('news as n', 'u.id', '=', 'n.user_id') // Assuming 'user_id' is the foreign key in 'news'
        ->select('u.name', 'n.id', 'n.title', 'n.image', 'n.content', 'n.created_at') // Fixed 'create_at' to 'created_at'
        ->paginate(7); 

        return $article;
    }
}
