<div class="w-full flex justify-center items-center ">
  <div class="container ">
    <div class="wrapper">
      
      <a href="/" class="footer-logo">
        <img src="{{ asset('images/logolight.png') }}" alt="SimpleBlog Logo" width="150" class="logo-light">
        <img src="{{ asset('images/logonight.png') }}" alt="SimpleBlog Logo" width="150" class="logo-dark">
      </a>
  
    </div>
  
    <div class="wrapper">
  
      <p class="footer-title kurumsal">{{__('messages.corporate') }} </p>
  
      <ul>
        @foreach ($pages as $page)
          <li>
            <a href="/{{$page->menu_url}}" class="footer-link">{{$page->menu_title}}</a>
          </li>
        @endforeach
   
      </ul>
  
    </div>
  
    <div class="wrapper">
  
      <p class="footer-title socialmedia"> {{__('messages.social') }} </p>
  
      <ul>
        <li>
          <a href="#" class="footer-link">İnstagram</a>
        </li>
        <li>
          <a href="#" class="footer-link">WhatsApp</a>
        </li>
        <li>
          <a href="#" class="footer-link">Mail</a>
        </li>
      </ul>
  
    </div>
  
  </div>
</div>

<p class="copyright">
  &copy; Copyright 2024 <a href="#">Sprole</a>
</p>
