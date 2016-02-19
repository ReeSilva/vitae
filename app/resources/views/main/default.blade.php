<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <!-- Open Grapht Meta Tags
  <meta property="og:locale" content="en_US">
  <meta property="og:url" content="http://reesilva.com">
  <meta property="og:title" content="ReeSilva - Developer.">
  <meta property="og:site_name" content="ReeSilva">
  <meta property="og:description" content="Meet the work of the developer that can make the software you need.">
  <meta property="og:image" content="reesilva.com/img/share-photo.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="336">
  <meta property="og:image:height" content="336"> -->

  <title>Vitae - Seu currículo online</title>

  <!-- CSS  -->
  <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>

  <div class="container-fluid">

    @yield('content')
    
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>

  </body>
</html>
