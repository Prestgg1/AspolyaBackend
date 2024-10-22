<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;
use Spatie\Sluggable\HasTranslatableSlug;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
class Category extends Model implements Searchable
{
    use HasFactory,HasTranslations,HasTranslatableSlug;
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
    protected $fillable = [
      'slug',
      'name',
  ];
  public $translatable = ['name','slug'];
  public function getSlugOptions() : SlugOptions
  {
      return SlugOptions::create()
          ->generateSlugsFrom('name')
          ->saveSlugsTo('slug');
  }
  public function getSearchResult(): SearchResult
     {
        $url = route('blogs', $this->slug);
     
         return new SearchResult(
            $this,
            $this->name,
            $url
         );
     }

}
