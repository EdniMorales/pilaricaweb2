/*!
* Start Bootstrap - Modern Business v5.0.7 (https://startbootstrap.com/template-overviews/modern-business)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-modern-business/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

/* Ejecucion de animaciones en la pagina web*/

/*!
* Start Bootstrap - Stylish Portfolio v6.0.6 (https://startbootstrap.com/theme/stylish-portfolio)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-stylish-portfolio/blob/master/LICENSE)
*/

import * as trriggers from '../backend/trigger.js';
import * as random from "../js/random.js";

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

window.addEventListener('DOMContentLoaded', (event) => {
    console.log('trigger');
    // Funcion que carga las categorias
    TraerCategorias();
    TaerDatosDependiendoLaRutaDelDOM();

    const sidebarWrapper = document.getElementById('sidebar-wrapper');
    const menuToggle = document.body.querySelector('.menu-toggle');
    let scrollToTopVisible = false;

    // Verificamos si existen los elementos requeridos antes de trabajar con ellos
    if (!sidebarWrapper || !menuToggle) return;

    // Closes the sidebar menu
    menuToggle.addEventListener('click', event => {
        event.preventDefault();
        sidebarWrapper.classList.toggle('active');
        _toggleMenuIcon();
        menuToggle.classList.toggle('active');
    });

    // Closes responsive menu when a scroll trigger link is clicked
    const scrollTriggerList = [].slice.call(document.querySelectorAll('#sidebar-wrapper .js-scroll-trigger'));
    scrollTriggerList.forEach(scrollTrigger => {
        scrollTrigger.addEventListener('click', () => {
            sidebarWrapper.classList.remove('active');
            menuToggle.classList.remove('active');
            _toggleMenuIcon();
        });
    });

    // Toggle menu icon (hamburger ↔ X)
    function _toggleMenuIcon() {
        const menuToggleBars = document.body.querySelector('.menu-toggle > .fa-bars');
        const menuToggleTimes = document.body.querySelector('.menu-toggle > .fa-xmark');

        if (menuToggleBars) {
            menuToggleBars.classList.remove('fa-bars');
            menuToggleBars.classList.add('fa-xmark');
        } else if (menuToggleTimes) {
            menuToggleTimes.classList.remove('fa-xmark');
            menuToggleTimes.classList.add('fa-bars');
        }
    }

    // Scroll to top button appear
    document.addEventListener('scroll', () => {
        const scrollToTop = document.body.querySelector('.scroll-to-top');
        if (!scrollToTop) return;

        if (document.documentElement.scrollTop > 100) {
            if (!scrollToTopVisible) {
                fadeIn(scrollToTop);
                scrollToTopVisible = true;
            }
        } else {
            if (scrollToTopVisible) {
                fadeOut(scrollToTop);
                scrollToTopVisible = false;
            }
        }
    });

    // Simple fadeIn implementation
    function fadeIn(element) {
        element.style.display = 'block';
        element.style.opacity = 0;
        let op = 0;
        const timer = setInterval(() => {
            if (op >= 1) {
                clearInterval(timer);
            }
            element.style.opacity = op;
            op += 0.1;
        }, 30);
    }

    // Simple fadeOut implementation
    function fadeOut(element) {
        let op = 1;
        const timer = setInterval(() => {
            if (op <= 0) {
                clearInterval(timer);
                element.style.display = 'none';
            }
            element.style.opacity = op;
            op -= 0.1;
        }, 30);
    }

});


function fadeOut(el) {
    el.style.opacity = 1;
    (function fade() {
        if ((el.style.opacity -= .1) < 0) {
            el.style.display = "none";
        } else {
            requestAnimationFrame(fade);
        }
    })();
};

function fadeIn(el, display) {
    el.style.opacity = 0;
    el.style.display = display || "block";
    (function fade() {
        var val = parseFloat(el.style.opacity);
        if (!((val += .1) > 1)) {
            el.style.opacity = val;
            requestAnimationFrame(fade);
        }
    })();
};

// FUNCION QUE CRAGA LAS IMAGENES DE FORMA SEGURA
function loadSecureImage(canvasElement, endpointURL, responsive = false) {
    const canvas = typeof canvasElement === 'string' ? document.querySelector(canvasElement) : canvasElement;
    if (!canvas) return console.error("Canvas no encontrado");

    const ctx = canvas.getContext("2d");

    function ajustarCanvas() {
        const rect = canvas.getBoundingClientRect();
        canvas.width = rect.width;
        canvas.height = rect.height;
    }

    canvas.oncontextmenu = e => e.preventDefault();

    function render() {
        ajustarCanvas();
        fetch(endpointURL, { cache: "no-store" })
            .then(r => r.blob())
            .then(blob => {
                const url = URL.createObjectURL(blob);
                const img = new Image();

                img.onload = () => {
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                    URL.revokeObjectURL(url);
                };

                img.src = url;
            })
            .catch(err => console.error("Error al cargar imagen:", err));
    }

    render();

    if (responsive) {
        const observer = new ResizeObserver(() => render());
        observer.observe(canvas);
    }
}

function loadAllSecureImages(selectorOrElements = "canvas[data-src]") {
    // Determinar si recibimos un selector (string) o un NodeList/Array/Element
    let canvases;

    if (typeof selectorOrElements === "string") {
        canvases = document.querySelectorAll(selectorOrElements);
    } else if (selectorOrElements instanceof Element) {
        canvases = [selectorOrElements];
    } else if (selectorOrElements instanceof NodeList || Array.isArray(selectorOrElements)) {
        canvases = selectorOrElements;
    } else {
        console.error("Parámetro inválido para loadAllSecureImages:", selectorOrElements);
        return;
    }

    canvases.forEach(canvas => {
        const url = canvas.getAttribute("data-src");
        if (!url) return;

        // Llamar a loadSecureImage pasando elemento directamente o selector
        if (canvas.id) {
            loadSecureImage(`#${canvas.id}`, url, true);
        } else {
            loadSecureImage(canvas, url, true);
        }
    });
}

