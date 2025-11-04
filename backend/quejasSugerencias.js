
// C O N S U M I B L E S
export async function guardarCorreoEnElServidor(correoUser, nombreUser, apellidoUser){
    if (!correoUser.includes('@')) {
        alert("Correo inválido.");
        return;
    }

    // promesa para enviar los datos al servidor y esperar la coonfirmacion
    const responseData = await fetch(`../php/suscripciones.php?action=guardarSuscripcion`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            correo: correoUser,
        })
    })

    // Verificar si la respuesta fue exitosa
    const resultData = await responseData.json(); // Aseguramos que el PHP devuelve un JSON

    // mostrar el mensaje acorde a la respuesta del servidor
    if (resultData.success) {
        console.log('Respuesta:', resultData.message);
        // ya se guardo en la base ahora hay que informal al usuario

        // promesa para enviar los datos al servidor y esperar la coonfirmacion
        const responseCorreo = await fetch(`../php/correos.php?action=correoSuscripcion`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                email: correoUser,
                nombre: nombreUser.toLowerCase().replace(/\b\w/g, char => char.toUpperCase()),
                apellido: apellidoUser.toLowerCase().replace(/\b\w/g, char => char.toUpperCase())
            })
        })

        // Verificar si la respuesta fue exitosa
        const resultCorreo = await responseCorreo.json(); // Aseguramos que el PHP devuelve un JSON

        // mostrar el mensaje acorde a la respuesta del servidor
        if (resultCorreo.success){
            console.log('Respuesta:', resultCorreo.message);
            limpiarCasillaCorreo();

            // informar al usuario que su suscripcion fue exitosa
            alert(`Gracias por suscribirte: ${correoUser}`);
        } else {
            console.error('Error:', resultCorreo.message);
            // Informar al usuario que hubo un error al momento de verificar su correo
            alert(`Tuvimos un problema al momento de verificar el correo: ${correoUser}`);
        }
    } else {
        // informar al usuario que no se pudo realizar el registro
        console.error('Error:', resultData.message);
        alert(`oops! No pudimos registrarte intentalo nuevamente`);
    }
}

export async function empaquetarElFormulario(form){
    const formulario = document.getElementById(form);
    const formData = new FormData(formulario);

    // Validación personalizada
    const nombre = document.getElementById("NombreFormQS").value;
    const apellido = document.getElementById("ApellidoFormQS").value;
    const email = document.getElementById('EmailFormQS').value;
    const telefono = document.getElementById("TelFormQS").value;
    const direccion = document.getElementById("DireccionFormQS").value;
    const empresa = document.getElementById("EmpresaFormQS").value;
    const mensaje = document.getElementById("MensajeFormQS").value;
    const tipo = document.getElementById("TipoFormQS").value;
    const Archivo_ = document.getElementById('FileFormQS').files[0];
    const permiso = document.getElementById("gridCheck")

    if(!nombre || !apellido || !email || !tipo || !mensaje){
        alert("Hay campos por llenar en el formulario");
        console.log(tipo);
        return;
    }
    if (!email.includes('@')) {
        alert("Correo inválido.");
        return;
    }

    const archivo = document.getElementById('FileFormQS').files[0];
    if (archivo) {
        const tiposPermitidos = ['image/jpeg', 'image/png', 'application/pdf'];
        if (!tiposPermitidos.includes(archivo.type)) {
        alert("Archivo no permitido. Solo JPG, PNG o PDF.");
        return;
        }

        const tamMax = 2 * 1024 * 1024; // 2MB
        if (archivo.size > tamMax) {
        alert("El archivo es demasiado grande. Máximo 2MB.");
        return;
        }
    }

    // promesa para enviar los datos al servidor y esperar la coonfirmacion
    const responseData = await fetch(`../php/quejasSugerencias.php?action=saveComentario`, {
        method: 'POST',
        body: formData
    })

    // Verificar si la respuesta fue exitosa
    const resultData = await responseData.json(); // Aseguramos que el PHP devuelve un JSON

    // mostrar el mensaje acorde a la respuesta del servidor
    if (resultData.success) {
        console.log('Respuesta:', resultData.message);
        // ya se guardo en la base ahora hay que informal al usuario

        // Crear un nuevo formulario para el segundo fech
        const datosCorreo = new URLSearchParams({
            NombreFormQS: nombre,
            ApellidoFormQS: apellido,
            EmailFormQS: email,
            TelFormQS: telefono,
            DireccionFormQS: direccion,
            EmpresaFormQS: empresa,
            TipoFormQS: tipo,
            MensajeFormQS: mensaje
        });

        // promesa para enviar los datos al servidor y esperar la coonfirmacion
        const responseCorreo = await fetch(`../php/correos.php?action=correoSoporte`, {
            method: 'POST',
            body: datosCorreo
        })

        // Verificar si la respuesta fue exitosa
        const resultCorreo = await responseCorreo.json(); // Aseguramos que el PHP devuelve un JSON

        // mostrar el mensaje acorde a la respuesta del servidor
        if (resultCorreo.success){
            console.log('Respuesta:', resultCorreo.message);
            // informar al usuario que su suscripcion fue exitosa
            alert(`Gracias por tus comentarios ${nombre.toLowerCase().replace(/\b\w/g, char => char.toUpperCase())} ${apellido.toLowerCase().replace(/\b\w/g, char => char.toUpperCase())}`);

            if (permiso.checked){
                console.log("Suscribiendo correo");
                guardarCorreoEnElServidor(email, nombre, apellido);
            }

            limpiarFormulario(form);
        } else {
            console.error('Error:', resultCorreo.message);
            // Informar al usuario que hubo un error al momento de verificar su correo
            alert(`Tuvimos un problema al momento de enviar tus comentarios`);
        }
    } else {
        // informar al usuario que no se pudo realizar el registro
        console.error('Error:', resultData.message);
        alert(`oops! No pudimos registrar tus comentarios intentalo nuevamente`);
    }
}

