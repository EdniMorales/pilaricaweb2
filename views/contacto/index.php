
<section class="seccion-contacto">
  <div class="container">

    <div class="text-center mb-5">
      <h1 class="fw-bold">Contáctanos</h1>

      <p class="text-muted">
        Estamos disponibles para atender tus dudas, solicitudes o cotizaciones.
      </p>
    </div>

    <div class="card contact-card">
      <div class="row g-0">

        <!-- INFORMACIÓN -->

        <div class="col-lg-4">
          <div class="contact-info">

            <h2 class="mb-3">Información de contacto</h2>

            <p class="mb-4">
              Escríbenos o visítanos. Con gusto atenderemos tu solicitud.
            </p>

            <div class="dato-contacto">
              <strong>Teléfono</strong>
              <span>55 1234 5678</span>
            </div>

            <div class="dato-contacto">
              <strong>Correo electrónico</strong>
              <span>contacto@miempresa.com</span>
            </div>

            <div class="dato-contacto">
              <strong>Dirección</strong>
              <span>
                Av. Principal #123<br>
                Estado de México, México
              </span>
            </div>

            <div class="dato-contacto">
              <strong>Horario</strong>
              <span>
                Lunes a viernes<br>
                9:00 AM - 6:00 PM
              </span>
            </div>

          </div>
        </div>

        <!-- FORMULARIO -->

        <div class="col-lg-8">
          <div class="p-4 p-md-5">

            <h3 class="fw-bold mb-4">
              Envíanos un mensaje
            </h3>

            <form id="formContacto">

              <div class="row g-3">

                <div class="col-md-6">
                  <label for="nombre" class="form-label">
                    Nombre *
                  </label>

                  <input
                    type="text"
                    class="form-control"
                    id="nombre"
                    name="nombre"
                    required
                  >
                </div>

                <div class="col-md-6">
                  <label for="empresa" class="form-label">
                    Empresa
                  </label>

                  <input
                    type="text"
                    class="form-control"
                    id="empresa"
                    name="empresa"
                  >
                </div>

                <div class="col-md-6">
                  <label for="correo" class="form-label">
                    Correo electrónico *
                  </label>

                  <input
                    type="email"
                    class="form-control"
                    id="correo"
                    name="correo"
                    required
                  >
                </div>

                <div class="col-md-6">
                  <label for="telefono" class="form-label">
                    Teléfono
                  </label>

                  <input
                    type="tel"
                    class="form-control"
                    id="telefono"
                    name="telefono"
                  >
                </div>

                <div class="col-md-12">
                  <label for="asunto" class="form-label">
                    Asunto
                  </label>

                  <select
                    class="form-select"
                    id="asunto"
                    name="asunto"
                  >
                    <option value="">Seleccione...</option>
                    <option value="cotizacion">Solicitar cotización</option>
                    <option value="informacion">Solicitar información</option>
                    <option value="soporte">Soporte</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>

                <div class="col-md-12">
                  <label for="mensaje" class="form-label">
                    Mensaje *
                  </label>

                  <textarea
                    class="form-control"
                    id="mensaje"
                    name="mensaje"
                    required
                  ></textarea>
                </div>

                <div class="col-12">
                  <button
                    type="submit"
                    class="btn btn-primary btn-contacto"
                  >
                    Enviar mensaje
                  </button>
                </div>

              </div>

            </form>

          </div>
        </div>

      </div>
    </div>

    <!-- MAPA -->

    <div class="mt-5">

      <div class="mb-3">
        <h3 class="fw-bold">
          Nuestra ubicación
        </h3>

        <p class="text-muted">
          Encuéntranos fácilmente en Google Maps.
        </p>
      </div>

      <div id="map"></div>

    </div>

  </div>
</section>


<!-- Bootstrap JS -->
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


<script>

  async function initMap() {

    // Cambia estas coordenadas por las de tu negocio
    const ubicacion = {
      lat: 19.432608,
      lng: -99.133209
    };

    // Cargar las librerías de Google Maps
    const { Map } =
      await google.maps.importLibrary("maps");

    const { AdvancedMarkerElement } =
      await google.maps.importLibrary("marker");


    // Crear mapa
    const mapa = new Map(
      document.getElementById("map"),
      {
        center: ubicacion,
        zoom: 16,

        // Para pruebas
        mapId: "DEMO_MAP_ID",

        mapTypeControl: false,
        streetViewControl: false,
        fullscreenControl: true
      }
    );


    // Crear marcador
    const marcador = new AdvancedMarkerElement({
      map: mapa,
      position: ubicacion,
      title: "Mi Empresa"
    });

  }


  // FORMULARIO

  document
    .getElementById("formContacto")
    .addEventListener("submit", function(event) {

      event.preventDefault();

      const nombre =
        document.getElementById("nombre").value;

      alert(
        "Gracias " +
        nombre +
        ", hemos recibido tu mensaje."
      );

      this.reset();

    });

</script>


<!-- GOOGLE MAPS API -->

<script
  async
  src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&loading=async&callback=initMap">
</script>