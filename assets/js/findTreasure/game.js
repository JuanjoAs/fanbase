// Dimensiones del mapa.
const WIDTH = 400;
const HEIGHT = 400;

// Objeto para indicar la situación de objetivo (tesoro).
let target = {
    x: getRandomNumber(WIDTH),
    y: getRandomNumber(HEIGHT)
};

console.log(target);

// Refencia al canvas.
let $map = document.getElementById('map');
// Contexto del canvas.
let ctx = $map.getContext('2d');
// Instanciamos un objeto Image.
let img = new Image();
// Establecemos al objeto la fuente.
img.src = 'assets/js/findTreasure/map.jpg';
// Si ejecutamos el método drawImage() puede que se cargue la 
// imagen en el canvas o no. Esto se debe a que solo se ejecuta 
// si la imagen está ya descargada, en caso contrario no pinta
// nada. Para solucionarlo, debemos saber si la imagen se ha cargado,
// gestionando su evento onload, que se ejecuta si la imagen está
// cargada.
img.onload = function() {
    ctx.drawImage(img, 0, 0);
}


let $info = document.getElementById('info');
let $intentos = document.getElementById('intentos');
let $coordenadas = document.getElementById('coordenadas');
let clicks = 1;

// Manejo del evento click sobre el mapa.
$map.addEventListener('click', function(e) {
    clicks++;
    let distance = getDistance(e, target);
    let distanceHint = getDistanceHint(distance);
    $info.innerHTML = `
        ${distanceHint}
    `;
    $intentos.innerHTML = `
        Intentos: ${clicks}
    `;

    if(distance < 20) {
        alert(`Has encontrado el tesoro en ${clicks} intentos`);
        location.reload();
    }
});

// Manejo del evento mover ratón.
$map.addEventListener('mousemove', function(e) {
    $intentos.innerHTML = `
        Coordenadas del ratón: X -> ${e.offsetX}, Y -> ${e.offsetY}
    `;
});