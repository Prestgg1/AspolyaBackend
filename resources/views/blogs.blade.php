<x-main-layout>
<main class="section main" id="section-2" style="display:flex ; flex-direction:column; justify-content:center ;align-items:center; width: 100%; padding: 10%; height: auto;  " >
  <div class="flex gap-5">
    @foreach ($categories as $category)
      <a href="{{ route('category', $category->slug) }}" class="blog-topic text-tiny current">{{$category->name}}</a>
    @endforeach
  </div>
          <div class="blog">

  
            <div class="blog-card-group " style="display: flex; flex-wrap: wrap; align-items: start;  flex-direction: row; justify-content:start;">
            
              
              @foreach ($blogs as $blog)
              <div class="blog-card" style="width: 48%; padding: 1%; column-gap: 1; display: flex; flex-direction: column; margin: auto;  border-radius: 8px; overflow: hidden; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="blog-card-banner" style="max-height: 300px;">
                  <img src="{{ $blog->getFirstMediaUrl('blogs') }}" alt="{{ $blog->title }}"
                    style="width: 100%; height: auto; object-fit: cover;">
                </div>
                <div class="blog-content-wrapper" style="padding: 16px;">
                <div class="flex gap-5">
               
               
  @foreach ($blog->tags()->get() as $tag)
  <button class="blog-topic text-tiny">{{ $tag->name }}</button>
  @endforeach
  </div>
           
              
                  <h3 style="font-size: 24px; margin-top: 12px;">
                    <a href="{{ route('blog', $blog->slug) }}" class="h3 blog_title" style="text-decoration: none; ;">{{ $blog->title }}</a>
                  </h3>
              
                  <p class="blog_text line-clamp-3 text-wrap w-1/2" style="margin-top: 8px; font-size: 14px; ">
                    {!! $blog->content !!}
                  </p>
              
              = <x-profile :blog="$blog"/>

              
                </div>
              
              </div>
              @endforeach
            

              </div>
  
  
             
  
  
  
  
              
            </div>
  
        </section>
        <!-- Section 2 FINISH -->
    </main>
</x-main-layout>
