<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class="title">Aspolya Tedavi</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="/assets/images/logolnight.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body>

  <!--
    - #HEADER
  -->

  <header><x-header></x-header></header>





  <main>
  {{ $slot }}

  </main>




  <!--
    - #FOOTER
  -->

  <footer>
<x-footer></x-footer>

  </footer>


  <!--
    - #whatsap
  -->


  <div id="capitol-callback">
    <div class="cpt-circle"></div>
    <div class="cpt-circle-fill"></div>
    <a href="https://api.whatsapp.com/send?phone=905385934759&text=Merhaba!" id="WhatsAppBtnDesktop" target="_blank"
      class="main-button" lang="en">
      <img src="https://nhtagent.com/nht-upload/assets/javascripts/WhatsApp/WhatsApp.png" width="100%">
    </a>
  </div>


  <!--
    - custom js link
  -->
  <script src="{{asset('/js/script.js')}}"></script>

  <!--
    - ionicon link
  -->

  <!-- <script type="module" src="./assets/messages/home.js"></script> -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
