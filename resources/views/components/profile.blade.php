<div class="wrapper-flex">

<div class="profile-wrapper">
  <img src="{{ $blog->user->getFirstMediaUrl('users')}}" alt="{{ $blog->user->name }}" width="50">
</div>

<div class="wrapper">
  <a href="{{route('author',$blog->user->id)}}" class="h4"> {{ $blog->user->name }} </a>

  <p class="text-sm">
    <time datetime="{{ $blog->created_at->format('d.m.Y') }}"> {{ $blog->created_at->format('d.m.Y') }} </time>
    <span class="separator"></span>
    <ion-icon name="time-outline"></ion-icon>
  </p>
</div>

</div>
