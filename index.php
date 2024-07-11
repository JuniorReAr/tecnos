<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <div class="menu container">
      <img class="logo-1" src="img/logo1.png" alt="">
      <input type="checkbox" id="menu"/>
      <label for="menu">
        <img class="menu-icono" src="img/menu.png" alt="">
      </label>
      <nav class="navbar">
        <div class="menu-1">
          <ul>
            <li><a href="#">Inicio</a></li>
            <!-- <li><a href="#">Servicios</a></li> -->
            <li><a href="#">Productos</a></li>
          </ul>
        </div>
        <img class="logo-2" src="img/logo1.png" alt="">
        <div class="menu-2">
          <ul>
            <!-- <li><a href="#">Atención</a></li> -->
          </ul>
          <div class="socials">
            <a href="#">
              <div class="social">
                <img src="img/s1.svg" alt="facebook">
              </div>
            </a>
            <a href="#">
              <div class="social">
                <img src="img/s2.svg" alt="facebook">
              </div>
            </a>
            <a href="#">
              <div class="social">
                <img src="img/s3.svg" alt="facebook">
              </div>
            </a>
          </div>
        </div>
      </nav>
    </div>

    <div class="header-content container">
      <div class="swiper mySwiper-1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slider">
              <div class="slider-text">
                <h1>HydroFlow Quantum</h1>
                <p>Con su tecnología avanzada y diseño robusto, este producto es ideal para una amplia gama de aplicaciones, garantizando siempre el mejor rendimiento y satisfacción del cliente.</p>
                <div class="botones">
                  <a href="checkout.php?product=HydroFlow Quantum" class="btn-1">Comprar</a>
                </div>
              </div>
              <div class="slider-img">
                <img src="img/grif1.png" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider">
              <div class="slider-text">
                <h1>AquaPulse Neo</h1>
                <p>Con su diseño innovador y materiales de primera clase, este producto ofrece un rendimiento excepcional y una durabilidad insuperable, adaptándose a una amplia variedad de aplicaciones y necesidades.</p>
                <div class="botones">
                  <a href="checkout.php?product=AquaPulse Neo" class="btn-1">Comprar</a>
                </div>
              </div>
              <div class="slider-img">
                <img src="img/grif2.png" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider">
              <div class="slider-text">
                <h1>AquaEdge Titan</h1>
                <p>Este producto garantiza un flujo de agua óptimo y una operación fiable en una amplia variedad de aplicaciones, ofreciendo siempre la mejor calidad y satisfacción.</p>
                <div class="botones">
                  <a href="checkout.php?product=AquaEdge Titan" class="btn-1">Comprar</a>
                </div>
              </div>
              <div class="slider-img">
                <img src="img/grif3.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </header>

  <main class="products">
    <div class="tabs container">
      <input type="radio" name="tabs" id="tab1" checked="checked" class="tabInput" value="1">
      <label for="tab1">Tarjetas</label>
      <div class="tab">
        <div class="swiper mySwiper-2" id="swiper1">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="product">
                <div class="product-img">
                  <a href="tarjet.php"><h4>Tipo A</h4></a>
                  <img src="img/gold.jpg" alt="">
                </div>
                <div class="product-text">
                  <h4>Golden</h4>
                  <span class="price">S/15.00</span>
                </div>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="product">
                <div class="product-img">
                <a href="tarjet.php"><h4>Tipo B</h4></a>
                  <img src="img/plat.jpg" alt="">
                </div>
                <div class="product-text">
                  <h4>Platinium</h4>
                  <span class="price">S/10.00</span>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="product">
                <div class="product-img">
                  <a href="tarjet.php"><h4>Tipo C</h4></a>
                  <img src="img/silver.jpg" alt="">
                </div>
                <div class="product-text">
                  <h4>Silver</h4>
                  <span class="price">S/5.00</span>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>

    </div>
  </main>

  <section class="info container">
    <div class="info-img">
      <img src="img/tarj.png" alt="">
    </div>
    <div class="info-text">
      <h2>Informacion</h2>
      <p>Si cuentas con una tarjeta, puedes recargarla dando clic en el botón correspondiente. Asegúrate de tener tu tarjeta a mano y sigue las instrucciones en pantalla para completar la recarga de manera segura y rápida. ¡Es fácil y conveniente!</p>
      <a href="recarga.php" class="btn-2">Recargar ahora</a>
    </div>
  </section>

  <section class="horario">
    <div class="horario-info container">
      <h2>Atencion</h2>
      <div class="horario-txt">
        <div class="txt">
          <h4>Direccion</h4>
          <p>Av. San Borja Sur 64</p>
        </div>
        <div class="txt">
          <h4>Horario</h4>
          <p>Lunes a Viernes</p>
          <p>6:00 am - 6:00 pm</p>
        </div>
        <div class="txt"> 
          <h4>Telefono</h4>
          <p>904 729 011</p>
        </div>
        <div class="txt">
          <h4>Redes Sociales</h4>
          <div class="socials">
            <a href="#">
              <div class="social">
                <img src="img/s1.svg" alt="facebook">
              </div>
            </a>
            <a href="#">
              <div class="social">
                <img src="img/s2.svg" alt="facebook">
              </div>
            </a>
            <a href="#">
              <div class="social">
                <img src="img/s3.svg" alt="facebook">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249754.90820656312!2d-77.15532065390619!3d-12.014549692635248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5f619ee3ec7%3A0x14206cb9cc452e4a!2sLima!5e0!3m2!1ses-419!2spe!4v1720678232817!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>

  <footer class="footer container">
    <img class="logo-2" src="img/logo1.png" alt="">
    <div class="links">
      <h4>Contactanos en:</h4>
      <div class="socials">
        <a href="#">
          <div class="social">
            <img src="img/s1.svg" alt="facebook">
          </div>
        </a>
        <a href="#">
          <div class="social">
            <img src="img/s2.svg" alt="facebook">
          </div>
        </a>
        <a href="#">
          <div class="social">
            <img src="img/s3.svg" alt="facebook">
          </div>
        </a>
      </div>
    </div>
  </footer>

  

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
