<?php include("core/db.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Inicio | AmecuxDEV</title>
  <link rel="shortcut icon" href="img/favicon.png"> 
  <meta name="description" content="Sitio Personal, Blog, Portafolio de Bryan Mancía">
  <meta name="keywords" content="Sitio Personal AmecuxDEV,Blog AmecuxDEV, Portafolio de Bryan Mancía, AmecuxDEV">
  <meta name="author" content="AmecuxDEV">

  <!-- Google Fonts Resources -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
  <!-- Materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <!-- Customs CSS -->
  <link href="css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/animate.css" type="text/css" rel="stylesheet">
  <script src="js/wow.min.js"></script>
</head>
<body class="grey darken-3">

  <!-- Preloader -->
  <div id="overlay">
    <div class="container" style="width: 400px;margin-top: 300px;">
      <div class="progress grey">
        <div class="indeterminate indigo"></div>
      </div>
    </div>
  </div>

 <?php include("core/navbar.php") ?>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <div class="row center wow fadeInDown" style="padding-top: 70px;">
          <h3 class="header col s12 light">
            <span class="typewrite" data-period="800" data-type='[ "Hola, soy AmecuxDEV.", "Me gusta Diseñar.", "Me gusta Desarrollar." ]'>
              <span class="wrap"></span>
            </span>
          </h3>
        </div>
        <div class="row center wow fadeInDown">
          <a href="img/CV.pdf" target="_blank" id="download-button" class="btn-large waves-effect waves-light indigo accent-3">OBTENER CV</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax wow fadeInUp"><img src="img/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block wow fadeInUp" data-wow-delay="0.2s" style="padding: 20px;">
            <h2 class="center orange-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">ESTILOS NUEVOS Y FUNCIONALES</h5>
          </div>
        </div>

        <div class="col s12 m4 wow fadeInUp" data-wow-delay="0.4s" style="padding: 20px;">
          <div class="icon-block">
            <h2 class="center purple-text"><i class="material-icons">phonelink</i></h2>
            <h5 class="center">DIESEÑO WEB ADAPTABLE</h5>
          </div>
        </div>

        <div class="col s12 m4 wow fadeInUp" data-wow-delay="0.6s" style="padding: 20px;">
          <div class="icon-block">
            <h2 class="center blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">CUSTOMIZACIÓN COMPLETA</h5>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center wow slideInUp">
          <h5 class="header col s12 light wow fadeInDown">¡Explota tu Imaginación!</h5>
        </div>
      </div>
    </div>
    <div class="parallax wow fadeInUp"><img src="img/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row wow slideInUp">
        <div class="col s12 center">
          <h4>HERRAMIENTAS UTILIZADAS</h4>
            <div class="carousel anim">
              <a class="carousel-item" href="#!"><img src="img/tools/html5.png"></a>
              <a class="carousel-item" href="#!"><img src="img/tools/css3.png"></a>
              <a class="carousel-item" href="#!"><img src="img/tools/js.png"></a>
              <a class="carousel-item" href="#!"><img src="img/tools/php.png"></a>
              <a class="carousel-item" href="#!"><img src="img/tools/boost.png"></a>
              <a class="carousel-item" href="#!"><img src="img/tools/mate.png"></a>
              <a class="carousel-item" href="#!"><img src="img/tools/wp.png"></a>
              <a class="carousel-item" href="#!"><img src="img/tools/ink.png"></a>
              <a class="carousel-item" href="#!"><img src="img/tools/ps.png"></a>
              <a class="carousel-item" href="#!"><img src="img/tools/ai.png"></a>
              <a class="carousel-item" href="#!"><img src="img/tools/inde.png"></a>
              <a class="carousel-item" href="#!"><img src="img/tools/msql.png"></a>
              <a class="carousel-item" href="#!"><img src="img/tools/myadmin.png"></a>
            </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light wow fadeInDown">¡Imagina y Materializa!</h5>
        </div>
      </div>
    </div>
    <div class="parallax wow fadeInUp"><img src="img/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <?php include("core/footer.php") ?>

  <script>
    var toast = document.getElementById(Materialize.toast('¡Bienvenido a AmecuxDEV!', 3000));

    window.addEventListener('load', function(){
      toast.style.display = 'none';
    });

    new WOW().init();

      $(function () {
        $(document).scroll(function () {
          var $nav = $(".navbar-fixed-top");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });

    var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
            }

            setTimeout(function() {
            that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                  new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
  </script>
  </body>
</html>
