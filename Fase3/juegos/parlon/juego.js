//TECLA DE ESPACIO EVENTOS

document.addEventListener("keydown", function (evento) {
  if (evento.keyCode == 32) {
    console.log("salta con espacio prueba ");
    if (nivel.muerto == false) {
      saltar();
    } else {
      //velocidad=9;
      nivel.muerto = false;
      nivel.velocidad = 9;
      cactus.x = ancho + 100;
      nivel.puntuacion = 0;
    }
  }
});



//CARGAR MUSICA DE FONDO
//var bgm=document.getElementById('bgm');


//VARIABLES DE LAS IMAGANES Y SUS CARGAS
var imgRex, imgCactus, imgSuelo;

function cargaImagenes() {
  imgRex = new Image();
  imgCactus = new Image();
  imgSuelo = new Image();

  imgRex.src = "img/rex.png";
  imgCactus.src = "img/cacti.png";
  imgSuelo.src = "img/fondo.png";

  bgm= new Audio();
  bgm.src= "music/micancion.mp3";
}

var ancho = 788;
var alto = 260; // cambiado a 260 por bug, a 300 era el original
var canvas, ctx;

function inicializa() { // lo llamo en el body onload
  canvas = document.getElementById("canvas");
  ctx = canvas.getContext("2d");
  cargaImagenes();
}

function borraCanvas() {
  canvas.width = ancho;
  canvas.height = alto;
}

//OBJETOS CON VARIABLES
var suelo = 200;
var trex = {
  y: suelo,
  vy: 1000,
  gravedad: 80,
  salto: 198,
  vymax: 98,
  saltando: false,
}; // OBJETO TREX CON SUS VARIABLES DE SALTO,POSICION INICIAL Y DEMAS POR DEFECTO
var nivel = { velocidad: 9, puntuacion: 0, muerto: false };
var cactus = { x: ancho + 100, y: suelo - 8 };
var sueloGrafico = { x: 0, y: 1 }; // minuto 40

//--------------------------------REX---------------------------------------------------
function dibujaRex() {
  ctx.drawImage(imgRex, 0, 0, 560, 540, 100, trex.y, 50, 50); // el 0 , 0 es el clipping, lo demas es el tamaño de la imagen, las siguientes es DONDE queremos dibujar la imagen, y los ultimos el reescalado de la imagen (EL TAMAÑO REAL EN NUESTRO JUEGO)
}

//--------------------------------CACTUS--------------------------------------------------
function dibujaCactus() {
  ctx.drawImage(imgCactus, 0, 0, 60, 60, cactus.x, cactus.y, 60, 60);
  //ctx.play(bgm);
}

function movimientoCactus() {
  if (cactus.x < -100) {
    cactus.x = ancho + 100;
    nivel.puntuacion++;
  } else {
    cactus.x -= nivel.velocidad;
  }
}

//---------------------------------SUELO-------------------------------------------------
function dibujaSuelo() {
  //ctx.drawImage(imgSuelo,sueloGrafico.x,0,525,200,300,sueloGrafico.y,200,200);
  ctx.drawImage(
    imgSuelo,
    sueloGrafico.x,
    0,
    788,
    300,
    0,
    sueloGrafico.y,
    780,
    260
  );
}

//--------------------------------COLISION------------------------------------------------
function colision() {
  //cactus.x
  //trex.y
  if (cactus.x >= 100 && cactus.x <= 150) {
    if (trex.y >= suelo - 8) {
      nivel.muerto = true;
      nivel.velocidad = 0;
      bgm.pause();
    }
  }
}

//-------------------------------------OTROS----------------------------------------------
function saltar() {
  trex.saltando = true;
  trex.vy = trex.salto;
}

function gravedad() {
  if (trex.saltando == true) {
    if (trex.y - trex.vy - trex.gravedad > suelo) {
      // para evitar el rebote
      trex.saltando = false;
      trex.vy = 0;
      trex.y = suelo;
    } else {
      trex.vy -= trex.gravedad;
      trex.y -= trex.vy;
    }
  }
}

function puntuacion() {
  ctx.font = "30px impact";
  ctx.fillStyle = "#FF5733";
  ctx.fillText(`${nivel.puntuacion}`, 600, 50); // aqui es donde va situada la puntuacion arriba a la drecha

  if (nivel.muerto == true) {
    ctx.font = "40px impact";
    ctx.fillStyle = "#0063FF";
    ctx.fillText("ANTONIO LUQUE 2DAW", 150, 150);
    ctx.fillText("(Presiona espacio para volver a empezar)", 50, 100);
  }
}

//---------------------------------------------------------------------------------------
//BUCLE PRINCIPAL SIEMPRE QUE ESTE LA PAGINA ABIERTA

var FPS = 50;
setInterval(function () {
  principal();
}, 1000 / FPS);

function principal() {
  //console.log("principal");
  borraCanvas();
  playmusic();
  gravedad();
  //sound.play();
  colision();
  movimientoCactus();
  dibujaSuelo();
  dibujaCactus();
  dibujaRex();
  puntuacion();
}
