<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;

// Custom use statement
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class Post extends Model implements HasMedia
{
    use Sluggable,
        HasMediaTrait;
    
    protected $fillable = [
      'title',
    ];
    
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
}
