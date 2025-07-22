<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'slug',
        'content',
        'category_id',
        'user_id',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];


    function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    function comments() {
        return $this->hasMany(Comment::class);
    }

    public function imageUrl()
    {
        $media = $this->getFirstMedia('image');
        if (!$media) {
            return null;
        }
        if ($media->hasGeneratedConversion('image')) {
            return $media->getUrl('image');
        }
        return $media->getUrl();
    }



}
