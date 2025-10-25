<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <p class="title-1 imperial-script-regular">" Solo el amor supera las bondades de la leche "</p>     
          <!--       <p class="title-2 lead">En Lácteos la Pilarica sabemos que todos tenemos preferencias
                    diferentes, por eso contamos con una extensa gama de
                    productos, elaborados con el mismo amor de siempre.</p> -->
                    <!-- Usando utilidades de Bootstrap -->
            </div>
        </div>
    </div>
</header>
<!-- Historia Don Fidel-->
<section class="py-5">
    <div class="py-3">
        <div class="container px-5 my-5">
            <div class="row gx-5 text-justify">
                <div class="col-lg-12 col-xl-12">
                    <div class="text-center">
                        <p class="title-2 dancing-script-bold"> Somos una empresa mexicana </p>
                        <p class="title-info">Ubicada en Ixtapaluca, Estado de México</p>
                        <div class="title-info-2 mb-4 wow animated zoomIn" data-wow-delay="0.5s">
                            "En La Pilarica elaboramos quesos artesanales desde 1980,
                            nuestro compromiso con la calidad y el sabor auténtico nos
                            ha convertido en una tradición que se comparte de generación en generación, llevando a cada mesa un producto
                            lleno de historia, pasión y confianza."
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="rounded-circle me-3" src="<?= base_url ?>assets/40ani-1.png" alt="..." />
                            <div class="fw-bold">
                                Sr. Fidel Alfaro
                                <span class="fw-bold text-primary mx-1">/</span>
                                Fundador Lacteos La Pilarica
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
        <section class="stilo-section-prod-fav text-center">
            <div class="px-5 my-5 stilo-prod-fav">
                <div class="row">
                    <div class="col-lg-12">
                  <h2 class="tit-prod-fav">Nuestros productos favoritos</h2>
                  <p class="tit-prod-fav-1">Elaborados de forma 100% artesanal</p>
                </div>
                    <div class="col-lg-4">
                        <div class="mx-auto mb-5 mb-lg-0">
                           <img class="img-fluid rounded-circle mb-2" src="<?= base_url ?>assets/new-cheese/oaxaca/queso-oaxaca-1kg.png" alt="queso-oaxaca-1kg" />
                          <p class="subtit-prod-fav">Queso Panela</p>
                          <P class="subtit-prod-fav-1">Encuéntralo en presentaciones de 1kg y 500 grs. </P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="<?= base_url ?>assets/new-cheese/oaxaca/queso-oaxaca-1kg.png" alt="..." />
                             <p class="subtit-prod-fav">Queso Oaxaca</p>
                             <p class="subtit-prod-fav-1">Encuéntralo en presentaciones de 10kg, 6kg, 3.2kg, 500 grs y 200grs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="<?= base_url ?>assets/new-cheese/oaxaca/queso-oaxaca-1kg.png" alt="..." />
                             <p class="subtit-prod-fav">Crema</p>
                                <p class="subtit-prod-fav-1">Encuéntrala en presentaciones de 4.5 kg, 500 ml y 200ml. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="stilo-section-prod-fav-1 text-center">
            <div class="px-5 my-5 stilo-prod-fav-1">
                <div id="ProductosRandomPrincipal"  class="row">
                    <div class="col-lg-12">
                        <h2 class="tit-prod-fav-2">Nuestros productos</h2>
                        <p class="tit-prod-fav-2-1">Conoce la variedad de productos que tenemos para ti</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-2" src="<?= base_url ?>assets/new-cheese/oaxaca/queso-oaxaca-1kg.png" alt="queso-oaxaca-1kg" />
                        <p class="subtit-prod-fav-2">Queso Panela</p>
                        </div>
                        <div class="subtit-prod-fav-2-1">  
                            <button type="button" class="btn btn-warning btn-lg" id="ButtomRandom2" onclick="window.location.href='<?= base_url ?>'">VER MAS</button></div> 
                    </div>
                    <div class="col-lg-4">
                        <div class="mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="<?= base_url ?>assets/new-cheese/oaxaca/queso-oaxaca-1kg.png" alt="..." />
                            <p class="subtit-prod-fav-2">Queso Oaxaca</p> 
                        </div>
                        <div class="subtit-prod-fav-2-1">  
                            <button type="button" class="btn btn-warning btn-lg" id="ButtomRandom3" onclick="window.location.href='<?= base_url ?>'">VER MAS</button>
                        </div> 
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="<?= base_url ?>assets/new-cheese/oaxaca/queso-oaxaca-1kg.png" alt="..." />
                            <p class="subtit-prod-fav-2">Crema</p>
                        </div>
                        <div class="subtit-prod-fav-2-1">  
                            <button type="button" class="btn btn-warning btn-lg" id="ButtomRandom1" onclick="window.location.href='<?= base_url ?>'">VER MAS</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="module">
            import * as random from '<?= base_url ?>js/random.js';
        </script>
