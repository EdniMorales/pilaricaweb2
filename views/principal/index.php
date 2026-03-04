<!-- <section class="fondo">
<header class="masthead fondo wow animated bounceInLeft" data-wow-delay="1s">
    <div class="container h-100 tab-1-image">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <p class="title-1 wow animated slideInDown" data-wow-delay="1s">" Solo el amor supera las bondades de la leche "</p>
            </div>
        </div>
    </div>
</header>
</section>
 -->
<!-- Modal -->
<!--     <div id="welcomeModal" class="modal-overlay">
        <div class="modal-content">
            <div class="modal-header">
              <h2>🎉 ¡Bienvenido!</h2> 
            </div>
            <div class="modal-body">
               <p>¡Gracias por visitar nuestro sitio web! Estamos contentos de tenerte aquí.</p>
                <p>¿Te gustaría suscribirte a nuestro boletín para recibir actualizaciones y ofertas exclusivas?</p> 
                <img src="<?= base_url ?>assets/temporadas/canastas-2. png" class="img-promo" alt="...">
            </div>
            <div class="modal-footer">
               <button class="btn-newsletter" onclick="subscribeNewsletter()">¡Sí, Suscribirme!</button> 
               <button class="btn-close" onclick="closeModal()">Cerrar</button> 

            </div>
        </div>
    </div>
 -->
<header class="masthead wow animated zoomInDown" data-wow-delay="1s">
    <div class="container h-100 tab-1-image">
        <!--   <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <p class="title-1 wow animated slideInDown" data-wow-delay="1s">" Solo el amor supera las bondades de la leche "
                </p>
            </div>
        </div> -->
    </div>
</header>

<div class="sect-mision-prin px-5 f-1-prin">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-xxl-8">
            <div class="text-center my-5">
                <p class="info-tit-1-prin">Más de cuatro</p>
                <p class="info-tit-2-prin"><span class="txt-dec">décadas</span></p>
                <p class="info-tit-3-prin">de sabor y tradición</p>
                <p class="info-somos-3-prin">Somos una empresa mexicana que nace del amor por el queso artesanal.  Desde Ixtapaluca, Estado de México, llevamos más de cuatro décadas transformando tradición y experiencia en productos que llegan a la mesa de muchas familias.
                </p>
                <button type="button" class="btn btn-secondary">Secondary</button>
                <!-- <p class="fw-bolder mb-3 title-love-1">Quienes</p>    
                            <p class="fw-bolder mb-3 title-love-2">somos?</p> -->
            </div>
        </div>
        <div class="col-lg-12 col-xxl-4">
            <div class="text-center my-5">
                <img src="<?= base_url ?>assets/new-cheese/banners/cuatro-anos-de-02.png" alt="" width="100"
                    height="650" class="info-somos-2">
                <!-- <p class="info-tit">Nuestra Misión</p>
                        <p class="info-somos-1">Alimentar a la sociedad con productos auténticos, naturales, funcionales, accesibles e innovadores, guiados por la pasión y el amor por lo que hacemos, con un firme compromiso en satisfacer y superar las expectativas de nuestros clientes y consumidores.
                        </p> -->
                <!--   <p class="fw-bolder mb-3 title-love-1">Quienes</p>    
                                            <p class="fw-bolder mb-3 title-love-2">somos?</p> -->
            </div>
        </div>
    </div>
