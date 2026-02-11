</main>
<footer class="text-center">
  <!--     <div>
        <img src="<?= base_url ?>assets/new-cheese/onda.png" class="banner-onda fondo" alt="">
    </div> -->
    <section class="cont-color2">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <p class="text-uppercase fw-bold mb-4 txt-catego-foot">
                        <!-- <i class="fas fa-gem me-3"></i> -->Lacteos La Pilarica</p>
                    <p class="text-left txt-links">
                        En Lácteos la Pilarica sabemos que todos tenemos preferencias
                        diferentes, por eso contamos con una extensa gama de productos,
                        elaborados con el mismo amor de siempre.
                    </p>
                    <p class="txt-links">
                        ¡Suscríbete gratis para recibir ofertas, noticias, promociones, recetas y más!</p>
                    <div class="container text-left">
                        <div class="input-group">
                            <input class="form-control" id="CasillaFooterSuscripcionCorreo" type="text"
                                placeholder="¡Ingresa tu correo!" aria-label="Correo Electronico..."
                                aria-describedby="button-newsletter" />
                            <button class="btn btn-outline-light" id="BotonFooterSuscribirse" type="button">
                                Registrarse
                            </button>
                        </div>
                        <div class="frase-priv text-white-50">
                            Nos preocupamos por la privacidad y nunca compartiremos sus datos.
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <p class="text-uppercase fw-bold mb-4 txt-catego-foot">Productos</p>
                    <p><a href="../quesosblancos/index" class="text-reset txt-links">Quesos Blancos</a></p>
                    <p><a href="../quesosamarillos/index" class="text-reset txt-links">Quesos Amarillos</a></p>
                    <p><a href="../quesoslineagourmet/index" class="text-reset txt-links">Quesos Linea Gourmet</a></p>
                    <p><a href="../crema/index" class="text-reset txt-links">Cremas</a></p>
                    <p><a href="../canastas/index" class="text-reset txt-links">Regala una canasta</a></p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <p class="text-uppercase fw-bold mb-4 txt-catego-foot">Disfruta con</p>
                    <p><a href="../postres/index" class="text-reset txt-links">Postres</a></p>
                    <p><a href="../ricottines/index" class="text-reset txt-links">Ricottines</a></p>
                    <p><a href="../yogurth/index" class="text-reset txt-links">Yogures</a></p>
                    <p><a href="../congelados/index" class="text-reset txt-links">Congelados</a></p>
                    <p><a href="../complementos/index" class="text-reset txt-links">Complementos</a></p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <p class="text-uppercase fw-bold mb-4 txt-catego-foot">Ubicanos</p>
                    <p class="txt-links"><i class="fas fa-home me-3"></i>Benito Juárez Sur N 46, Centro, 56530 Ixtapaluca, Méx.</p>
                    <p class="txt-links"><i class="fas fa-envelope me-3"></i>soporte@pilarica.mx</p>
                    <p><i class="fas fa-phone me-3"></i><a href="tel:+5559720102" class="txt-links">(55) 5972 0102</a></p>
                    <p><i class="fas fa-phone me-3"></i><a href="tel:+5559720522" class="txt-links">(55) 5972 0522</a></p>
                    <p><i class="fas fa-phone me-3"></i><a href="tel:+5559720026" class="txt-links">(55) 5972 0026</a></p>
                    <p><i class="fab fa-whatsapp me-3"></i><a href="tel:+5559720102" class="txt-links">(56) 4543 8166</a></p>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center text-white p-4" style="background-color: #113D7C">
        © 2025 Copyright:<p>Lacteos La Pilarica</p>
        <a data-mdb-ripple-init class="btn btn-primary texto-normal" style="background-color: #3b5998;" href="https://www.facebook.com/lacteospilaricamx" target="_blank"
            role="button"><i class="fab fa-facebook-f"></i></a>
        <a data-mdb-ripple-init class="btn btn-primary texto-normal" style="background-color: #ac2bac;" href="https://www.instagram.com/lacteoslapilariaca/" target="_blank"
        role="button"><i class="fab fa-instagram"></i></a>
        <a data-mdb-ripple-init class="btn btn-primary texto-normal" style="background-color: #0082ca;" href="#!"
            role="button"><i class="fab fa-linkedin-in"></i></a>
        <a data-mdb-ripple-init class="btn btn-primary texto-normal" style="background-color: #ed302f;" href="https://youtube.com/@lacteoslapilarica2504?si=jQUMkOhq6aqVxQDT" target="_blank"
            role="button"><i class="fab fa-youtube"></i></a>
        <a data-mdb-ripple-init class="btn btn-primary texto-normal" style="background-color: #25d366;" href="#!" role="button"><i class="fab fa-whatsapp"></i></a>
    </div>
