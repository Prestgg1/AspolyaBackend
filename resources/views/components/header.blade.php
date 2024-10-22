
<nav class="navbar px-5">
  <div class="container flex justify-between items-center">
    <a href="{{route('home')}}">
      <img src="{{ asset('images/logolight.png') }}" alt="SimpleBlog logo" width="150" class="logo-light">
      <img src="{{ asset('images/logonight.png') }}" alt="SimpleBlog logo" width="150" class="logo-dark">
    </a>

    <div class="btn-group">

      <button class="theme-btn theme-btn-mobile light">
        <ion-icon name="moon" class="moon"></ion-icon>
        <ion-icon name="sunny" class="sun"></ion-icon>
      </button>

      <button class="nav-menu-btn">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

    </div>

    <div class="flex-wrapper">

      <ul class="desktop-nav">
        @foreach ($pages as $page)
        <li><a href="/{{ $page->menu_url }}"  class="nav-link">{{ $page->menu_title }}</a></li>
        @endforeach
       
      </ul>

      <button class="theme-btn theme-btn-desktop light">
        <ion-icon name="moon" class="moon"></ion-icon>
        <ion-icon name="sunny" class="sun"></ion-icon>
      </button>

      <div class="dropdown">
        <button class="dropdown-button" id="dropdownButton" tabindex="0">
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" height="1em"
            width="1em" xmlns="http://www.w3.org/2000/svg">
            <path d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path>
          </svg>
        </button>

        <div class="dropdown-content" id="dropdownContent">
          <a href="{{Route::localizedUrl('tr')}}" @class([
            "active"=>app()->getLocale() == 'tr'
            ])">Türkçe</a>
          <a  href="{{Route::localizedUrl('az')}}" @class([
            'active'=> app()->getLocale() == 'az'
            ])>Azərbaycanca</a>
        </div>
     
      </div>
      <x-search-input></x-search-input>
    </div>

    <div class="mobile-nav">
      <button class="nav-close-btn">
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="wrapper">
        <p class="h3 nav_title kateori">Kategori</p>
        <ul>
    
        </ul>
      </div>

      <div>
        <p class="h3 nav-title contact_text">Hizmetlerimiz</p>
        <ul>
          <li class="nav-item"><a href="#" class="nav-link estetik">Estetik</a></li>
          <li class="nav-item"><a href="#" class="nav-link dis">Diş</a></li>
          <li class="nav-item"><button class="lang_btn">TR/EN</button></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