<!-- <section class="stilo-frase p-5 ">
    <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start container">
            <div class="mb-4 mb-xl-0 container">
                <div class="title-7">
                    ¡Solo el Amor supera las bondades de la leche!
                </div>
            </div>
            <div class="ms-xl-4 container">
                <div class="">
                </div>
            </div>
        </div>
</section>
 -->
<!-- <section class="content-section" id="portfolio">
    <div class="container px-4 px-lg-5">
        <div class="content-section-heading text-center">
            <h3 class="text-secondary mb-0 title-4">Nuestros Productos</h3>
            <h2 class="mb-5 title-4"> - La mejor calidad y sabor artesanal hasta tu mesa -</h2>
        </div>
        <div class="row gx-0">
            <div class="col-lg-6">
                <a class="portfolio-item" href="#!">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="title-5">Quesos Maduros</div>
                            <p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?= base_url ?>assets/quesos-maduros.jpg" width="750" height="500"
                        alt="..." />
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="#!">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="title-5">Quesos</div>
                          <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream
                                cone!</p> 
                        </div>
                    </div>
                    <img class="img-fluid" src="<?= base_url ?>assets/quesos-maduros.jpg" width="750" height="500"
                        alt="..." />
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="#!">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="title-5">Yogurth</div>
                           <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!
                            </p> 
                        </div>
                    </div>
                    <img class="img-fluid" src="<?= base_url ?>assets/yogurt-foto-fresas.jpg" width="750" height="500"
                        alt="..." />
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="#!">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="title-5">Postres</div>
                            <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p> 
                        </div>
                    </div>
                    <img class="img-fluid" src="<?= base_url ?>assets/pays.jpg" width="750" height="500" alt="..." />
                </a>
            </div>
        </div>
    </div>
</section> -->
<!-- <section>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('../assets/quesos-maduros.jpg')">
        <div class="carousel-caption">
          <p class="title-carrusel-1">Pay Natural</p>
          <p class="subtitle-carrusel-2">prueba nuestros deliciosos sabores Zarzamora y Fresa</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('../assets/yogurt-foto-fresas.jpg')">
        <div class="carousel-caption">
         <p class="title-carrusel-1">Pay Natural</p>
          <p class="subtitle-carrusel-2">prueba nuestros deliciosos sabores Zarzamora y Fresa</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('../assets/pays.jpg')">
        <div class="carousel-caption">
         <p class="title-carrusel-1">Pay Natural</p>
          <p class="subtitle-carrusel-2">prueba nuestros deliciosos sabores Zarzamora y Fresa</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section> -->
<!-- <section>
    <div>
        <div class="parallax parallax-1">
            <div class="parallax-caption">
                <p class="princess-sofia-regular">Provolone</p>
                <p>Explore the wonders of the great outdoors.</p>
            </div>
        </div>
        <div class="container py-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna vel auctor luctus, leo nunc
                tincidunt
                risus, id bibendum magna magna quis velit.</p>
        </div>
        <div class="parallax parallax-2"> 
            <div class="parallax-caption">
                <p class="libertinus-serif-regular">EDAM</p>
                <p>Discover the vibrant energy of modern cities.</p>
            </div>
        </div>
        <div class="container py-5">
            <p>Nullam vel mi vel risus rutrum consequat a vel dui. Aliquam erat volutpat. Sed consectetur turpis eget
                metus
                hendrerit, vel facilisis mauris venenatis.</p>
        </div>
        <div class="parallax parallax-3">
            <div class="parallax-caption">
                <h3>Architectural Wonders</h3>
                <p>Marvel at the stunning creations of human ingenuity.</p>
            </div>
        </div>
    </div>
