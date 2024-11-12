
<br><br><br><br><br>

<div class="main"></div>
    <div class="footer">
        <div class="bubbles">
          <script>document.addEventListener("DOMContentLoaded", function() {
            const bubblesContainer = document.querySelector('.bubbles');
            for (let i = 0; i < 128; i++) {
                const bubble = document.createElement('div');
                bubble.classList.add('bubble');
                bubble.style.setProperty('--size', `${2 + Math.random() * 4}rem`);
                bubble.style.setProperty('--distance', `${6 + Math.random() * 4}rem`);
                bubble.style.setProperty('--position', `${-5 + Math.random() * 110}%`);
                bubble.style.setProperty('--time', `${2 + Math.random() * 2}s`);
                bubble.style.setProperty('--delay', `-${1 * (2 + Math.random() * 2)}s`);
                bubblesContainer.appendChild(bubble);
            }
        });
        </script>
        </div>
        <div class="content">
          <div class="container-fluid ">
            <div class="row d-flex justify-content-center text-center">
              <div class="col">
                <h5>Contacto</h5>
                <ul class="list-unstyled">
                  <li>Correo: info@example.com</li>
                  <li>Teléfono: 123-456-7890</li>
                  <li>Dirección: Calle Principal #123</li>
                </ul>
              </div>
              <div class="col">
                <h5>Enlaces Rápidos</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Inicio</a></li>
                  <li><a href="#">Acerca de</a></li>
                  <li><a href="#">Servicios</a></li>
                  <li><a href="#">Contacto</a></li>
                </ul>
              </div>
              <div class="col">
                <h5>Síguenos</h5>
                <ul class="list-unstyled">
                  <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                </ul>
              </div>
            </div>
            <hr class="bg-light">
            <div class="text-center">
              <p>&copy; 2024 Nombre de tu Empresa. Todos los derechos reservados.</p>
            </div>
          </div>
        </div>
    </div>
    <svg style="position:fixed; top:100vh">
        <defs>
            <filter id="blob">
                <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur"/>
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="blob"/>
            </filter>
        </defs>
    </svg>