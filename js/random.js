
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



/* desde aqui se empieza la animacion del ultimo carrusel */

const cardsContainer = document.querySelector(".card-carousel");
const cardsController = document.querySelector(".card-carousel + .card-controller");

class DraggingEvent {
  constructor(target = undefined) {
    this.target = target;
  }
  
  event(callback) {
    let handler;
    
    this.target.addEventListener("mousedown", e => {
      e.preventDefault()
      handler = callback(e)
      window.addEventListener("mousemove", handler)
      document.addEventListener("mouseleave", clearDraggingEvent)
      window.addEventListener("mouseup", clearDraggingEvent)
      
      function clearDraggingEvent() {
        window.removeEventListener("mousemove", handler)
        window.removeEventListener("mouseup", clearDraggingEvent)
        document.removeEventListener("mouseleave", clearDraggingEvent)
        handler(null)
      }
    })
    
    this.target.addEventListener("touchstart", e => {
      handler = callback(e)
      window.addEventListener("touchmove", handler)
      window.addEventListener("touchend", clearDraggingEvent)
      document.body.addEventListener("mouseleave", clearDraggingEvent)
      
      function clearDraggingEvent() {
        window.removeEventListener("touchmove", handler)
        window.removeEventListener("touchend", clearDraggingEvent)
        handler(null)
      }
    })
  }
  
  getDistance(callback) {
    function distanceInit(e1) {
      let startingX, startingY;
      if ("touches" in e1) {
        startingX = e1.touches[0].clientX
        startingY = e1.touches[0].clientY
      } else {
        startingX = e1.clientX
        startingY = e1.clientY
      }
      return function(e2) {
        if (e2 === null) {
          return callback(null)
        } else {
          if ("touches" in e2) {
            return callback({
              x: e2.touches[0].clientX - startingX,
              y: e2.touches[0].clientY - startingY
            })
          } else {
            return callback({
              x: e2.clientX - startingX,
              y: e2.clientY - startingY
            })
          }
        }
      }
    }
    this.event(distanceInit)
  }
}

class CardCarousel extends DraggingEvent {
  constructor(container, controller = undefined) {
    super(container)
    
    this.container = container
    this.controllerElement = controller
    this.cards = container.querySelectorAll(".card")
    
    this.centerIndex = (this.cards.length - 1) / 2;
    this.cardWidth = this.cards[0].offsetWidth / this.container.offsetWidth * 100
    this.xScale = {};
    
    window.addEventListener("resize", this.updateCardWidth.bind(this))
    
    if (this.controllerElement) {
      this.controllerElement.addEventListener("keydown", this.controller.bind(this))      
    }

    this.build()
    super.getDistance(this.moveCards.bind(this))
  }
  
  updateCardWidth() {
    this.cardWidth = this.cards[0].offsetWidth / this.container.offsetWidth * 100;

    // Mantener la posición actual de las tarjetas
    for (let i = 0; i < this.cards.length; i++) {
        // Usar ?? en lugar de || para que data-x=0 se respete
        const x = parseFloat(this.cards[i].dataset.x) ?? (i - this.centerIndex);
        const scale = this.calcScale(x);
        const scale2 = this.calcScale2(x);
        const leftPos = this.calcPos(x, scale2);
        const zIndex = -Math.abs(x);

        this.updateCards(this.cards[i], { scale, leftPos, zIndex });
    }
  }
  
  build(fix = 0) {
    for (let i = 0; i < this.cards.length; i++) {
      const x = i - this.centerIndex;
      const scale = this.calcScale(x)
      const scale2 = this.calcScale2(x)
      const zIndex = -(Math.abs(i - this.centerIndex))
      const leftPos = this.calcPos(x, scale2)
     
      this.xScale[x] = this.cards[i]
      
      this.updateCards(this.cards[i], {
        x: x,
        scale: scale,
        leftPos: leftPos,
        zIndex: zIndex
      })
    }
  }
  
  controller(e) {
    const temp = {...this.xScale};
      
    if (e.keyCode === 39) { // Right arrow
      for (let x in this.xScale) {
        const newX = (parseInt(x) - 1 < -this.centerIndex) ? this.centerIndex : parseInt(x) - 1;
        temp[newX] = this.xScale[x]
      }
    }
      
    if (e.keyCode == 37) { // Left arrow
      for (let x in this.xScale) {
        const newX = (parseInt(x) + 1 > this.centerIndex) ? -this.centerIndex : parseInt(x) + 1;
        temp[newX] = this.xScale[x]
      }
    }
      
    this.xScale = temp;
      
    for (let x in temp) {
      const scale = this.calcScale(x),
            scale2 = this.calcScale2(x),
            leftPos = this.calcPos(x, scale2),
            zIndex = -Math.abs(x)

      this.updateCards(this.xScale[x], {
        x: x,
        scale,
        leftPos,
        zIndex
      })
    }
  }
  
  calcPos(x, scale) {
    if (x < 0) return (scale * 100 - this.cardWidth) / 2
    return 100 - (scale * 100 + this.cardWidth) / 2
  }
  
  updateCards(card, data) {
    if (data.x || data.x === 0) card.setAttribute("data-x", data.x)
    
    if (data.scale || data.scale === 0) {
      card.style.transform = `scale(${data.scale})`
      card.style.opacity = data.scale === 0 ? 0 : 1
    }
   
    if (data.leftPos || data.leftPos === 0) card.style.left = `${data.leftPos}%`        
    if (data.zIndex || data.zIndex === 0) {
      card.classList.toggle("highlight", data.zIndex === 0)
      card.style.zIndex = data.zIndex  
    }
  }
  
  calcScale2(x) {
    return x <= 0 ? 1 - -1 / 5 * x : 1 - 1 / 5 * x
  }
  
  calcScale(x) {
    const formula = 1 - 1 / 5 * Math.pow(x, 2)
    return formula <= 0 ? 0 : formula      
  }
  
  checkOrdering(card, x, xDist) {    
    const original = parseInt(card.dataset.x)
    const rounded = Math.round(xDist)
    let newX = x
    
    if (x !== x + rounded) {
      if (x + rounded > original && x + rounded > this.centerIndex) {
        newX = ((x + rounded - 1) - this.centerIndex) - rounded + -this.centerIndex
      } else if (x + rounded < original && x + rounded < -this.centerIndex) {
        newX = ((x + rounded + 1) + this.centerIndex) - rounded + this.centerIndex
      }
      this.xScale[newX + rounded] = card;
    }
    
    const temp = -Math.abs(newX + rounded)
    this.updateCards(card, {zIndex: temp})
    return newX;
  }
  
  moveCards(data) {
    let xDist = 0;
    
    if (data != null) {
      this.container.classList.remove("smooth-return")
      xDist = data.x / 250;
    } else {
      this.container.classList.add("smooth-return")
      for (let x in this.xScale) {
        this.updateCards(this.xScale[x], {
          x: x,
          zIndex: Math.abs(Math.abs(x) - this.centerIndex)
        })
      }
    }

    for (let i = 0; i < this.cards.length; i++) {
      const x = this.checkOrdering(this.cards[i], parseFloat(this.cards[i].dataset.x), xDist),
            scale = this.calcScale(x + xDist),
            scale2 = this.calcScale2(x + xDist),
            leftPos = this.calcPos(x + xDist, scale2)
      
      this.updateCards(this.cards[i], {
        scale,
        leftPos
      })
    }
  }
}

const carousel = new CardCarousel(cardsContainer, cardsController);