</section> -->
<!-- Team members section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center">
            <p class="title-8">Todas nuestras especialidades</p>
            <p class="title-10 mb-5">
                La mejor calidad y sabor artesanal hasta tu mesa | Elaborados 100% Artesanal
            </p>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4">
            <div class="flip-box">
                <div class="flip-box-inner col mb-5 mb-5 mb-xl-0">
                    <div class="flip-box-front text-center">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/oaxacabn.png" alt="..." />
                    </div>
                    <div class="flip-box-back">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/oaxaca-01.png" alt="..." />
                    </div>
                </div>
            </div>
            <div class="flip-box">
                <div class="flip-box-inner col mb-5 mb-5 mb-xl-0">
                    <div class="flip-box-front text-center">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/panelabn.png" alt="..." />
                    </div>
                    <div class="flip-box-back">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/Panela-01.png" alt="..." />
                    </div>
                </div>
            </div>
            <div class="flip-box">
                <div class="flip-box-inner col mb-5 mb-5 mb-xl-0">
                    <div class="flip-box-front text-center">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/cremabn.png" alt="..." />
                    </div>
                    <div class="flip-box-back">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/cremabn.png" alt="..." />
                    </div>
                </div>
            </div>
            <div class="flip-box">
                <div class="flip-box-inner col mb-5 mb-5 mb-xl-0">
                    <div class="flip-box-front text-center">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/mozzarellabn.png" alt="..." />
                    </div>
                    <div class="flip-box-back">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/Logo-MozzarellaD.png" alt="..." />
                    </div>
                </div>
            </div>
            <div class="flip-box">
                <div class="flip-box-inner col mb-5 mb-5 mb-xl-0">
                    <div class="flip-box-front text-center">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/gustodelicatobn.png" alt="..." />
                    </div>
                    <div class="flip-box-back">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/Gusto-01.png" alt="..." />
                    </div>
                </div>
            </div>
            <div class="flip-box">
                <div class="flip-box-inner col mb-5 mb-5 mb-xl-0">
                    <div class="flip-box-front text-center">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/mashiegobn.png" alt="..." />
                    </div>
                    <div class="flip-box-back">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/manchego-01.png" alt="..." />
                    </div>
                </div>
            </div>
            <div class="flip-box">
                <div class="flip-box-inner col mb-5 mb-5 mb-xl-0">
                    <div class="flip-box-front text-center">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/RancheroGourmetbn.png" alt="..." />
                    </div>
                    <div class="flip-box-back">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/RancheroGourmetbn.png" alt="..." />
                    </div>
                </div>
            </div>
            <div class="flip-box">
                <div class="flip-box-inner col mb-5 mb-5 mb-xl-0">
                    <div class="flip-box-front text-center ">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/requesonbn.png" alt="..." />
                    </div>
                    <div class="flip-box-back">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/logo-requeson.png" alt="..." />
                    </div>
                </div>
            </div>
            <div class="flip-box">
                <div class="flip-box-inner col mb-5 mb-5 mb-xl-0">
                    <div class="flip-box-front text-center">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/rancherobn.png" alt="..." />
                    </div>
                    <div class="flip-box-back">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/Ranchero-01.png" alt="..." />
                    </div>
                </div>
            </div>
            <div class="flip-box">
                <div class="flip-box-inner col mb-5 mb-5 mb-xl-0">
                    <div class="flip-box-front text-center">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/ralladobn.png" alt="..." />
                    </div>
                    <div class="flip-box-back">
                        <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/Rallado-01.png" alt="..." />
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/frescobn.png" alt="..." />
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/Cotijabn.png" alt="..." />
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/doble_crema_bn.png" alt="..." />
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/chihuahuabn.png" alt="..." />
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/capressebn.png" alt="..." />
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/padellabn.png" alt="..." />
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/Botanerobn.png" alt="..." />
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/fresas_con_crema_bn.png" alt="..." />
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/duraznos_con_crema_bn.png" alt="..." />
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/Gelatina-logo-bn.png" alt="..." />
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/cajetabn.png" alt="..." />
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/crema_fresas_bn.png" alt="..." />
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/Logo-Pay-bn.png" alt="..." />
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid mb-4 px-4" src="<?= base_url ?>assets/Yoghurt-logo-bn.png" alt="..." />
                </div>
            </div>
         
        </div>
    </div>
