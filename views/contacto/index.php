
<section class="contacto-1 ">




<div class="container formulario-proveedor">

  <div class="card">

    <div class="card-header">
      <h3 class="mb-1">Registro de Proveedores</h3>
      <p class="mb-0">
        Capture la información general, comercial y de contacto del proveedor.
      </p>
    </div>

    <div class="card-body p-4">

      <form id="formProveedor">

        <!-- DATOS GENERALES -->

        <div class="seccion-titulo">
          Datos generales
        </div>

        <div class="row g-3">

          <div class="col-md-6">
            <label for="razonSocial" class="form-label">
              Razón social *
            </label>

            <input
              type="text"
              class="form-control"
              id="razonSocial"
              name="razonSocial"
              required
            >
          </div>

          <div class="col-md-6">
            <label for="nombreComercial" class="form-label">
              Nombre comercial
            </label>

            <input
              type="text"
              class="form-control"
              id="nombreComercial"
              name="nombreComercial"
            >
          </div>

          <div class="col-md-4">
            <label for="rfc" class="form-label">
              RFC *
            </label>

            <input
              type="text"
              class="form-control"
              id="rfc"
              name="rfc"
              maxlength="13"
              required
            >
          </div>

          <div class="col-md-4">
            <label for="tipoProveedor" class="form-label">
              Tipo de proveedor
            </label>

            <select
              class="form-select"
              id="tipoProveedor"
              name="tipoProveedor"
            >
              <option value="">Seleccione...</option>
              <option>Materia prima</option>
              <option>Producto terminado</option>
              <option>Servicios</option>
              <option>Transporte</option>
              <option>Mantenimiento</option>
              <option>Tecnología</option>
              <option>Otro</option>
            </select>
          </div>

          <div class="col-md-4">
            <label for="estatus" class="form-label">
              Estatus
            </label>

            <select
              class="form-select"
              id="estatus"
              name="estatus"
            >
              <option value="activo">Activo</option>
              <option value="inactivo">Inactivo</option>
              <option value="evaluacion">En evaluación</option>
            </select>
          </div>

        </div>

        <!-- CONTACTO -->

        <div class="seccion-titulo mt-4">
          Información de contacto
        </div>

        <div class="row g-3">

          <div class="col-md-6">
            <label for="contacto" class="form-label">
              Nombre del contacto *
            </label>

            <input
              type="text"
              class="form-control"
              id="contacto"
              name="contacto"
              required
            >
          </div>

          <div class="col-md-6">
            <label for="puesto" class="form-label">
              Puesto
            </label>

            <input
              type="text"
              class="form-control"
              id="puesto"
              name="puesto"
            >
          </div>

          <div class="col-md-4">
            <label for="telefono" class="form-label">
              Teléfono *
            </label>

            <input
              type="tel"
              class="form-control"
              id="telefono"
              name="telefono"
              required
            >
          </div>

          <div class="col-md-4">
            <label for="whatsapp" class="form-label">
              WhatsApp
            </label>

            <input
              type="tel"
              class="form-control"
              id="whatsapp"
              name="whatsapp"
            >
          </div>

          <div class="col-md-4">
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
            <label for="sitioWeb" class="form-label">
              Página web
            </label>

            <input
              type="url"
              class="form-control"
              id="sitioWeb"
              name="sitioWeb"
              placeholder="https://"
            >
          </div>

        </div>

        <!-- DIRECCIÓN -->

        <div class="seccion-titulo mt-4">
          Dirección
        </div>

        <div class="row g-3">

          <div class="col-md-8">
            <label for="calle" class="form-label">
              Calle
            </label>

            <input
              type="text"
              class="form-control"
              id="calle"
              name="calle"
            >
          </div>

          <div class="col-md-2">
            <label for="numeroExterior" class="form-label">
              No. exterior
            </label>

            <input
              type="text"
              class="form-control"
              id="numeroExterior"
              name="numeroExterior"
            >
          </div>

          <div class="col-md-2">
            <label for="numeroInterior" class="form-label">
              No. interior
            </label>

            <input
              type="text"
              class="form-control"
              id="numeroInterior"
              name="numeroInterior"
            >
          </div>

          <div class="col-md-4">
            <label for="colonia" class="form-label">
              Colonia
            </label>

            <input
              type="text"
              class="form-control"
              id="colonia"
              name="colonia"
            >
          </div>

          <div class="col-md-3">
            <label for="municipio" class="form-label">
              Municipio / Alcaldía
            </label>

            <input
              type="text"
              class="form-control"
              id="municipio"
              name="municipio"
            >
          </div>

          <div class="col-md-3">
            <label for="estado" class="form-label">
              Estado
            </label>

            <input
              type="text"
              class="form-control"
              id="estado"
              name="estado"
            >
          </div>

          <div class="col-md-2">
            <label for="codigoPostal" class="form-label">
              C.P.
            </label>

            <input
              type="text"
              class="form-control"
              id="codigoPostal"
              name="codigoPostal"
              maxlength="5"
            >
          </div>

        </div>

        <!-- INFORMACIÓN COMERCIAL -->

        <div class="seccion-titulo mt-4">
          Información comercial
        </div>

        <div class="row g-3">

          <div class="col-md-6">
            <label for="productos" class="form-label">
              Productos o servicios que ofrece
            </label>

            <textarea
              class="form-control"
              id="productos"
              name="productos"
              rows="3"
            ></textarea>
          </div>

          <div class="col-md-3">
            <label for="credito" class="form-label">
              Días de crédito
            </label>

            <input
              type="number"
              class="form-control"
              id="credito"
              name="credito"
              min="0"
            >
          </div>

          <div class="col-md-3">
            <label for="moneda" class="form-label">
              Moneda
            </label>

            <select
              class="form-select"
              id="moneda"
              name="moneda"
            >
              <option value="MXN">MXN - Peso mexicano</option>
              <option value="USD">USD - Dólar</option>
              <option value="EUR">EUR - Euro</option>
            </select>
          </div>

          <div class="col-md-4">
            <label for="formaPago" class="form-label">
              Forma de pago
            </label>

            <select
              class="form-select"
              id="formaPago"
              name="formaPago"
            >
              <option value="">Seleccione...</option>
              <option>Transferencia</option>
              <option>Efectivo</option>
              <option>Cheque</option>
              <option>Tarjeta</option>
              <option>Crédito</option>
            </select>
          </div>

          <div class="col-md-4">
            <label for="tiempoEntrega" class="form-label">
              Tiempo de entrega
            </label>

            <input
              type="text"
              class="form-control"
              id="tiempoEntrega"
              name="tiempoEntrega"
              placeholder="Ej. 2 a 3 días"
            >
          </div>

          <div class="col-md-4">
            <label for="pedidoMinimo" class="form-label">
              Pedido mínimo
            </label>

            <input
              type="number"
              class="form-control"
              id="pedidoMinimo"
              name="pedidoMinimo"
              min="0"
              step="0.01"
            >
          </div>

        </div>

        <!-- DATOS BANCARIOS -->

        <div class="seccion-titulo mt-4">
          Datos bancarios
        </div>

        <div class="row g-3">

          <div class="col-md-4">
            <label for="banco" class="form-label">
              Banco
            </label>

            <input
              type="text"
              class="form-control"
              id="banco"
              name="banco"
            >
          </div>

          <div class="col-md-4">
            <label for="cuenta" class="form-label">
              Número de cuenta
            </label>

            <input
              type="text"
              class="form-control"
              id="cuenta"
              name="cuenta"
            >
          </div>

          <div class="col-md-4">
            <label for="clabe" class="form-label">
              CLABE
            </label>

            <input
              type="text"
              class="form-control"
              id="clabe"
              name="clabe"
              maxlength="18"
            >
          </div>

        </div>

        <!-- OBSERVACIONES -->

        <div class="seccion-titulo mt-4">
          Información adicional
        </div>

        <div class="row g-3">

          <div class="col-md-12">
            <label for="observaciones" class="form-label">
              Observaciones
            </label>

            <textarea
              class="form-control"
              id="observaciones"
              name="observaciones"
              rows="4"
            ></textarea>
          </div>

        </div>

        <!-- BOTONES -->

        <div class="d-flex justify-content-end gap-2 mt-4">

          <button
            type="reset"
            class="btn btn-outline-secondary"
          >
            Limpiar
          </button>

          <button
            type="submit"
            class="btn btn-primary"
          >
            Guardar proveedor
          </button>

        </div>

      </form>

    </div>
  </div>


</section>
