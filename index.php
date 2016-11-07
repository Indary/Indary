<?php
  define('BASE_URL', 'http://www.indary.org');
  function base_url($path=''){
    return BASE_URL . '/' . $path;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Indary! Tecnología para ayudar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="keywords" content="Indary, Tecnología, ONG, Comodoro, Rivadavia">
    <meta name="description" content="Tecnología para ayudar!">
    <meta name="author" content="Indary">
    <meta name="theme-color" content="#ff5555">
    <!-- TWITTER -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@indary">
    <meta name="twitter:creator" content="@indary">
    <meta name="twitter:title" content="Indary">
    <meta name="twitter:description" content="Tecnología para ayudar!">
    <meta name="twitter:image:src" content="<?php echo base_url('img/logo.png')?>">
    <!-- FACEBOOK -->
    <meta property="og:site_name" content="Indary">
    <meta property="og:url" content="<?php echo base_url()?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Indary">
    <meta property="og:description" content="Tecnología para ayudar!">
    <meta property="og:image" content="<?php echo base_url('img/logo.png')?>">
    <!-- G++ -->
    <meta itemprop="name" content="Indary">
    <meta itemprop="description" content="Tecnología para ayudar!">
    <meta itemprop="image" content="<?php echo base_url('img/logo.png')?>">
    <link rel="shortcut icon" type="image/png" href="img/art/favicon.png" />
    <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="libs/materialize/css/materialize.min.css" type="text/css">
    <script src="libs/jquery/jquery-1.11.3.min.js"></script>
    <script src="libs/materialize/js/materialize.min.js"></script>
    <script src="js/global.js"></script>
  </head>
  <body>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-86160268-1', 'auto');
      ga('send', 'pageview');
    </script>
    <header>
      <nav id="nav">
        <div class="nav-wrapper">
          <div class="brand-logo center">
            <span class="logo">Indary!</span>
          </div>
        </div>
      </nav>
    </header>
    <div id="full-wrapper">
      <section id="us">
        <div class="container">
          <div class="row">
            <h3>Sobre nosotros</h3>
            <p>Somos una organización sin fines de lucro que da soporte tecnológico a otras organizaciones e individuos. Creemos que la tecnología puede cambiar la calidad de vida de las personas y creemos que el conocimiento bien aplicado es el que se usa para ayudar.</p>
            <p>Tenemos dos objetivos claros</p>
            <p><b class="i-red">El primero:</b> Usar nuestro conocimiento para mejorar la calidad de vida de las personas y apoyar a aquellos que buscan lo mismo.</p>
            <p><b class="i-red">El segundo:</b> Brindar a profesionales y futuros profesionales la posibilidad de participar en proyectos reales de software para que sumen experiencia.</p>
          </div>
        </div>
      </section>
      <section id="public">
        <div class="container">
          <div class="row">
            <div class="col l6 m6 s12">
              <h3 class="hash">#TEAYUDAMOS</h3>
              <div class="text">
                <p>No importa si sos un individuo o representás a una organización. Lo importante es tu causa.</p>
                <p>Apoyamos proyectos sin fines de lucro para facilitar el trabajo desde el sector tecnológico.</p>
                <p>Contanos tu necesidad y vemos cómo podemos ayudarte!</p>
              </div>
            </div>
            <div class="col l6 m6 s12">
              <h3 class="hash">#SUMATE</h3>
              <div class="text">
                <p>Buscamos principalmente programadores, diseñadores, comunicadores sociales e ingenieros.</p>
                <p>No importa si tenés titulo, si sos estudiante o si lo hacés por pasión. Lo importante es que tengas ganas de aprender, de enseñar y sobre todo de <b>AYUDAR</b>.</p>
                <p>Vas a poder colaborar a tu ritmo, cuando puedas y desde donde quieras.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col l12 m12 s12">
              <h3 class="hash">#AYUDANOS</h3>
              <div class="text">
                <p>Si tenés una empresa de desarrollo también podés ayudarnos. Necesitamos programadores, diseñadores, espacio de trabajo, hosting y dominios. <b>TODO SUMA!</b></p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer>
      <div class="center">
        <div class="container">
          <div class="row">
            <div class="col l6 m6 s12 contact-item"><b class="i-red">GIT:</b> <b><a href="https://github.com/indary" target="_blank">/INDARY</a></b></div>
            <div class="col l6 m6 s12 contact-item"><b class="i-red">E-MAIL:</b> <b><a href="mailto:contacto@indary.org">CONTACTO@INDARY.ORG</a></b></div>
            <div class="col l6 m6 s12 contact-item"><b class="i-red">FACEBOOK:</b> <b><a href="https://www.facebook.com/indaryorg" target="_blank">/INDARYORG</a></b></div>
          </div>
          <div class="row">
            <b>Made with <i class="tiny material-icons red-text">favorite</i> by </b><span class="logo i-red">Indary!</span>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
