<section class="contacto-2 ">

<div class="container formulario-cliente">

  <div class="card">

    <div class="card-header">
      <h3 class="mb-1">Registro de Cliente Nuevo</h3>

      <p class="mb-0">
        Capture la información general, fiscal, comercial y de contacto del cliente.
      </p>
    </div>

    <div class="card-body p-4">

      <form id="formCliente">

        <!-- DATOS GENERALES -->

        <div class="titulo-seccion">
          Datos generales
        </div>

        <div class="row g-3">

          <div class="col-md-6">
            <label for="nombreCliente" class="form-label">
              Nombre o razón social *
            </label>

            <input
              type="text"
              class="form-control"
              id="nombreCliente"
              name="nombreCliente"
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
            <label for="tipoCliente" class="form-label">
              Tipo de cliente
            </label>

            <select
              class="form-select"
              id="tipoCliente"
              name="tipoCliente"
            >
              <option value="">Seleccione...</option>
              <option value="persona">Persona física</option>
              <option value="empresa">Empresa</option>
              <option value="mayoreo">Mayoreo</option>
              <option value="menudeo">Menudeo</option>
              <option value="distribuidor">Distribuidor</option>
            </select>
          </div>

          <div class="col-md-4">
            <label for="rfc" class="form-label">
              RFC
            </label>

            <input
              type="text"
              class="form-control"
              id="rfc"
              name="rfc"
              maxlength="13"
            >
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
              <option value="prospecto">Prospecto</option>
              <option value="inactivo">Inactivo</option>
            </select>
          </div>

        </div>

        <!-- CONTACTO -->

        <div class="titulo-seccion mt-4">
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

        </div>

        <!-- DIRECCIÓN -->

        <div class="titulo-seccion mt-4">
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
              Código postal
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

        <div class="titulo-seccion mt-4">
          Información comercial
        </div>

        <div class="row g-3">

          <div class="col-md-4">
            <label for="listaPrecio" class="form-label">
              Lista de precios
            </label>

            <select
              class="form-select"
              id="listaPrecio"
              name="listaPrecio"
            >
              <option value="">Seleccione...</option>
              <option value="menudeo">Menudeo</option>
              <option value="mayoreo">Mayoreo</option>
              <option value="distribuidor">Distribuidor</option>
              <option value="especial">Precio especial</option>
            </select>
          </div>

          <div class="col-md-4">
            <label for="limiteCredito" class="form-label">
              Límite de crédito
            </label>

            <input
              type="number"
              class="form-control"
              id="limiteCredito"
              name="limiteCredito"
              min="0"
              step="0.01"
            >
          </div>

          <div class="col-md-4">
            <label for="diasCredito" class="form-label">
              Días de crédito
            </label>

            <input
              type="number"
              class="form-control"
              id="diasCredito"
              name="diasCredito"
              min="0"
            >
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
              <option value="efectivo">Efectivo</option>
              <option value="transferencia">Transferencia</option>
              <option value="tarjeta">Tarjeta</option>
              <option value="cheque">Cheque</option>
              <option value="credito">Crédito</option>
            </select>
          </div>

          <div class="col-md-4">
            <label for="vendedor" class="form-label">
              Vendedor asignado
            </label>

            <input
              type="text"
              class="form-control"
              id="vendedor"
              name="vendedor"
            >
          </div>

          <div class="col-md-4">
            <label for="zona" class="form-label">
              Zona de venta
            </label>

            <input
              type="text"
              class="form-control"
              id="zona"
              name="zona"
            >
          </div>

        </div>

        <!-- FACTURACIÓN -->

        <div class="titulo-seccion mt-4">
          Datos de facturación
        </div>

        <div class="row g-3">

          <div class="col-md-4">
            <label for="regimenFiscal" class="form-label">
              Régimen fiscal
            </label>

            <input
              type="text"
              class="form-control"
              id="regimenFiscal"
              name="regimenFiscal"
            >
          </div>

          <div class="col-md-4">
            <label for="usoCFDI" class="form-label">
              Uso de CFDI
            </label>

            <input
              type="text"
              class="form-control"
              id="usoCFDI"
              name="usoCFDI"
              placeholder="Ej. G03"
            >
          </div>

          <div class="col-md-4">
            <label for="correoFacturacion" class="form-label">
              Correo de facturación
            </label>

            <input
              type="email"
              class="form-control"
              id="correoFacturacion"
              name="correoFacturacion"
            >
          </div>

        </div>

        <!-- OBSERVACIONES -->

        <div class="titulo-seccion mt-4">
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
              placeholder="Comentarios, referencias, preferencias del cliente, etc."
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
            Guardar cliente
          </button>

        </div>

      </form>

    </div>
  </div>

</div>
</section>