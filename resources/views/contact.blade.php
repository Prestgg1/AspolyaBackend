<x-main-layout>
<section class="section" id="section-1">
      <div class="inner-section">
          <h2 class="s1-h2 text-center text-4xl font-extrabold py-10" data-aos="zoom-in" data-aos-duration="500"> {{__('messages.contact') }} </h2>
      </div>
      <div class="overlay"></div>
  </section>
  
  @session('success')
    <p class="text-green-500"> Uğurla Atıldı</p>
  @endsession
    <!-- Section 1 FINISH -->
    <section class="section" id="section-2" style="display: flex; margin: 0px 10px;">
      <div class="left" style="width: 50%;">
          <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=istanbul%20fatih%20Molla%20Fenneri%20Mahallesi%20Ali%20Baba%20T%C3%BCrbe%20Sokak%20%C4%B0stanbul%20Han%20NO%20:%2024%20Kat%20:1%20Daire%20:103+(N%C4%B0LA%20K%C4%B0METL%C4%B0%20MADENLER)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps tracker sport</a></iframe>
      </div>
      <div class="right" style="width: 50%; padding: 20px; margin: 20px;">
          <form method="post" action="{{route('contact.post')}}" style="width: 100%; display: flex; flex-direction: column; gap: 20px;">
            @csrf
           
                      <input name="name" id="name" type="text" placeholder="Name" style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
              
                      <input name="surname" id="surname" type="text" placeholder="Surname" style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
             
                  <input name="email" id="email" type="email" placeholder="Email" style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
          
                  <textarea name="message" id="message" placeholder="Message" style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px; height: 150px;"></textarea>
              <button type="submit" style="padding: 10px; font-size: 16px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                  {{__('messages.submit') }}
              </button>
          </form>
      </div>
  </section>
  
</x-main-layout>