// L I M P I E Z A
function limpiarFormulario(form){
    const formulario = document.getElementById(form);
    formulario.reset();
}

function limpiarCasillaCorreo(){
    const casillaCorreo = document.getElementById("CasillaFooterSuscripcionCorreo");
    casillaCorreo.value = '';
}

// F U N C I O N E S

// CORREOS

async function enviarCorreoUsuarioFormulario(){
    // Declarar cada uno de los datos del formulario
    const nombre = document.getElementById("NombreFormQS").value;
    const apellido = document.getElementById("ApellidoFormQS").value;
    const email = document.getElementById('EmailFormQS').value;
    const telefono = document.getElementById("TelFormQS").value;
    const direccion = document.getElementById("DireccionFormQS").value;
    const empresa = document.getElementById("EmpresaFormQS").value;
    const mensaje = document.getElementById("MensajeFormQS").value;
    const tipo = document.getElementById("TipoFormQS").value;
    const archivo = document.getElementById('FileFormQS').files[0];
    const permiso = document.getElementById("gridCheck");

    // promesa para enviar los datos al servidor y esperar la confirmacion
    const responseData = await fetch(`../php/correos.php?action=correoUsuario`, {
        method: 'POST',
        body: new URLSearchParams({
            NombreFormQS: nombre,
            ApellidoFormQS: apellido,
            EmailFormQS: email,
            TelFormQS: telefono,
            DireccionFormQS: direccion,
            EmpresaFormQS: empresa,
            TipoFormQS: tipo,
            MensajeFormQS: mensaje,
            FileFormQS: archivo,
            gridCheck: permiso
        })
    })

    // Verificar si la respuesta fue exitosa
    const resultData = await responseData.json(); // Aseguramos que el PHP devuelve un JSON

    // mostrar el mensaje acorde a la respuesta del servidor
    if (resultData.success){
        // informar al usuario que su comentacios se enviaron exitosamente
        console.log('Respuesta:', resultData.message);
    } else {
        // Informar al usuario que hubo un error al momento de verificar su correo
        console.error('Error:', resultData.message);
    }
    // Retornar la respuesta del servidor
    return responseData;
}

async function enviarCorreoSoporteFormulario(){
    // Declarar cada uno de los datos del formulario
    const nombre = document.getElementById("NombreFormQS").value;
    const apellido = document.getElementById("ApellidoFormQS").value;
    const email = document.getElementById('EmailFormQS').value;
    const telefono = document.getElementById("TelFormQS").value;
    const direccion = document.getElementById("DireccionFormQS").value;
    const empresa = document.getElementById("EmpresaFormQS").value;
    const mensaje = document.getElementById("MensajeFormQS").value;
    const tipo = document.getElementById("TipoFormQS").value;
    const archivo = document.getElementById('FileFormQS').files[0];
    const permiso = document.getElementById("gridCheck");

    // promesa para enviar los datos al servidor y esperar la confirmacion
    const responseData = await fetch(`../php/correos.php?action=correoSoporte`, {
        method: 'POST',
        body: new URLSearchParams({
            NombreFormQS: nombre,
            ApellidoFormQS: apellido,
            EmailFormQS: email,
            TelFormQS: telefono,
            DireccionFormQS: direccion,
            EmpresaFormQS: empresa,
            TipoFormQS: tipo,
            MensajeFormQS: mensaje,
            FileFormQS: archivo,
            gridCheck: permiso
        })
    })

    // Verificar si la respuesta fue exitosa
    const resultData = await responseData.json(); // Aseguramos que el PHP devuelve un JSON

    // mostrar el mensaje acorde a la respuesta del servidor
    if (resultData.success){
        console.log('Respuesta:', resultData.message);
        // informar al usuario que su comentacios se enviaron exitosamente
        alert(`Gracias por tus comentarios ${nombre.toLowerCase().replace(/\b\w/g, char => char.toUpperCase())} ${apellido.toLowerCase().replace(/\b\w/g, char => char.toUpperCase())}`);
    } else {
        console.error('Error:', resultData.message);
        // Informar al usuario que hubo un error al momento de verificar su correo
        alert(`Tuvimos un problema al momento de enviar tus comentarios`);
    }
    // Retornar la respuesta del servidor
    return responseData;
}

