/**
 * Proporciona un numero al azar.
 * @param {*} size => limite del número al azar.
 */
let getRandomNumber = size => {
    return Math.floor(Math.random() * size);
}

/**
 * Calcula la distancia entre dos puntos.
 * @param {*} e         => Donde hace click el jugador.
 * @param {*} target    => Donde se encuentra el objetivo (tesoro).
 */
let getDistance = (e, target) => {
    let diffX = e.offsetX - target.x;
    let diffY = e.offsetY - target.y;

    // Aplicamos el teorema de Pitagoras para calcular la distancia.
    return Math.sqrt(Math.pow(diffX, 2) + Math.pow(diffY, 2));
}

/**
 * Indica al jugador pistas sobre la busqueda.
 * @param {*} distance => Distancia entre el puntos.
 */
let getDistanceHint = distance => {
    if(distance < 30) {
        return 1;
    } else if(distance < 40) {
        return 2;
    } else if(distance < 60) {
        return 3;
    } else if(distance < 180) {
        return 4;
    } else if(distance < 360) {
        return 5;
    } else {
        return 6;
    }
}