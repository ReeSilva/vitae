<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <!-- Open Grapht Meta Tags -->
  <meta property="og:locale" content="en_US">
  <meta property="og:url" content="http://reesilva.com">
  <meta property="og:title" content="ReeSilva - Developer.">
  <meta property="og:site_name" content="ReeSilva">
  <meta property="og:description" content="Meet the work of the developer that can make the software you need.">
  <meta property="og:image" content="reesilva.com/img/share-photo.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="336">
  <meta property="og:image:height" content="336">

  <title>ReeSilva - Developer</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('css/flag-icon.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div class="navbar-fixed">
    <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">RSLV</a>
        <li class="right locale-flag {{ (Config::get('app.locale') == 'en' ? 'activated' : '') }}"><a href="/en" class="flag-icon flag-icon-us"></a></li>
        <li class="right locale-flag {{ (Config::get('app.locale') == 'br' ? 'activated' : '') }}"><a href="/br" class="flag-icon flag-icon-br"></a></li>
        <ul class="right hide-on-med-and-down">
          <li><a href="#profile-container">ReeSilva</a></li>
          <li><a href="#professional-experience">{{ trans('home.professional-xp-title') }}</a></li>
          <li><a href="#contact">{{ trans('home.contact') }}</a></li>
          <!-- <li><a href="http://techdev.reesilva.com" target="_blank">Blog (TechDev)</a></li> -->
          <!-- <li><a href="#">Formação</a></li> -->
          <!-- <li><a href="#">Trabalhos Desenvolvidos</a></li> -->
          <!-- <li><a href="#">Projetos Pessoais</a></li> -->
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="#profile-container">ReeSilva</a></li>
          <li><a href="#professional-experience">{{ trans('home.professional-xp-title') }}</a></li>
          <li><a href="#contact">{{ trans('home.contact') }}</a></li>
          <!-- <li><a href="http://techdev.reesilva.com" target="_blank">Blog (TechDev)</a></li> -->
          <!-- <li><a href="#">Formação</a></li> -->
          <!-- <li><a href="#">Trabalhos Desenvolvidos</a></li> -->
          <!-- <li><a href="#">Projetos Pessoais</a></li> -->
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </div>
  <h1>Teste chorível</h1>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container title-container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">{{ trans('home.profile-title') }}</h1>
        <div class="row center">
          <h5 class="header col s12 light">{{ trans('home.profile-header-desc') }}</h5>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="img/cover.jpg" alt="Profile Picture"></div>
  </div>


  <div id="profile-container" class="container scrollspy">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">{{ trans('home.profile-title-1') }}</h5>

            <p class="light">{{ trans('home.profile-desc-1') }}</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">star</i></h2>
            <h5 class="center">{{ trans('home.profile-title-2') }}</h5>

            <p class="light">{{ trans('home.profile-desc-2') }}</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">cloud_upload</i></h2>
            <h5 class="center">{{ trans('home.profile-title-3') }}</h5>

            <p class="light">{{ trans('home.profile-desc-3') }}</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container title-container">
        <h1 class="header center teal-text text-lighten-2">{{ trans('home.professional-xp-title') }}</h1>
        <div class="row center">
          <h5 class="header col s12 light">{{ trans('home.professional-header-desc') }}</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/cover-professional.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div id="professional-experience" class="container scrollspy">
    <div class="section">

      <div class="row">

        <div class="col s12 m4">
          <div class="icon-block">
            <a class="logo just-logo" href="http://www.justdigital.com.br" title="Just Digital"></a>

            <p class="light">{{ trans('home.professional-just-desc') }}</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <a class="logo pleimo-logo" href="http://www.pleimo.com" title="Pleimo"></a>

            <p class="light">{{ trans('home.professional-pleimo-desc') }}</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <a class="logo betalabs-logo" href="http://www.betalabs.com.br" title="Betalabs"></a>

            <p class="light">{{ trans('home.professional-beta-desc') }}</p>
          </div>
        </div>

      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container title-container">
        <div class="row center">
          <h5 class="header col s12 light">{{ trans('home.contact-header-desc') }}</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/contact-us.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div id="contact" class="container scrollspy">
      <div class="row">
        <div class="col l5 s12">
          <h5 class="white-text">{{ trans('home.bio-title') }}</h5>
          <p class="grey-text text-lighten-4">{{ trans('home.bio-desc') }}</p>


        </div>
        <div class="col l4 s12">
          <h5 class="white-text"><i class="material-icons white-text">contacts</i>{{ trans('home.contact') }}</h5>
          <ul>
            <li class="white-text"><i class="material-icons white-text">call</i>+5511985627011</li>
            <li class="white-text"><i class="material-icons white-text">call</i>+551143285921</li>
            <li><a class="white-text" href="mailto:me@reesilva.com"><i class="material-icons white-text">email</i>me@reesilva.com</a></li>
            <li><a class="white-text" href="mailto:renato.biancalana.silva@gmail.com"><i class="material-icons white-text">email</i>renato.biancalana.silva@gmail.com</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text"><i class="material-icons white-text">people</i>Social</h5>
          <ul>
            <li><a class="white-text" href="https://br.linkedin.com/in/reesilva">LinkedIn</a></li>
            <li><a class="white-text" href="https://facebook.com/reesilva">Facebook</a></li>
            <li><a class="white-text" href="https://twitter.com/reesilva_spfc">Twitter</a></li>
            <li><a class="white-text" href="https://plus.google.com/+RenatoBiancalanadaSilva">Google+</a></li>
            <li class="white-text">Skype: ReeSilva_SPFC</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      {{ trans('home.made-by') }} <a class="brown-text text-lighten-3" href="http://github.com/reesilva">ReeSilva</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('js/bin/materialize.js') }}"></script>
  <script src="{{ asset('js/bin/init.js') }}"></script>

  </body>
</html>
