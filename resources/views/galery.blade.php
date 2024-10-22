<x-main-layout>

<div class="flex flex-col w-full justify-center items-center py-10  text-white">
  <h1 class="text-4xl font-bold">Bizim Galerimiz</h1>
  <p class="text-lg">Bura ne yazacağımı bilemedim.</p>
</div>

<!-- Photo Grid -->
<div class="row py-10"> 
  <div class="column">
    @foreach ($medias as $media)
      <img src="{{ $media->getUrl() }}" style="width:100%">
    @endforeach
 
  </div>
</div>

</x-main-layout>
