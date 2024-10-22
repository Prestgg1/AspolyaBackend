<x-main-layout>
  <main>
  <section class="section main" id="section-2" style="display:flex ; flex-direction:column; justify-content:center ;align-items:center; width: 100%; padding: 10%; height: auto;  " >
          <div class="blog">

            <h2 class="h2 blog_title">{{ $blog->title }}</h2>
  
            <div class="blog-card-group " style="display: flex; flex-wrap: wrap; align-items: start;  flex-direction: row; justify-content:start;">
              <div class="blog-card" style=" padding: 1%; column-gap: 1; display: flex; flex-direction: column; margin: auto; border-radius: 8px; overflow: hidden; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="blog-card-banner" style="max-height: 50vh">
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
                    <a href="blog1.html" class="h3 blog_title" style="text-decoration: none; ;">{{ $blog->title }}</a>
                  </h3>
              
                  <p class="blog_content" style="margin-top: 8px; font-size: clamp(12px, 1.5vw, 16px); ">
                   {!! $blog->content !!}
                  </p>
              
              = <x-profile :blog="$blog"/>
                </div>
              
              </div>

              </div>
  
  
             
  
  
  
  
              
            </div>
  
        </section>
  </main>
</x-main-layout>
