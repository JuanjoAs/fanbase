//variables usadas y modificables
var distancia = 170; //distancia entre dos tuberias
var distanciaseg = 130; //distancia entre tuberia superior e inferior
var atraccionsuelojugador = 1;
var subida = 30;

//carga del canvas
var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');
var width = canvas.width;
var height = canvas.height;

//carga de imagenes
var imagenTuberia = new Image();
    imagenTuberia.src = 'assets/img/flappybird/tubo.png';

var imagenFinTuberia = new Image();
    imagenFinTuberia.src = 'assets/img/flappybird/Fintubo.png';

var escenario = new Image();
    escenario.src = 'assets/img/flappybird/Escenario.png';

var pajaro = new Image();
    pajaro.src = "assets/img/flappybird/bird.png";

//contenedores
var tuberias = [];
var jugador = null;
var findeljuego = true;
var contador = null;
var primerinicio = false;

//clase para el contador de puntos
class Puntuacion {

    //constructor
    constructor(){
        this.puntos = 0;
    }

    //aumentar puntuacion
    aumentar(){
        this.puntos++;
    }

    //pintar puntuacion
    pintar(){
        ctx.font = "bold 15px sans-serif";
        ctx.fillText("Puntuacion: " + this.puntos,10,20);
    }

}

//clase para las tuberias
class Tuberia {

    //constructor
    constructor(maxy){

        //superior
        this.x = width; //lat
        this.y = 0; //arryba

        //lateralmente
        this.maxx = 50; 

        //abajo
        this.maxy = maxy;
        this.borrar = false;
    }

    //movimiento de las tuberias
    movimiento(){
        this.x--;
        if (this.x+this.maxx < 0) {
            this.borrar = true;
        }
    }

    //pintar las tuberias
    pintar(ctx){
        ctx.drawImage(imagenTuberia, this.x, this.y, this.maxx, this.maxy);
        ctx.drawImage(imagenFinTuberia, this.x-2, this.y+this.maxy);
        ctx.drawImage(imagenFinTuberia, this.x-2, this.y+this.maxy+distanciaseg);
        ctx.drawImage(imagenTuberia, this.x, this.y+this.maxy+distanciaseg+23, this.maxx, height-this.y+this.maxy+223);
    }

    //funcion para ver si hay que borrar
    borrar(){
        return this.borrar;
    }

}

class Jugador {
 
    constructor(){
        this.ymob=10;
        this.x=10;
        this.y=10;
    }

    //pintar el jugador
    pintar(ctx){
        ctx.drawImage(pajaro, this.x, this.y);
    }

    //movimiento del jugador
    movimiento(){
        this.ymob+=atraccionsuelojugador;
        this.y=this.ymob;
    }

    //movimiento del jugador, cuando clikeas o le das al espacio
    arriba(){
        this.ymob-=subida;
        this.y=this.ymob;
    }

    //comprobamos si choca con la tuberia
    choca(tuberia){

        //ctx.fillRect(tuberia.x, tuberia.y, tuberia.maxx, tuberia.maxy+imagenFinTuberia.height); //zona arriba
        //ctx.fillRect(tuberia.x, tuberia.y+tuberia.maxy+distanciaseg, tuberia.maxx, width-(tuberia.y+tuberia.maxy+distanciaseg)); //zona arriba


        //choca zona superior
        let pajaroespacio = {x: this.x+3, y: this.y+3, width: pajaro.width-6, height: pajaro.height-6};
        let tuberiasuperior = {x: tuberia.x, y: tuberia.y, width: tuberia.maxx, height: tuberia.maxy+imagenFinTuberia.height};

        if (pajaroespacio.x < tuberiasuperior.x + tuberiasuperior.width && pajaroespacio.x + pajaroespacio.width > tuberiasuperior.x &&
            pajaroespacio.y < tuberiasuperior.y + tuberiasuperior.height && pajaroespacio.height + pajaroespacio.y > tuberiasuperior.y) {
            return true;
        }

        //choca zona inferior
        let tuberiainferior = {x: tuberia.x, y: tuberia.y+tuberia.maxy+distanciaseg, width: tuberia.maxx, height: width-(tuberia.y+tuberia.maxy+distanciaseg)};

        if (pajaroespacio.x < tuberiainferior.x + tuberiainferior.width && pajaroespacio.x + pajaroespacio.width > tuberiainferior.x &&
            pajaroespacio.y < tuberiainferior.y + tuberiainferior.height && pajaroespacio.height + pajaroespacio.y > tuberiainferior.y) {
            return true;
        }

        //si el jugador se ha salido por debajo o arriba
        if (pajaroespacio.y+pajaroespacio.width+3 < 0){
            return true;
        } else if (pajaroespacio.y+3 > height){
            return true;
        }
        

        return false;
    }    

}

//funcion que mueve el juego
function juegomovimiento(){

    //si existe jugador
    if (jugador != null) {

        //si no hay tuberias, las creo
        if (tuberias.length == 0){
            tuberias[tuberias.length] = new Tuberia(Math.floor(Math.random() * (250 - 20)) + 20);
        }

        //muevo el jugador
        jugador.movimiento();

        //compruebo si choca con la tuberia primera
        if(jugador.choca(tuberias[0])){
            jugador = null;
            findeljuego = true;
            $("#boton").attr("disabled", false);
        }
    }
    
    //bucle recorre todas las tuberias para moverlas o hacer cosas
    for (let i = tuberias.length-1; i >= 0; i--) {

        //si esta el jugador, y la tuberia es la ultima, compruebo si coje otra
        if (i == tuberias.length-1 && jugador != null){
            if (tuberias[i].x < width-distancia){
                tuberias[tuberias.length] = new Tuberia(Math.floor(Math.random() * (250 - 20)) + 20);
            }
        }

        //muevo la tuberia
        tuberias[i].movimiento();

        //compruebo si necesito borrarla
        if (tuberias[i].borrar){
            if (findeljuego != true){
                contador.aumentar();
            }
            
            tuberias.splice(i,1);
        }
    }
}

//dibujo de los objetos
function dibujarjuego(params) {
    //dibujo del fondo
    ctx.drawImage(escenario, 0,0, width, height);

    //dibujo de las tuberias
    for (let i = 0; i < tuberias.length; i++) {
        tuberias[i].pintar(ctx);
    }

    //dibujo del jugador
    if (jugador != null){
        jugador.pintar(ctx);
    }

    //dibujo del contador
    if (contador != null){
        contador.pintar();
    }

    //si has chocado, muestro fin del juego
    if (primerinicio == true && findeljuego == true){
        ctx.font = "bold 30px sans-serif";
        ctx.fillText("Fin del Juego",(width/2)-100,height/2);
    }
}

//bucle del juego
function bucle(params) {
    juegomovimiento();
    dibujarjuego();
    window.setTimeout(bucle, 17);
}

//inicio del bucle, al iniciar el js
window.addEventListener('load', bucle, false);

//funcion de las teclas para funcionar
function PulsarTecla(event) {
    if (findeljuego == false){
        tecla = event.keyCode;
        if (tecla == 32){
            jugador.arriba();
        }
    }
    
}

//funcion al hacer click en el canvas
function click(){
    if (!findeljuego){
        jugador.arriba();
    }
}

//boton inicio del juego
$(document).ready(function() {
    $("#boton").click(function() {
        jugador = new Jugador();
        findeljuego = false;
        tuberias = null;
        tuberias = [];
        primerinicio = true;
        contador = new Puntuacion();
        $("#boton").attr("disabled", true);
    });
});
 

//listener
window.onkeydown=PulsarTecla;
canvas.onclick=click;