// FUNCION PARA TRAER LAS CATEGORIAS AL MENU DESPLEGABLE
function TraerCategorias(){
    console.log("Categorias creadas");
    trriggers.CategoriasSearch("index","Categorias");
}

function TraerContenidoCarrucel(){
    // llamar a la funcion que crea los elementos del carrucel
    trriggers.CategoriasSearchImg('contenedorCarrucelProductos');
    random.CarrucerCreacion();
}

// Funcion cargar Imagenes de la vista Principal

function CarrgarImagenes(){
    loadAllSecureImages();
    loadSecureImage("#logoPilaricaAniversario", "https://pilarica.mx/php/backend.php?action=traerImagen&img=Img_Pagina/logos/Logo-aniversario.png", true );
    loadSecureImage("#PrincipalQuesoPanelaKg", "https://pilarica.mx/php/backend.php?action=traerImagen&img=Img_Productos/Q521.png", true );
    loadSecureImage("#PrincipalQuesoOaxacaKg", "https://pilarica.mx/php/backend.php?action=traerImagen&img=Img_Productos/Q501.png", true );
    loadSecureImage("#PrincipalCremaLt", "https://pilarica.mx/php/backend.php?action=traerImagen&img=Img_Productos/Q541.png", true );
}

// FUNCION PARA COLOCAR LOS DATOS SEGUN LA RUTA EN LA QUE SE ENCUENTRE EL USUARIO
function TaerDatosDependiendoLaRutaDelDOM(){
    const ruta = window.location.pathname; // Ruta Completa
    const partesRuta = ruta.split('/'); // Separar por /
    const ultimaCarpeta = partesRuta.length >= 2 ? partesRuta[partesRuta.length - 2] : null; // Traer la penultima seccion en este caso la ruta de la carpeta
    //console.log("Estás en:", ultimaCarpeta);

    // Variables con las que se pasara la informacion a el modelo
    let carpeta = null;

    // Dependiendo de la ruta es lo que se va a mostar
    switch(ultimaCarpeta){
        case "quesosfrescos":
            carpeta = ["quesosblancos","Contenedor-Productos-Quesos-Blancos", "2"];
            trriggers.ProductosPorCategoriaSearch(carpeta);
            break
        case "quesosmaduros":
            carpeta = ["quesosamarillos","Contenedor-Productos-Quesos-Amarillos","3"];
            trriggers.ProductosPorCategoriaSearch(carpeta);
            break
        case "lineagourmet":
            carpeta = ["quesoslineagourmet","Contenedor-Productos-Quesos-Linea-Gourmet","4"];
            trriggers.ProductosPorCategoriaSearch(carpeta);
            break
        case "crema":
            carpeta = ["crema","Contenedor-Productos-Crema","5"];
            trriggers.ProductosPorCategoriaSearch(carpeta);
            break
        case "postres":
            carpeta = ["postres","Contenedor-Productos-Postres","6"];
            trriggers.ProductosPorCategoriaSearch(carpeta);
            break
        case "ricottin":
            carpeta = ["ricottin","Contenedor-Productos-Ricottines","7"];
            trriggers.ProductosPorCategoriaSearch(carpeta);
            break
        case "congelados":
            carpeta = ["congelados","Contenedor-Productos-Congelados","8"];
            trriggers.ProductosPorCategoriaSearch(carpeta);
            break
        case "complementos":
            carpeta = ["complementos","Contenedor-Productos-Complementos","9"];
            trriggers.ProductosPorCategoriaSearch(carpeta);
            break
        case "canastas":
            carpeta = ["canastas","Contenedor-Productos-Canastas","10"];
            trriggers.ProductosPorCategoriaSearch(carpeta);
            break
        case "yogurth":
            carpeta = ["yogurth", "Contenedor-Productos-Yogurth", "11"];
            trriggers.ProductosPorCategoriaSearch(carpeta);
            break
        case "carnicos":
            carpeta = ["carnicos", "Contenedor-Productos-Carnicos", "12"];
            trriggers.ProductosPorCategoriaSearch(carpeta);
            break
        case "venancio":
            carpeta = ["venancio", "Contenedor-Productos-Venancio", "13"];
            trriggers.ProductosPorCategoriaSearch(carpeta);
            break
        case "mantequilla":
            carpeta = ["mantequilla", "Contenedor-Productos-Mantequilla", "14"];
            trriggers.ProductosPorCategoriaSearch(carpeta);
            break
        case 'Principal':
            CarrgarImagenes();
            //random.ColocarContenidoRandom();
            TraerContenidoCarrucel(); // llamar al carrucel si esta en principal
            // Formulario de quejas y sugerencias
            document.getElementById("BotonEnviarQS").addEventListener("click", function() {
                const Formulario = "FormularioQS";
                trriggers.EnviarDatosDelFormulario(Formulario); // Ejecutar la funcion que envia los datos al servidor
            });
            break
        default:
            const params = new URLSearchParams(window.location.search);
            trriggers.MostrarDatosPorProductoIndividual(params.get('Id'))
            break
    }
}

// FUNCION PARA PONER LA PAGINA EN ESTADO DE ERROR
export function estadoDeError() {
    window.location.href = '../php/backend.php?action=pageError';
}