</footer>
<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-150px";
        }
        prevScrollpos = currentScrollPos;
    };
</script>
<script>
    $(".dropdown").on("show.bs.dropdown", function() {
        $(this)
            .find(".dropdown-menu")
            .first()
            .stop(true, true)
            .slideToggle(1000);
    });
    $(".dropdown").on("hide.bs.dropdown", function() {
        $(this)
            .find(".dropdown-menu")
            .first()
            .stop(true, true)
            .slideToggle(1000);
    });
</script>
<script type="module">
    import * as trriggers from '<?= base_url ?>backend/trigger.js'; // Importar las funciones desde el módulo
console.log("Cargado el footer");
// Asocia los eventos con los elementos del HTML
document.getElementById("buscador-prod-index").addEventListener("input", function() {
    const buttonString = "buscador-prod-index";
    const pageString = "index";
    const widgetString = "dropdown-index";
    trriggers.ProductSearch(buttonString, pageString, widgetString);
}); // Barra de navegación
document.getElementById("button-buscador-prod-index").addEventListener("click", function() {
    const buttonString = "buscador-prod-index"; // El item con informacion
    const pageString = "index";
    const widgetString = "dropdown-index";
    trriggers.ProductSearch(buttonString, pageString, widgetString); // Pasa el string a la función
}); // Formulario de quejas y sugerencias
document.getElementById("BotonEnviarQS").addEventListener("click", function() {
    const Formulario = "FormularioQS";
    trriggers.EnviarDatosDelFormulario(Formulario); // Ejecutar la funcion que envia los datos al servidor
}); // Suscripcion del correo
document.getElementById("BotonFooterSuscribirse").addEventListener("click", function() {
    const casillaCorreo = "CasillaFooterSuscripcionCorreo";
    const casillaUsuario = "NombreFormQS";
    const casillaApellido = "ApellidoFormQS";
    trriggers.SuscribirCorreoPilaricaNews(casillaCorreo, casillaUsuario, casillaApellido);
}); // Botón de búsqueda
//document.getElementById("navbarSupportedContent").addEventListener("click", function(){
//  const pageString = "index";
//  const widgetString = "Categorias";// El dropdown con las categorias
//  trriggers.CategoriasSearch(pageString, widgetString)
//});// Boton de las categorias
</script>

      <script>
        // Mostrar modal cuando la página carga completamente
        document.addEventListener('DOMContentLoaded', function() {
            // Esperar 1 segundo antes de mostrar el modal
            setTimeout(function() {
                openModal();
            }, 1000);
        });

        // Abrir modal
        function openModal() {
            const modal = document.getElementById('welcomeModal');
            modal.style.display = 'flex';
            
            // Guardar en localStorage para no mostrar muy seguido
            localStorage.setItem('modalShown', 'true');
        }

        // Cerrar modal
        function closeModal() {
            const modal = document.getElementById('welcomeModal');
            modal.style.display = 'none';
        }

        // Suscribirse al newsletter
        function subscribeNewsletter() {
            alert('¡Gracias por suscribirte! Pronto recibirás nuestras novedades.');
            closeModal();
        }

        // Cerrar modal al hacer clic fuera del contenido
        document.getElementById('welcomeModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Cerrar con tecla ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
    </script>

</body>

</html>