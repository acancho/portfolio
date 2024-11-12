<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>La Abuela</title>
	<link rel="shortcut icon" href="img/logo.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;1,100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oregano:ital@1&display=swap" rel="stylesheet">

</head>

<body>
  <?php
  include "nav.php";
  ?>
  <script>
    document.getElementById('color_mode').addEventListener('change', function() {
      if (this.checked) {
        window.location.href = 'ingles/index.php';
      }
    });
  </script>

  <h1 class="abuela">La Abuela</h1>
  <div style="width: 80%; margin: auto;">
    <p style="text-align: justify; font-size: 1.2em; line-height: 1.6; animation: animar-texto 2s ease-in-out;
  font-family: Montserrat, sans-serif;">
      <strong class="abuelaa">La Abuela</strong>, restaurante de comida tradicional ubicado en La Pedriza en la sierra norte de Madrid . El restaurante es conocido por su comida casera y deliciosa, que se prepara con ingredientes frescos y locales. La historia de La Abuela comenzó hace muchos años, cuando la abuela de la dueña actual del restaurante, Doña Carmen, solía cocinar para su familia y amigos. Después de muchos años, Doña Carmen finalmente decidió abrir su propio restaurante y lo llamó “La Abuela” en honor a su abuela. El restaurante se convirtió rápidamente en un éxito entre los lugareños y los turistas. Hoy en día, La Abuela sigue siendo uno de los mejores restaurantes de comida tradicional en España.
    </p>
  </div>
  <br><br>
  <section><img class="hero" src="img/familia-andar-espaldas.png" alt="" />
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <h1 class="title one">Salon principal</h1><img src="img/abuela.jpg" alt="" />
        </div>
        <div class="swiper-slide">
          <h1 class="title two">Grandes eventos</h1><img src="img/principal.jpg" alt="" />
        </div>
        <div class="swiper-slide">
          <h1 class="title four">Terraza interior</h1><img src="img/principal2.jpg" alt="" />
        </div>
        <div class="swiper-slide">
          <h1 class="title five">Terraza exterior</h1><img src="img/principal3.jpg" alt="" />
        </div>
      </div>
    </div>
  </section>

  <style>
    section {
      position: relative;
      display: flex;
      justify-content: center;
      width: 100%;
      height: 100vh;
    }

    .hero {
      position: absolute;
      bottom: 0;
      z-index: 5;
      max-width: 550px;
      filter: contrast(90%);
      pointer-events: none;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      position: relative;
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .title {
      position: absolute;
      top: 18%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      font-size: 5rem;
      letter-spacing: 0.3rem;
      z-index: 5;
      color: transparent;
      background-position: 0 0;
      animation: animated-text 20s linear infinite;
    }

    .one,
    .five,
    .two,
    .three,
    .four,
    .six {
      -webkit-text-stroke: 3px rgba(0, 0, 0);
      background-color: rgba(255, 204, 139, 0.6);
      font-size: 100px;
      font-style: bold;
      font-family: "Montserrat", sans-serif;
    }



    .swiper-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 1;
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      var swiper = new Swiper(".swiper", {
        grabCursor: true,
        speed: 500,
        effect: "slide",
        loop: true,
        mousewheel: false, // Desactiva el desplazamiento con el ratón
      });
    });
  </script>
  <br><br><br>







  <!-- *********************************************************************************************************************************************** -->




  </div>
  <center><h2 style="font-size: 45px;">Localicación</h2></center>
  <br>
  <br>
 <div class="container">
  <div class="row">
    <div class="col-md-6">
   <svg id="Metro_Map_Lines" class="map" data-name="Metro Map Lines" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 208.5 204.5"><defs><style>.cls-1,.cls-2,.cls-3,.cls-4,.cls-5,.cls-6{fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3px;}.cls-1{stroke:#0aa848;}.cls-2{stroke:#fcd000;}.cls-3{stroke:#f49506;}.cls-4{stroke:#9fa5a4;}.cls-5{stroke:#1076c4;}.cls-6{stroke:#e72434;}</style></defs><title>metro-map-svg</title><path id="green-line" class="line cls-1" d="M205,183l-14-14c-.7-1-2.77-.83-3.95-.57l-4.17,2.15a3.32,3.32,0,0,1-3.17-1l-8.07-8.79a5.51,5.51,0,0,0-4.06-1.79H153.34a4.37,4.37,0,0,1-4.37-4.33l.53-58.38a4.84,4.84,0,0,0-4.84-4.89h-3.19a4,4,0,0,1-4-4V85.5a4,4,0,0,1,4-4h6.73a8,8,0,0,0,7.36-4.84L157.14,73a6.64,6.64,0,0,1,.83-1L180.5,49.5" transform="translate(-27 -21)"/><path id="yellow-line" class="line cls-2" d="M128,224V187c0-4.43-2.57-6.13-7-6,0,0-6,1.22-6-2V164c0-2.13,11-11,11-11,1.39-1.33,4.08-1,6-1h10c3,0,3-1.1,3-6V101c0-3.35.65-5.63-2.66-5.68h-1.72a6.83,6.83,0,0,1-6.81-6.83V84.65a7,7,0,0,1,7-7c3.39,0,6.77,0,6.94,0a6,6,0,0,0,2-.38l1.84-1.28,1.7-1.6" transform="translate(-27 -21)"/><path id="orange-line" class="line cls-3" d="M28.5,123.5H72.4c5.1,0,11.6,1.5,11.6-3.5v-5.5c0-9,7.5-12,9.5-12h32c2.54,0,10,1,10,12v13c0,2.54,0,7,6,7h26a4.51,4.51,0,0,0,2.93-1.08l6.77-5.81a4.6,4.6,0,0,1,3-1.11h15.39a4.6,4.6,0,0,0,3.26-1.35L219.5,104.5" transform="translate(-27 -21)"/><path id="silver-line" class="line cls-4" d="M30,104l22.17,22.17a2.84,2.84,0,0,0,2,.83H81a7,7,0,0,0,7-7l0-7.38c.15-2,2.64-5.42,5.75-5.66l30.22-.32c4.43,0,7.35,3.55,7.35,8l.1,15.83c0,4.18,4,7.56,8.16,7.56h29.79a4.35,4.35,0,0,0,2.89-1.1l6.31-5.61a4,4,0,0,1,2.91-1.3H234" transform="translate(-27 -21)"/><path id="blue-line" class="line cls-5" d="M82,223v-8.58A6.42,6.42,0,0,1,88.42,208h32.33a3.25,3.25,0,0,0,3.25-3.25V190.88a4.88,4.88,0,0,0-4.88-4.88h-2.88a5.24,5.24,0,0,1-5.24-5.24V159.25a7.84,7.84,0,0,0-2.3-5.54L95,140a12.07,12.07,0,0,1-3.54-8.54v-17a4,4,0,0,1,4-4h27.93a3.57,3.57,0,0,1,3.57,3.57v14.84A13.09,13.09,0,0,0,140.09,142h30.26a4.7,4.7,0,0,0,2.94-1l7-5.57a6.4,6.4,0,0,1,4-1.4H234" transform="translate(-27 -21)"/><path id="red-line" class="line cls-6" d="M137.5,22.5V54a6.2,6.2,0,0,0,1.69,4.26l27.74,28.59A5,5,0,0,1,168,88.65a5.22,5.22,0,0,1,.3,2.06c-.28,7.59.3,15.2.16,22.79a4.32,4.32,0,0,1-1,3,3.68,3.68,0,0,1-2,1c-11.33,0-26.67-.15-38,0-7.89.1-7.29-3.89-7.29-3.89L120,97.15c-.3-1.25-2-3.14-2.87-4.08L107.08,82.41a5.25,5.25,0,0,0-4-1.91H100.7c-2.69,0-5.27-3.08-7.15-5L52.5,34.5" transform="translate(-27 -21)"/></svg></div>
    <div class="col-md-6">
      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14373.878277247308!2d-3.871478394825425!3d40.76783794567832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd416500a88f2d41%3A0xc966cd716dd47529!2sLa%20Pedriza!5e0!3m2!1ses!2ses!4v1700423934658!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>
<br><br>
<style>

   
#root {
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   height: 100vh;
   width: 100vw;
   
}

.map {
   height: 80%;
   width: 80%;
}

.line {
   stroke-dasharray: 400;
   stroke-dashoffset: 400;
   animation: draw 5s infinite alternate;
}

@keyframes draw {
   from {
      stroke-dashoffset: 400;
   }
   to {
       stroke-dashoffset: 0;
   }
}</style>
</div>

  <!-- Remove the container if you want to extend the Footer to full width. -->
  <?php
  include "footer.php";
  ?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>