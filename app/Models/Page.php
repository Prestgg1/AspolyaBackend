<?php

namespace App\Models;

use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Page extends Model implements Sortable
{

  use SortableTrait;

    use HasFactory,HasTranslations;
    public $sortable = [
      'order_column_name' => 'order',
      'sort_when_creating' => true,
  ];

  /*    'published', 'meta_title', 'meta_description', 'meta_keywords', 'meta_robots' */
    protected $fillable = ['menu_title', 'menu_url', 'order', 'isPrimary', 'active'];
    protected $table = 'pages';

    
    public $translatable = ['menu_title'];
}
