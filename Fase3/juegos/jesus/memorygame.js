    //Array con las distintas imágenes
    //AÑADIMOS LA RUTA Y EL NOMBRE
    const cartas = [
      {
        name: 'fries',
        img: 'imagesGame/fries.png'
      },
      {
        name: 'cheeseburger',
        img: 'imagesGame/cheeseburger.png'
      },
      {
        name: 'ice-cream',
        img: 'imagesGame/ice-cream.png'
      },
      {
        name: 'pizza',
        img: 'imagesGame/pizza.png'
      },
      {
        name: 'milkshake',
        img: 'imagesGame/milkshake.png'
      },
      {
        name: 'hotdog',
        img: 'imagesGame/hotdog.png'
      },
      {
        name: 'fries',
        img: 'imagesGame/fries.png'
      },
      {
        name: 'cheeseburger',
        img: 'imagesGame/cheeseburger.png'
      },
      {
        name: 'ice-cream',
        img: 'imagesGame/ice-cream.png'
      },
      {
        name: 'pizza',
        img: 'imagesGame/pizza.png'
      },
      {
        name: 'milkshake',
        img: 'imagesGame/milkshake.png'
      },
      {
        name: 'hotdog',
        img: 'imagesGame/hotdog.png'
      }
    ]
    //REALIZAMOS UNA DESORDENACIÓN ALEATORIA DE NUESTRO ARRAY
    cartas.sort(() => 0.5 - Math.random())
    
    const grid = document.querySelector('.grid');
    const resultDisplay = document.querySelector('#result');
    //ARRAYS EN LOS QUE GUARDAR LAS CARTAS SELECCIONADAS, LOS ID's DE ESTAS Y LAS QUE HAYAN SIDO ACERTADAS
    let cartaElegida = [];
    let idCartaElegida = [];
    let cartaAcertada = [];
  
    //PINTAMOS NUESTRA ZONA DE JUEGO
    //POR CADA POSICIÓN DEL ARRAY CREAMOS UN ELEMENTO IMAGEN QUE AÑADIMOS A NUESTRO DIV(GRID)
    //A CADA IMAGEN LE ASOCIAMOS UN ID, UNA CLASE, UN LISTENER(CLICK) Y LE PONEMOS PRIMERO LA MISMA IMAGEN PARA TODOS
    function createBoard() {
      for (var i = 0; i < cartas.length; i++) {
        const card = document.createElement('img');
        card.setAttribute('src', 'imagesGame/reverso.jpg');
        card.setAttribute('data-id', i);
        card.setAttribute('class',"imgJuego");
        card.setAttribute('width',"100px");
        card.setAttribute('height',"100px");
        card.addEventListener('click', flipCard);
        grid.appendChild(card);
      }
    }
  
    //CUANDO HACEMOS CLICK EN DOS CARTAS DISTINTAS COMPROBAMOS SI SON IGUALES
    function checkForMatch() {
      const cards = document.getElementsByClassName("imgJuego");
      console.log(cards);
      var primerID = idCartaElegida[0];
      var segundoID = idCartaElegida[1];
      console.log("opcion 1: " + primerID + " - opcion 2: " + segundoID);
      //SI HACEMOS CLICK SOBRE LA MISMA IMAGEN SE LO HACEMOS SABER AL USUARIO Y VOLVEMOS A PONER LA IMGEN PRIMARIA
      if(primerID == segundoID) {
        console.log(cards[primerID]);
        console.log(cards[segundoID]);
        cards[primerID].setAttribute('src', 'imagesGame/reverso.jpg');
        cards[segundoID].setAttribute('src', 'imagesGame/reverso.jpg');
        alert('HA SELECCIONADO 2 VECES LA MISMA IMAGEN');
      }
      //SI SON IGUALES HACEMOS DESAPARECER ESTAS CARTAS Y ELIMINAMOS EVENTO ADEMÁS AÑADIMOS AL ARRAY DE CARTAS ACERTADAS
      else if (cartaElegida[0] === cartaElegida[1]) {
        alert('ENHORABUENA! HA ENCONTRADO UNA PAREJA');
        console.log(cards[primerID]);
        console.log(cards[segundoID]);
        cards[primerID].setAttribute('src', 'imagesGame/white.png');
        cards[segundoID].setAttribute('src', 'imagesGame/white.png');
        cards[primerID].removeEventListener('click', flipCard);
        cards[segundoID].removeEventListener('click', flipCard);
        cartaAcertada.push(cartaElegida);
      // SI NO SON IGUALES, PONEMOS IMAGEN PRIMARIA 
      } else {
        console.log(cards[primerID]);
        console.log(cards[segundoID]);
        cards[primerID].setAttribute('src', 'imagesGame/reverso.jpg');
        cards[segundoID].setAttribute('src', 'imagesGame/reverso.jpg');
        alert('HA FALLADO VUELVA A INTENTARLO');
      }
      cartaElegida = [];
      idCartaElegida = [];
      resultDisplay.textContent = cartaAcertada.length;
      if  (cartaAcertada.length === cartas.length/2) {
        document.getElementById("puntos").style.display = "none";
        resultDisplay.innerHTML="ENHORABUENA HAS ENCONTRADO TODAS LAS PAREJAS";
        document.getElementById("enhorabuena").style.display = "block";
        grid.style.display = "none";
      }
    }
  
    //VOLTEAMOS CARTAS Y AÑADIMOS TANTO AL ARRAY DE LAS CARTAS SELECCIONADAS COMO AL ARRAY DE LOS ID's DE LAS ANTERIORES
    function flipCard() {
      let cardId = this.getAttribute('data-id');
      console.log("id tarjeta " + cardId);
      cartaElegida.push(cartas[cardId].name);
      idCartaElegida.push(cardId);
      this.setAttribute('src', cartas[cardId].img);
      //CUANDO TENGAMOS 2 CARTAS SELECCIONADAS REALIZAMOS COMPROBACIÓN
      if (cartaElegida.length ===2) {
        setTimeout(checkForMatch, 300);
      }
    }
  