</div>
<section class="fondo tab-2 py-5">
    <div class="py-3">
        <div class="fondo container px-5 my-5">
            <div class="row gx-5 text-justify">
                <div class="col-lg-12 col-xl-12">
                    <div class="text-center">
                        <p class="title-2 dancing-script-bold wow animated bounceInLeft " data-wow-delay="2s"> Somos una
                            empresa mexicana </p>
                        <p class="title-info">Ubicada en Ixtapaluca, Estado de México</p>
                        <div class="title-info-2 mb-4 wow animated zoomIn" data-wow-delay="0.5s">
                            "En La Pilarica elaboramos quesos artesanales desde 1980, nuestro compromiso con la calidad
                            y el sabor auténtico nos
                            ha convertido en una tradición que se comparte de generación en generación, llevando a cada
                            mesa un producto lleno de historia, pasión y confianza."
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <img class=" img-logo-tiempo"
                                src="<?= base_url ?>assets/new-cheese/logos/Logo-aniversario.png" alt="..." />
                            <div class="fw-bold texto-fidel">
                                Sr. Fidel Alfaro
                                <span class="fw-bold text-primary mx-1">/</span>
                                Fundador Lácteos La Pilarica
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="car-prod container">
    <h1>🛍️ Productos Destacados</h1>
    <div class="carousel-container">
        <button class="carousel-button prev" onclick="moveSlide(-1)">❮</button>
        <button class="carousel-button next" onclick="moveSlide(1)">❯</button>
        <div class="carousel-track" id="carouselTrack">
            <!-- Producto 1 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="<?= base_url ?>assets/new-cheese/yogurt/250/Yogurt-natural-250.png"
                        alt="Yogurt-Natural">
                    <span class="product-badge">NATURAL</span>
                </div>
            <!--     <div class="product-info">
                    <div class="product-category">Electrónica</div>
                    <div class="product-title">Auriculares Inalámbricos Premium</div>
                    <div class="product-rating">
                        ★★★★★ <span>(124)</span>
                    </div>
                    <div class="product-price">
                        $89.99 <small>$129.99</small>
                    </div>
                    <button class="btn-add" onclick="addToCart('Auriculares Inalámbricos', 89.99)">Añadir al
                        Carrito</button>
                </div> -->
            </div>

            <!-- Producto 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="<?= base_url ?>assets/new-cheese/yogurt/250/Yogurt-fresa-250.png"
                        alt="Yogurt-Fresa">
                    <span class="product-badge">FRESA</span>
                </div>
              <!--   <div class="product-info">
                    <div class="product-category">Moda</div>
                    <div class="product-title">Zapatillas Deportivas Ultra Boost</div>
                    <div class="product-rating">
                        ★★★★☆ <span>(89)</span>
                    </div>
                    <div class="product-price">
                        $79.99 <small>$114.99</small>
                    </div>
                    <button class="btn-add" onclick="addToCart('Zapatillas Deportivas', 79.99)">Añadir al
                        Carrito</button>
                </div> -->
            </div>

            <!-- Producto 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="<?= base_url ?>assets/new-cheese/yogurt/250/Yogurt-mango-250.png"
                        alt="Yogurt-Mango">
                    <span class="product-badge">MANGO</span>
                </div>
             <!--    <div class="product-info">
                    <div class="product-category">Accesorios</div>
                    <div class="product-title">Reloj Inteligente Series 5</div>
                    <div class="product-rating">
                        ★★★★★ <span>(256)</span>
                    </div>
                    <div class="product-price">
                        $199.99 <small>$249.99</small>
                    </div>
                    <button class="btn-add" onclick="addToCart('Reloj Inteligente', 199.99)">Añadir al Carrito</button>
                </div> -->
            </div>

            <!-- Producto 4 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="<?= base_url ?>assets/new-cheese/yogurt/250/Yogurt-cereal-250.png"
                        alt="Yogurt-Cereal">
                    <span class="product-badge">CEREAL</span>
                </div>
               <!--  <div class="product-info">
                    <div class="product-category">Tecnología</div>
                    <div class="product-title">Smartwatch Deportivo Pro</div>
                    <div class="product-rating">
                        ★★★★☆ <span>(67)</span>
                    </div>
                    <div class="product-price">
                        $149.99 <small>$179.99</small>
                    </div>
                    <button class="btn-add" onclick="addToCart('Smartwatch Deportivo', 149.99)">Añadir al
                        Carrito</button>
                </div> -->
            </div>

            <!-- Producto 5 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="<?= base_url ?>assets/new-cheese/yogurt/250/Yogurt-nuez-250.png"
                        alt="Yogurt-Nuez">
                    <span class="product-badge">NUEZ</span>
                </div>
      <!--           <div class="product-info">
                    <div class="product-category">Belleza</div>
                    <div class="product-title">Perfume Elegance Collection</div>
                    <div class="product-rating">
                        ★★★★★ <span>(43)</span>
                    </div>
                    <div class="product-price">
                        $59.99 <small>$89.99</small>
                    </div>
                    <button class="btn-add" onclick="addToCart('Perfume Elegance', 59.99)">Añadir al Carrito</button>
                </div> -->
            </div>

            <!-- Producto 6 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="<?= base_url ?>assets/new-cheese/yogurt/250/Yogurt-zarza-250.png"
                        alt="Yogurt-Zarzamora">
                    <span class="product-badge">ZARZAMORA</span>
                </div>
        <!--         <div class="product-info">
                    <div class="product-category">Viajes</div>
                    <div class="product-title">Mochila Antirrobo con USB</div>
                    <div class="product-rating">
                        ★★★★☆ <span>(112)</span>
                    </div>
                    <div class="product-price">
                        $45.99 <small>$69.99</small>
                    </div>
                    <button class="btn-add" onclick="addToCart('Mochila Antirrobo', 45.99)">Añadir al Carrito</button>
                </div> -->
            </div>
        </div>
    </div>

    <div class="carousel-dots" id="carouselDots"></div>
</div>