async function enviarCorreoUsuarioSuscripcion(){
     // Declarar cada uno de los datos del formulario
    const nombre = document.getElementById("NombreFormQS").value;
    const apellido = document.getElementById("ApellidoFormQS").value;
    const email = document.getElementById('EmailFormQS').value;

    // promesa para enviar los datos al servidor y esperar la confirmacion
    const responseData = await fetch(`../php/correos.php?action=correoSuscripcion`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            email: email,
            nombre: nombre.toLowerCase().replace(/\b\w/g, char => char.toUpperCase()),
            apellido: apellido.toLowerCase().replace(/\b\w/g, char => char.toUpperCase())
        })
    })

    // Verificar si la respuesta fue exitosa
    const resultData = await responseData.json(); // Aseguramos que el PHP devuelve un JSON

    // mostrar el mensaje acorde a la respuesta del servidor
    if (resultCorreo.success){
        console.log('Respuesta:', resultCorreo.message);

        // informar al usuario que su suscripcion fue exitosa
        alert(`Gracias por suscribirte: ${correoUser}`);
    } else {
        console.error('Error:', resultCorreo.message);
        // Informar al usuario que hubo un error al momento de verificar su correo
        alert(`Tuvimos un problema al momento de verificar el correo: ${correoUser}`);
    }
}

// BASE DE DATOS
async function guardarComentariosBase(){
    // Declarar cada uno de los datos del formulario
    const nombre = document.getElementById("NombreFormQS").value;
    const apellido = document.getElementById("ApellidoFormQS").value;
    const email = document.getElementById('EmailFormQS').value;
    const telefono = document.getElementById("TelFormQS").value;
    const direccion = document.getElementById("DireccionFormQS").value;
    const empresa = document.getElementById("EmpresaFormQS").value;
    const mensaje = document.getElementById("MensajeFormQS").value;
    const tipo = document.getElementById("TipoFormQS").value;
    const archivo = document.getElementById('FileFormQS').files[0];
    const permiso = document.getElementById("gridCheck");

    // promesa para enviar los datos al servidor y esperar la confirmacion
    const responseData = await fetch(`../php/quejasSugerencias.php?action=saveComentario`, {
        method: 'POST',
        body: new URLSearchParams({
            NombreFormQS: nombre,
            ApellidoFormQS: apellido,
            EmailFormQS: email,
            TelFormQS: telefono,
            DireccionFormQS: direccion,
            EmpresaFormQS: empresa,
            TipoFormQS: tipo,
            MensajeFormQS: mensaje,
            FileFormQS: archivo,
            gridCheck: permiso
        })
    })

    // Verificar si la respuesta fue exitosa
    const resultData = await responseData.json(); // Aseguramos que el PHP devuelve un JSON

    // mostrar el mensaje acorde a la respuesta del servidor
    if (resultData.success) {
        console.log('Respuesta:', resultData.message);
        // ya se guardo en la base ahora hay que informal al usuario
    } else {
        // informar al usuario que no se pudo realizar el registro
        console.error('Error:', resultData.message);
        alert(`oops! No pudimos registrar tus comentarios intentalo nuevamente`);
    }
    // Retornar la respuesta del servidor
    return resultData;
}

async function guardarSuscripcionBase(){
    // promesa para enviar los datos al servidor y esperar la confirmacion
    const responseData = await fetch(`../php/suscripciones.php?action=guardarSuscripcion`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            correo: correoUser,
        })
    })

    // Verificar si la respuesta fue exitosa
    const resultData = await responseData.json(); // Aseguramos que el PHP devuelve un JSON

    // mostrar el mensaje acorde a la respuesta del servidor
    if (resultCorreo.success){
        console.log('Respuesta:', resultData.message);
        // ya se guardo en la base ahora hay que informal al usuario
    } else {
        // informar al usuario que no se pudo realizar el registro
        console.error('Error:', resultData.message);
        alert(`oops! No pudimos registrarte intentalo nuevamente`);
    }
}
