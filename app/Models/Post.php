<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;
use Spatie\Sluggable\HasSlug;

class Post extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'title',
        'category_id',
        'user_id',
        'slug',
        'excerpt',
        'body'];
    protected $with = ['category','user'];

    public function scopeFilter($query,array $filters){
        if(isset($filters['search']) ? $filters['search'] : false){
            return $query->where('title','like','%'. $filters['search'] .'%')
            ->orWhere('body','like','%'. $filters['search'] .'%');
        }

        $query->when($filters['category'] ?? false, function($query,$category){
            return $query->whereHas('category',function($query) use($category){
                $query->where('slug',$category);
            });
        });

        $query->when($filters['user'] ?? false, function($query,$user){
            return $query->whereHas('category',function($query) use($user){
                $query->where('username',$user);
            });
        });
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
