<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasTranslatableSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Tags\Tag;
use Spatie\Translatable\HasTranslations;
use Spatie\Tags\HasTags;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;


class Blog extends Model implements HasMedia,Searchable
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
  use HasFactory,HasTranslations,HasTranslatableSlug,HasTags,InteractsWithMedia;

  public function getSearchResult(): SearchResult
  {
     $url = route('blogs', $this->slug);
  
      return new SearchResult(
         $this,
         $this->title,
         $url
      );
  }
  protected static function booted()
{
    static::creating(function ($blog) {
        $blog->user_id = Auth::id();
    });
}
  public function user()
  {
      return $this->belongsTo(User::class);
  }
  

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

 

    protected $fillable = [
        'title',
        'content',
        'thumnail',
        'active',
        'user_id',
        'slug',
        'category_id',
    ];
  public function registerMediaCollections(): void
    {
        $this->addMediaCollection('blogs')->singleFile(); 
    }
 

    public $translatable = ['title','slug','content'];
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
