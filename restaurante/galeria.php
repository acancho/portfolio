<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<title>La Abuela</title>
  <link rel="shortcut icon" href="img/logo.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;1,100&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;1,100&display=swap" rel="stylesheet">

  <!-- Estilos y scripts específicos de Swiper deben ir aquí fuera del bucle -->
  <style>
    .carousel-gallery {
      margin: 50px 0;
      padding: 0 30px;
    }

    .swiper-slide a {
      display: block;
      width: 100%;
      height: 400px;
      border-radius: 4px;
      overflow: hidden;
      position: relative;
      -webkit-box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, .2);
      -moz-box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, .2);
      box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, .2);
    }

    .swiper-slide a:hover .image .overlay {
      opacity: 1;
    }

    .swiper-slide .image {
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center center;
    }

    .swiper-slide .image .overlay {
      width: 100%;
      height: 100%;
      background-color: rgba(20, 20, 20, .8);
      text-align: center;
      opacity: 0;
      -webkit-transition: all .2s linear;
      -o-transition: all .2s linear;
      transition: all .2s linear;
    }

    .swiper-slide .image .overlay em {
      color: #fff;
      font-size: 26px;
      position: relative;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      -o-transform: translateY(-50%);
      transform: translateY(-50%);
      display: inline-block;
    }

    .swiper-pagination {
      position: relative;
      bottom: auto;
      text-align: center;
      margin-top: 25px;
    }

    .swiper-pagination .swiper-pagination-bullet {
      -webkit-transition: all .2s linear;
      -o-transition: all .2s linear;
      transition: all .2s linear;
    }

    .swiper-pagination .swiper-pagination-bullet:hover {
      opacity: .7;
    }

    .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background-color: #d63031;
      transform: scale(1.1, 1.1);
    }
  </style>

</head>

<body>
  <?php
  include "nav.php";
  ?>
  <script>
    document.getElementById('color_mode').addEventListener('change', function () {
      if (this.checked) {
        window.location.href = 'ingles/galeria.php';
      }
    });
  </script>
  <br />

  <div class="container text-center">
    <h1 class="my-4 text-center text-lg-left">Galería de imágenes</h1>
    <br>
    <?php
    include "conexion.php";

    $sql = "SELECT * FROM fotos";
    $resultado = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($resultado)) {
      echo "<div class='swiper-container'><div class='swiper-wrapper'>";

      $fotos = [];
      while ($fila = $resultado->fetch_assoc()) {
        $fotoURL = "img/" . $fila["foto"];
        $fotos[] = $fotoURL;

        echo "<div class='swiper-slide'>
          <a href='$fotoURL' data-fancybox='gallery' class='fancybox' data-options='{\"touch\": false}'>
            <div class='image' style='background-image: url($fotoURL)'>
              <div class='overlay'><em class='mdi mdi-magnify-plus'></em></div>
            </div>
          </a>
        </div>";
      }

      echo "</div><div class='swiper-pagination'></div></div></div>";
    }
    ?>

    <br /><br /><br />
  </div>
  <!-- *********************************************************************************************************************************************** -->

  <?php
  include "footer.php";
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- Script de inicialización de Swiper -->
  <script>
    $(function () {
      var swiper = new Swiper('.swiper-container', {
        effect: 'slide',
        speed: 900,
        slidesPerView: 5,
        spaceBetween: 20,
        simulateTouch: true,
        autoplay: {
          delay: 5000,
          stopOnLastSlide: false,
          disableOnInteraction: false
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 5
          },
          425: {
            slidesPerView: 2,
            spaceBetween: 10
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 20
          }
        }
      });

      // Inicializar Fancybox
      $(".fancybox").fancybox({
        buttons: [
          "zoom",
          "slideShow",
          "fullScreen",
          "download",
          "thumbs",
          "close"
        ],
        loop: false
      });
    });
  </script>

</body>

</html>