<!-- 
<section class="stilo-section-prod-fav text-center">
    <div class="px-5 my-5 stilo-prod-fav">
        <div class="row">
            <div class="col-lg-12">
                <p class="tit-prod-fav">Los más favoritos</p>
                <p class="tit-prod-fav-1">Elaborados de forma 100% artesanal</p>
            </div>
            <div class="col-lg-4">
                <div class="mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3"
                        src="<?= base_url ?>assets/new-cheese/panela/Panela-1k-favoritos.png" alt="queso-oaxaca-1kg" />
                    <p class="subtit-prod-fav">Queso Panela</p>
                    <P class="subtit-prod-fav-1">Encuéntralo en presentaciones .300gr, 1 Kg y 2.7 Kg.</P>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3"
                        src="<?= base_url ?>assets/new-cheese/oaxaca/Oaxaca-1kg-favoritos.png" alt="..." />
                    <p class="subtit-prod-fav">Queso Oaxaca</p>
                    <p class="subtit-prod-fav-1">Encuéntralo en presentaciones .500gr, 1 Kg y Granel 3.3 Kg.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3"
                        src="<?= base_url ?>assets/new-cheese/crema/Crema-favoritos.png" alt="..." />
                    <p class="subtit-prod-fav">Crema</p>
                    <p class="subtit-prod-fav-1">Encuéntrala en presentaciones .200gr, .500gr, 1 Kg y 4.5 Kg.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<script type="module">
    import * as random from '<?= base_url ?>js/random.js';
</script>

<section class="stilo-section-prod-fav-3 fondo text-center">
    <div class="px-5 my-5 stilo-prod-fav-3">
        <div class="row">
            <div class="col-lg-6">
                <!--  px-5 my-5 -->
                <div class="mx-auto ">
                    <!-- mb-5 mb-lg-0 -->
                    <p class="subtit-prod-fav-3">Utilizamos leche 100% de vaca en nuestros productos</p>
                    <p class="subtit-prod-fav-4 ">
                        <!-- px-5 my-5 -->
                        Nuestros productos están elaborados con
                        leche 100% de vaca, cuidadosamente seleccionada. Mantenemos procesos
                        artesanales en cada etapa de la producción, respetando las tradiciones que garantizan el sabor
                        auténtico, frescura y calidad.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 tab-1-image">
                <div class="mx-auto mb-5 mb-lg-0">
                    <img class="mb-3 edit-img-yog"
                        src="<?= base_url ?>assets/new-cheese/yogurt/baner-yogurt-fresa_Mesa de trabajo 1.png"
                        alt="..." />
                </div>
            </div>
        </div>
    </div>
</section>


<section>

    <div class="card-carousel" id="contenedorCarrucelProductos">
        <div class="card">
            <div class="image-container" onclick="window.location.href='../Principal/index'">
            <img src="../assets/new-cheese/default.png" alt="Error categoria">
            </div>
            <p class="text_card_description">No se encontraron productos.</p>
        </div>
        <div class="card">
            <div class="image-container" onclick="window.location.href='../Principal/index'">
            <img src="../assets/new-cheese/default.png" alt="Error categoria">
            </div>
            <p class="text_card_description">${array.error}</p>
        </div>
        <div class="card">
            <div class="image-container" onclick="window.location.href='../Principal/index'">
            <img src="../assets/new-cheese/default.png" alt="Error categoria">
            </div>
            <p class="text_card_description">No se encontraron productos.</p>
        </div>
  </div>



</section>
<section class="cont-color">
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
                                        <label for="ApellidoFormQS"
                                            class="form-label tiitle-description">Apellido</label>
                                        <input type="text" class="form-control" name="ApellidoFormQS"
                                            id="ApellidoFormQS" placeholder="Coloca tu apellido" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="EmailFormQS" class="form-label tiitle-description">Email</label>
                                        <input type="email" class="form-control" name="EmailFormQS" id="EmailFormQS"
                                            placeholder="Coloca tu correo" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="DireccionFormQS"
                                            class="form-label tiitle-description">Direccion</label>
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
                                        <label for="TipoFormQS" class="form-label tiitle-description">Tipo de
                                            mensaje</label>
                                        <select class="form-select" name="TipoFormQS" id="TipoFormQS" required>
                                            <option value="" selected disabled>Selecciona el tipo de mensaje</option>
                                            <option value="Queja" class="text-black">Queja</option>
                                            <option value="Sugerencia" class="text-black">Sugerencia</option>
                                            <option value="Agradecimiento" class="text-black">Agradecimiento</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="MensajeFormQS" class="form-label tiitle-description">Coloca tu
                                            mensaje aqui</label>
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
                                            <label class="form-check-label text-black" for="gridCheck">
                                                ¿Te gustaría suscribirte gratis para recibir ofertas, noticias,
                                                promociones, recetas y mucho más?
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
</section>
<section class="fondo py-5 tab-1 tab-1-image">
    <div class="container px-5 my-5 tab-1">
        <div class="text-center">
            <p class="title-8 dancing-script-bold">Todas nuestras especialidades</p>
            <p class="title-10 mb-5">
                La mejor calidad y sabor artesanal hasta tu mesa | Elaborados 100% Artesanal
            </p>
        </div>
        <div class="fondo row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4">
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

<script type="module">
    import * as random from '../js/random.js';
</script>