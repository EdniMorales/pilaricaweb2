
// W I D G E T S
const contenedor = document.getElementById("ProductosRandomPrincipal");
const boton = document.getElementById("ButtomRandom1");

// E V E N T S
document.addEventListener("DOMContentLoaded", function(){
    ColocarContenidoRandom();
})

boton.addEventListener("click", function(){
    // Llamar a la funcion que coloca el contenido en el DOM
    ColocarContenidoRandom();
});


// F U N C T I O N S
function NumeroRandom(min, max){
    // Devuelve un número entero aleatorio entre min y max
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function BuscarCategoriaID(numCategories){
    // crear promesas para solicitar informacion al servidor
    return new Promise((resolve, reject) => {
        // Solicitud ajax
        fetch(`../php/backend.php?action=searchIdCategories&search_categories=${encodeURIComponent(numCategories)}`, )
            .then(response => {
                // validar si el estado de la solicitud es Ok
                if (!response.ok) throw new Error(`Error HTTP: ${response.status}`);
                return response.json(); // regresar detalles del error
            })
            .then(data => {
                // resolver con los datos enviados por el servidor
                resolve(data);
            })
            .catch(error =>{
                // lansar el error que envio el servidor
                reject(error);
            });
    });
}

async function ColocarContenidoRandom(){
    // Parametros de randomizacion
    const cantidadDeCategorias = 3;
    let listaNumeros = []; // Almacenamiento de los numeros
    let auxiliarBotones = 1; // auxiliar para identificar los botones
    let promesas = [] // alamcenamiento de las promesas
    let promesa = null // promesa activa

    // escoger un numero las veces que se nececiten
    for (let i = 0; i < cantidadDeCategorias; i++){
        let valor; // almacena el numero random
        
        do {
            valor = NumeroRandom(2, 11);
        } while (listaNumeros.includes(valor)); // Repite mientras el número ya esté en la lista

        listaNumeros.push(valor); // Guardar el numero
    }

    // searchIdCategories
    for (const numero of listaNumeros){
        //console.log(numero);
        promesa = BuscarCategoriaID(numero);

        promesas.push(promesa);
    }

    // mandar todas las promesas
    const datosCategoerias = await Promise.all(promesas);

    // Limpiar el contenedor
    contenedor.innerHTML = '';

    // Colocar lo del principio
    contenedor.insertAdjacentHTML('beforeend',`
        <div class="col-lg-12">
            <h2 class="tit-prod-fav-2">Nuestros productos</h2>
            <p class="tit-prod-fav-2-1">Conoce la variedad de productos que tenemos para ti</p>
        </div>
    `);

    // Llenar el contenedor con las categorias
    for (const categorias of datosCategoerias) {
        // separar el arreglo
        const categoria = categorias[0];

        // formatear el nombre
        let nombreLimpio = categoria.NOMBRE.replace(/\s+/g, '').toLowerCase() || "principal";
        let nombreCapitalizado = categoria.NOMBRE.toLowerCase().replace(/\b\w/g, char => char.toUpperCase());
        //console.log(nombreLimpio, nombreCapitalizado);

        // Imagen temporal
        let tempIMG = '../assets/new-cheese/oaxaca/queso-oaxaca-1kg.png';

        const aleatoreo = `
            <div class="col-lg-4">
                <div class="mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="${tempIMG}" alt="..." />
                    <p class="subtit-prod-fav-2">${nombreCapitalizado}</p>
                </div>
                <div class="subtit-prod-fav-2-1">
                    <button type="button" class="btn btn-warning btn-lg" onclick="window.location.href='../${nombreLimpio}/index'" id="ButtomRandom${auxiliarBotones}">VER MAS</button>
                </div>
            </div>`;

        contenedor.insertAdjacentHTML('beforeend', aleatoreo);
        auxiliarBotones++;
    }
}