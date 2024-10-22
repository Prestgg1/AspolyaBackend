<x-main-layout>

    <!--
      - #HERO SECTION
    -->   
    <div class="hero w-full flex justify-center items-center">

      <div class="container">

        <div class="left">

          <h1 class="h1 hero_title">
            {!!__('messages.hero') !!}
          </h1>

          <div class="btn-group">
            <a href="{{ route('contact') }}" class="btn btn-primary rezervasyon">{{__('messages.contact') }}</a>
            <a href="{{ route('about') }}" class="btn btn-secondary bilgi">{{__('messages.more') }} </a>
          </div>

        </div>

        <div class="right">

          <div class="pattern-bg"></div>
          <div class="img-box">
            <img src="{{asset('images/logo1.png')}}" alt="Aspolya" class="hero-img">

            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
          </div>

        </div>

      </div>

    </div>

    <div class="main w-full justify-center flex items-center">

      <div class="container ">

        <!--
          - BLOG SECTION
        -->

        <div class="blog">

          <h2 class="h2 lastest_blog"> {{__('messages.news') }} </h2>

          <div class="blog-card-group [&>blog-card>blog-card-banner>img]:w-full">
            @foreach ($blogs as $blog)
            <div class="blog-card">

<div class="blog-card-banner">
  <img src="{{$blog->getFirstMediaUrl('blogs') }}" alt="{{ $blog->title }}"
    width="250" class="blog-banner-img w-full md:auto">
</div>

<div class="blog-content-wrapper">
  <div class="flex gap-5">
  @foreach ($blog->tags()->get() as $tag)
  <a href="{{ route('tag', $tag->slug) }}" class="blog-topic text-tiny">{{ $tag->name }}</a>
  @endforeach
  </div>
 

  <h3>
    <a href="/blog/{{ $blog->slug }}" class="h3 blog1">
      {{ $blog->title }}
    </a>
  </h3>

  <p class="blog_text blog1_text">
    {!! $blog->content !!}
  </p>

 <x-profile :blog="$blog"/>

</div>

</div>
            @endforeach
       

          </div>
          <a href="/blogs/" class="load">

            <button class="btn load-more"> {!!__('messages.continue') !!}</button>
          </a>

        </div>

        <!--
          - ASIDE
        -->

        <div class="aside">

          <div>

            <h2 class="h2 hizmetlerimiz">{{__('messages.services') }}</h2>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="restaurant"></ion-icon>
              </div>

              <p class="service1">Ocakbaşı</p>
            </a>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="restaurant"></ion-icon>
              </div>

              <p class="service2">Çorbacı</p>
            </a>

          </div>

          <br>

          <div class="contact">

            <h2 class="h2 contact_text"> {{__('messages.contact') }} </h2>

            <div class="wrapper">

              <p class="contact_paragraf">
                Aşşağıda Bulunan Kısa Yollardan Hızlı Bir Şekilde Aspolya İçin Rezervasyon Veya Sipariş Verebilirsiniz.
              </p>

              <ul class="social-link">

                <li>
                  <a href="#" class="icon-box discord">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="icon-box twitter">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class="icon-box twitter">
                    <ion-icon name="call"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="icon-box facebook">
                    <ion-icon name="mail"></ion-icon>
                  </a>
                </li>

              </ul>

            </div>

          </div>


        </div>

      </div>

    </div>

</x-main-layout>
