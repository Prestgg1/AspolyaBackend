<?php

namespace App\Http\Controllers;
use App\Mail\MailTemplate;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Tags\Tag;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function home()
  {
    $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
    return view('home',['blogs' => $blogs]);
  }
  public function author($slug){
    $blogs = Blog::where('user_id',$slug)->get();
    $categories = Category::all();
    return view('blogs',['blogs'=>$blogs,'categories'=>$categories]);
  }

  public function about()
  {
    return view('about');
  }
  public function contact()
  {
    return view('contact');
  }
  public function faq()
  {
    return view('faq');
  }
  public function galery(){
    $medias =Media::where('collection_name', 'blogs')->get();
    return view('galery',['medias' => $medias]);
  }
  public function blogs(){
    $categories = Category::all();
    $blogs = Blog::orderBy('created_at', 'asc')->get();
    return view('blogs',['categories' => $categories,'blogs' => $blogs]);
  }
  public function tag($slug){
    $categories = Category::all();
    $locale = $locale ?? app()->getLocale();
    $tag = Tag::where('slug->en', $slug)->firstOrFail();
    $blogs = Blog::withAnyTags([$tag])->get();
    return view('blogs', ['blogs' => $blogs, 'tag' => $tag,'categories'=>$categories]);
  }

  public function blog($slug){
    $blog = Blog::findBySlug($slug);
    if(!$blog){
      abort(404);
    }
    return view('blog-detail', ['blog' => $blog]);
  }
  public function category($slug){
    $categories = Category::all();
    $category = Category::findBySlug($slug);
    if(!$category){
      abort(404);
    };
    
    $blogs = Blog::where('category_id', $category->id)->get();
 
    return view('blogs', ['categories' => $categories,'category' => $category, 'blogs' => $blogs]);
  }
  public function contactPost(Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);
    
    Mail::to('prestgg56@gmail.com')->send(new MailTemplate([
          'name' => $request->name,
          'message' => $request->message,
          'email' => $request->email,
     ]));
     
    return redirect()->back()->with('success', 'Message sent successfully.');
  }
  
}