</section>
<!-- <section class="cont-color">
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class=" col-md-4 col-lg-8 bg-image"></div>
            <div class="col-md-8 col-lg-4">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4 text-center tiitle-quejas">Quejas y Sugerencias</h3>
                                <form class="row g-3" id="FormularioQS" enctype="multipart/form-data">
                                    <div class="col-md-6">
                                        <label for="NombreFormQS" class="form-label tiitle-description">Nombre</label>
                                        <input type="text" class="form-control" name="NombreFormQS" id="NombreFormQS"
                                            placeholder="Coloca tu nombre" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ApellidoFormQS" class="form-label tiitle-description">Apellido</label>
                                        <input type="text" class="form-control" name="ApellidoFormQS"
                                            id="ApellidoFormQS" placeholder="Coloca tu apellido" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="EmailFormQS" class="form-label tiitle-description">Email</label>
                                        <input type="email" class="form-control" name="EmailFormQS" id="EmailFormQS"
                                            placeholder="Coloca tu correo" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="DireccionFormQS" class="form-label tiitle-description">Direccion</label>
                                        <input type="text" class="form-control" name="DireccionFormQS"
                                            id="DireccionFormQS" placeholder="Opcional">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="TelFormQS" class="form-label tiitle-description">Teléfono</label>
                                        <input type="tel" class="form-control" name="TelFormQS" id="TelFormQS"
                                            placeholder="Opcional">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="EmpresaFormQS" class="form-label tiitle-description">Empresa</label>
                                        <input type="text" class="form-control" name="EmpresaFormQS" id="EmpresaFormQS"
                                            placeholder="Opcional">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="TipoFormQS" class="form-label tiitle-description">Tipo de mensaje</label>
                                        <select class="form-select" name="TipoFormQS" id="TipoFormQS" required>
                                            <option value="" selected disabled>Selecciona el tipo de mensaje</option>
                                            <option value="Queja">Queja</option>
                                            <option value="Sugerencia">Sugerencia</option>
                                            <option value="Agradecimiento">Agradecimiento</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="MensajeFormQS" class="form-label tiitle-description">Coloca tu mensaje aqui</label>
                                        <textarea type="text" class="form-control" name="MensajeFormQS"
                                            id="MensajeFormQS" rows="4" required></textarea>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="FileFormQS" class="form-label tiitle-description">Adjuntar</label>
                                        <label for="FileFormQS" class="custom-file-upload">. . .</label>
                                        <input type="file" class="form-control" name="FileFormQS" id="FileFormQS">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="gridCheck"
                                                id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                ¿Te gustarria suscribirte gratis para recibir ofertas, noticias,
                                                promociones, recetas y más?
                                            </label>
                                        </div>
                                    </div>
                                </form>
                                <div class="row g-3">
                                    <div class="col-md-12" style="margin-top: 40px;">
                                        <button class="btn btn-warning" name="BotonEnviarQS"
                                            id="BotonEnviarQS">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- 
<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1CIoJNcqQMw4FTF3TvxjQXvAchNVFOQ4&ehbc=2E312F&noprof=1"
    width="100%" height="600" style="border: 0" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe> -->

    <script type="module">
        import * as random from '../js/random.js';
    </script>
