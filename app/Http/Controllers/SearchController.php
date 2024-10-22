<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Container\Attributes\Tag;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class SearchController extends Controller
{

  public function index(Request $request)
  {
    $searchTerm = $request->input('query');
    $searchResults = (new Search())
    ->registerModel(Blog::class, ['title', 'content','slug','category_id'])
    ->perform($searchTerm);
    $blogs = $searchResults->map(function ($result) {
  return $result->searchable;  // Burada doğrudan Blog modelini alıyoruz
  });
    return view('blogs', ['blogs' => $blogs,'categories' => Category::all()]);
}

}
