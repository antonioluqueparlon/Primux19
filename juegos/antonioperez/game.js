var canvas = document.createElement("canvas");
var ctx = canvas.getContext("2d");
canvas.width = 512;
canvas.height = 500;
document.body.appendChild(canvas);

//Objetos del juego
var cat = {
    speed: 200 //Velocidad de movimiento del gato
  };
var coin = {};
var bomb1 = {};
var bomb2 = {};
var bomb3 = {};
var totalCoins = 0; //Total de monedas obtenidas, es la puntuación

//Esperamos a que se carge el fondo
var bgReady = false;
var bgImage = new Image();
bgImage.onload = function () {
  bgReady = true;
};
bgImage.src = "images/background.png";

//Esperamos a que se carge el jugador
var rdCat = false;
var catImg = new Image();
catImg.onload = function () {
  rdCat = true;
};
catImg.src = "images/cat.png";

//Esperamos a que se carge la moneda
var rdCoin = false;
var coinImg = new Image();
coinImg.onload = function () {
  rdCoin = true;
};
coinImg.src = "images/coin.png";

//Esperamos a que se carge la bomba
var rdBomb = false;
var bombImg = new Image();
bombImg.onload = function () {
    rdBomb = true;
};
bombImg.src = "images/bomb.png";

var keysDown = {};
//Realiza la función de pulsar a la tecla hasta que se levanta la pulsación
addEventListener("keydown", function (key) {
  keysDown[key.keyCode] = true;
}, false);
addEventListener("keyup", function (key) {
  delete keysDown[key.keyCode];
}, false);

var resetCoin = function () {
    //Crea una moneda en una posición aleatoria
    coin.x = 20 + (Math.random() * (canvas.width - 40));
    coin.y = 20 + (Math.random() * (canvas.height - 40));
};

var resetBomb = function (bomb) {
    //Crea una bomba en una posición aleatoria
    bomb.x = 20 + (Math.random() * (canvas.width - 40));
    bomb.y = 20 + (Math.random() * (canvas.height - 40));
};

//Actualización del juego
var update = function (modifier) {
  if (87 in keysDown) { // Subir
    cat.y -= cat.speed * modifier;
  }
  if (83 in keysDown) { // Bajar
    cat.y += cat.speed * modifier;
  }
  if (65 in keysDown) { // Izquierda
    cat.x -= cat.speed * modifier;
  }
  if (68 in keysDown) { // Derecha
    cat.x += cat.speed * modifier;
  }

  //Cuando tocas una moneda sumas un punto y se crea otra moneda
  if (
    cat.x <= (coin.x + 20)
    && coin.x <= (cat.x + 20)
    && cat.y <= (coin.y + 20)
    && coin.y <= (cat.y + 20)
  ) {
    ++totalCoins;
    resetCoin();
  }

  //Cuando tocas una bomba acaba el juego
  if (
    cat.x <= (bomb1.x + 20)
    && bomb1.x <= (cat.x + 20)
    && cat.y <= (bomb1.y + 20)
    && bomb1.y <= (cat.y + 20)
  ) {
    finished = true;
  }

  if (
    cat.x <= (bomb2.x + 20)
    && bomb2.x <= (cat.x + 20)
    && cat.y <= (bomb2.y + 20)
    && bomb2.y <= (cat.y + 20)
  ) {
    finished = true;
  }

  if (
    cat.x <= (bomb3.x + 20)
    && bomb3.x <= (cat.x + 20)
    && cat.y <= (bomb3.y + 20)
    && bomb3.y <= (cat.y + 20)
  ) {
    finished = true;
  }

  //Evitamos que el personaje salga por la izquierda del mapa
  if(cat.x <= 0){
      cat.x = 1;
  }

    //Evitamos que el personaje salga por la derecha del mapa
  if(cat.x >= canvas.width - 32){
    cat.x = canvas.width - 32;
    }

      //Evitamos que el personaje salga por la arriba
    if(cat.y <= 0){
        cat.y = 1;
    }

      //Evitamos que el personaje salga por la abajo del mapa
    if(cat.y >= canvas.height - 32){
        cat.y = canvas.height - 32 ;
    }
};

//Dibujado de los datos
var displayInfo = function(){

    //Color gris y fuente de texto
    ctx.fillStyle = "rgb(200, 200, 200)";
    ctx.font = "20px Sans Serif";

    //Lo mostramos arriba izquierda del juego
    ctx.textAlign = "left";
    ctx.textBaseline = "top";

    //Total de monedas y tiempo restante
    ctx.fillText("Monedas: " + totalCoins, 20, 20);
    ctx.fillText("Tiempo: " + count, 20, 50);
};

var gameOver = function(result){
    if(result==true){
        ctx.fillText("Game over!", 200, 220);
        ctx.fillText("Monedas: " + totalCoins, 200, 250);
      }
}

//Dibujado del juego
var drawGame = function () {
  if (bgReady) {
    ctx.drawImage(bgImage, 0, 0);
  }
  if (rdCat) {
    ctx.drawImage(catImg, cat.x, cat.y);
  }
  if (rdCoin) {
    ctx.drawImage(coinImg, coin.x, coin.y);
  }
  if(rdBomb) {
      ctx.drawImage(bombImg,bomb1.x,bomb1.y);
  }
  if(rdBomb) {
    ctx.drawImage(bombImg,bomb2.x,bomb2.y);
}
if(rdBomb) {
    ctx.drawImage(bombImg,bomb3.x,bomb3.y);
}

  displayInfo();

  //Comprueba si se ha acabado el tiempo
  gameOver(finished);
  
};

//Funcion para iniciar los objetos del juego
var init = function () {
    //Pintamos el jugador en el centro
    cat.x = canvas.width / 2;
    cat.y = canvas.height / 2;
  
    //Pintamos la primera moneda y bomba
    resetCoin();
    resetBomb(bomb1);
    resetBomb(bomb2);
    resetBomb(bomb3);
  };

var count = 30; //Tiempo
var finished = false;

//Función del contador, se ejecuta una vez cada segundo
var counter =function(){
  count=count-1;
  resetBomb(bomb1);
  resetBomb(bomb2);
  resetBomb(bomb3);

  //Al llegar a 0 se para el juego o si se choca con una bomba
    if (count <= 0 || finished == true)
    {
       clearInterval(counter);
       finished = true;
       rdCoin=false;
       rdCat=false;
       rdBomb=false;
       count = 0;

    }
}

// Cada segundo se llama al contador
setInterval(counter, 1000);

var main = function () {
  //Se llama a la función update y se le da el factor de velocidad, a mayor factor mayor movimiento del personaje
  update(0.02);
  
  //Se llama a la función de dibujado
  drawGame();

  requestAnimationFrame(main);
};

init();
main();