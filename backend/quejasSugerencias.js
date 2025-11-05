
// C O N S U M I B L E S
export async function guardarCorreoEnElServidor(correoUser, nombreUser, apellidoUser){
    if (!correoUser.includes('@')) {
        alert("Correo inválido.");
        return;
    }

    // Funcion que guarda el correo en la base de datos
    const guardarCorreo = guardarSuscripcionBase(correoUser);

    // mostrar el mensaje acorde a la respuesta del servidor
    if (guardarCorreo) {
        // ya se guardo en la base ahora hay que informal al usuario

        // Funcion que envia el correo al usuario
        const enviarCorreo = enviarCorreoUsuarioSuscripcion(correoUser, nombreUser, apellidoUser);

        // mostrar el mensaje acorde a la respuesta del servidor
        if (enviarCorreo){
            // Limpiar el formulario
            limpiarCasillaCorreo();

            // informar al usuario que su suscripcion fue exitosa
            alert(`Gracias por suscribirte: ${correoUser}`);
        } else {
            // Informar al usuario que hubo un error al momento de verificar su correo
            alert(`Tuvimos un problema al momento de verificar el correo: ${correoUser}`);
        }
    } else {
        // informar al usuario que no se pudo realizar el registro
        alert(`oops! No pudimos registrarte intentalo nuevamente`);
    }
}

export async function empaquetarElFormulario(form){
    // Declararacion de variables
    const nombre = document.getElementById("NombreFormQS").value;
    const apellido = document.getElementById("ApellidoFormQS").value;
    const email = document.getElementById('EmailFormQS').value;
    const telefono = document.getElementById("TelFormQS").value;
    const direccion = document.getElementById("DireccionFormQS").value;
    const empresa = document.getElementById("EmpresaFormQS").value;
    const mensaje = document.getElementById("MensajeFormQS").value;
    const tipo = document.getElementById("TipoFormQS").value;
    const archivo = document.getElementById('FileFormQS').files[0];
    const permiso = document.getElementById("gridCheck")

    // Validar que las variables esten correctas
    if(!nombre || !apellido || !email || !tipo || !mensaje){
        alert("Hay campos por llenar en el formulario");
        console.log(tipo);
        return;
    }
    if (!email.includes('@')) {
        alert("Correo inválido.");
        return;
    }
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

    // Funcion que guarda el comentario en la base de datos
    const guardarComentario = guardarComentariosBase(nombre, apellido, email, telefono, direccion, empresa, mensaje, tipo, archivo, permiso);

    // mostrar el mensaje acorde a la respuesta del servidor
    if (guardarComentario) {
        // Funcion que encia el correo a  soporte
        const enviarCorreoSoporte = enviarCorreoSoporteFormulario(nombre, apellido, email, telefono, direccion, empresa, mensaje, tipo, archivo, permiso);

        // mostrar el mensaje acorde a la respuesta del servidor
        if (enviarCorreoSoporte){
            // Funcion que envia el correo al usuario
            const enviarCorreoUsuario = enviarCorreoUsuarioFormulario(nombre, apellido, email, telefono, direccion, empresa, mensaje, tipo, archivo, permiso);

            if (enviarCorreoUsuario) {
                // informar al usuario que su suscripcion fue exitosa
                alert(`Gracias por tus comentarios ${nombre.toLowerCase().replace(/\b\w/g, char => char.toUpperCase())} ${apellido.toLowerCase().replace(/\b\w/g, char => char.toUpperCase())}`);

                if (permiso.checked){
                    console.log("Suscribiendo correo");
                    // Reutilizar la funcion que suscribe el correo en la base de datos
                    guardarCorreoEnElServidor(email, nombre, apellido);
                }

                // Limpiar el formulario
                limpiarFormulario(form);
            }
            else {
                // Informar al usuario que hubo un error al momento de verificar su comentario
                alert(`Tuvimos un problema al momento de confirmar que hemos recibido tu comentario`);
            }
        } else {
            // Informar al usuario que hubo un error al momento de enviar el comentario a soporte
            alert(`Tuvimos un problema al momento de enviar tus comentarios a soporte`);
        }
    } else {
        // informar al usuario que no se pudo realizar el registro de su comentario
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

async function enviarCorreoUsuarioFormulario(nombre, apellido, email, telefono, direccion, empresa, mensaje, tipo, archivo, permiso){
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
        return true;
    } else {
        // Informar al usuario que hubo un error al momento de verificar su correo
        console.error('Error:', resultData.message);
        return false;
    }
}

async function enviarCorreoSoporteFormulario(nombre, apellido, email, telefono, direccion, empresa, mensaje, tipo, archivo, permiso){
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
        // informar al usuario que su comentacios se enviaron exitosamente
        console.log('Respuesta:', resultData.message);
        // informar al usuario que su comentacios se enviaron exitosamente
        return true;
    } else {
        // Informar al usuario que hubo un error al momento de verificar su correo
        console.error('Error:', resultData.message);
        return false;
    }
}

async function enviarCorreoUsuarioSuscripcion(correo, nombre, apellido){
    // promesa para enviar los datos al servidor y esperar la confirmacion
    const responseData = await fetch(`../php/correos.php?action=correoSuscripcion`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            email: correo,
            nombre: nombre.toLowerCase().replace(/\b\w/g, char => char.toUpperCase()),
            apellido: apellido.toLowerCase().replace(/\b\w/g, char => char.toUpperCase())
        })
    })

    // Verificar si la respuesta fue exitosa
    const resultData = await responseData.json(); // Aseguramos que el PHP devuelve un JSON

    // mostrar el mensaje acorde a la respuesta del servidor
    if (resultData.success){
        // informar al usuario que su suscripcion fue exitosa
        console.log('Respuesta:', resultCorreo.message);
        return true;
    } else {
        // Informar al usuario que hubo un error al momento de verificar su correo
        console.error('Error:', resultCorreo.message);
        return false;
    }
}

// BASE DE DATOS
async function guardarComentariosBase(nombre, apellido, email, telefono, direccion, empresa, mensaje, tipo, archivo, permiso){
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
        // ya se guardo en la base ahora hay que informal al usuario
        console.log('Respuesta:', resultData.message);
        return true;
    } else {
        // informar al usuario que no se pudo realizar el registro
        console.error('Error:', resultData.message);
        return false;
    }
}

async function guardarSuscripcionBase(correoUser){
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
    if (resultData.success){
        // ya se guardo en la base ahora hay que informal al usuario
        console.log('Respuesta:', resultData.message);
        return true;
    } else {
        // informar al usuario que no se pudo realizar el registro
        console.error('Error:', resultData.message);
        return false;
    }
}
