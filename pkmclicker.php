<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("includes/head-tag-contents.php");?>
  <?php include("includes/inc_pkmclicker.php");?>

</head>

<body>
  <?php include("includes/navbar.php");?>


  <main>
    <!--==========================
    TRILLO'S PKM CLICKER
  ============================-->
    <section id="canvassection" class="section-bg wow fadeInUp pb-5">
      <canvas id="myCanvas" width="960" height="495">
        Your browser does not support the HTML5 canvas tag.
      </canvas>
      <script>
        var c = document.getElementById("myCanvas");
        var pokecoins = 0;
        var feedball=false;
        var ctx = c.getContext("2d");
        var posXball = c.width / 1.7;
        var posYball = 100;
        var posXmeowth = 160;
        var posYmeowth = 130;
        var posXpersian = 140;
        var posYpersian = 210;
        var mejora1 = 0;
        var mejora2 = 0;
        var preciomejora1 = 20;
        var preciomejora2 = 80;
        var preciocentro = 2000;
        var pokeclick = 1 + mejora1 + mejora2;
        var background;
        var loop;
        var lvlcentro=1;
        var fps = 60;
        var latestprint=410;
        var meowthscomprados=1;
        var persianscomprados=1;
        var pcextra=1;
        var centromejora = "centeractu1.jpg";

        function initGame() {
          cacheImagenes();
          const interval = setInterval(function () {
            pokecoins+=pcextra;
          }, 1000);

          background.onload = function () {
            loop = setInterval(function () {
              ctx.clearRect(0, 0, c.width, c.height); // borramos canvas
              dibujaJuego();
            }, 1000 / fps);
            gameLogic();

          };
        }
        function dibujaJuego() {

          //Dibujamos fondo
          ctx.drawImage(background, 0, 0);
          
          // Dibujamos cuadrado derecha logo
          ctx.fillStyle = "rgb(11, 16, 34)";
          ctx.fillRect(590, 0, 296, 47);
          
          //Pintamos logos
          ctx.font = "13px Raleway";
          ctx.fillStyle = "rgb(24,161,156)";
          ctx.fillText("Francisco Trillo's Fanbase", 680, 14);

          // Creamos el gradient para el logo
          var gradient = ctx.createLinearGradient(0, 0, c.width, 0);
          gradient.addColorStop("0", "yellow");
          gradient.addColorStop("0.4", "yellow");
          gradient.addColorStop("1", "pink");
          ctx.font = "34px Permanent Marker";
          ctx.strokeStyle = gradient;
          ctx.strokeText("Pokémon Clicker", 593, 40);

          //Cuadrado monedas
          ctx.globalAlpha = 0.8;
          ctx.fillStyle = "rgb(24,161,156)";
          ctx.fillRect(0, 5, 350, 45);
          ctx.globalAlpha = 1;
          ctx.font = "20px Raleway";
          ctx.fillStyle = "yellow";
          ctx.fillText("PokeCoins:", 10, 35);
          ctx.fillText(pokecoins, 115, 35);

          //Cuadrados tienda
          ctx.fillStyle = "rgb(13,18,35)";
          ctx.fillRect(0, 72, 420, 50);
          ctx.fillStyle = "rgb(24,161,156)";
          ctx.globalAlpha = 0.8;
          ctx.fillRect(0, 135, 510, 76);
          ctx.fillRect(0, 243, 510, 60);//Persian cuadrado
          ctx.globalAlpha = 1;

          ctx.fillRect(0, 325, 420, 80);
          ctx.fillStyle = "rgb(24,161,156)";
          ctx.fillRect(0, 420, 420, 60);
          var gradient = ctx.createLinearGradient(0, 0, c.width, 0);
          ctx.lineWidth = 2;
          gradient.addColorStop("0", "red");
          gradient.addColorStop("0.5", "blue");
          gradient.addColorStop("0.8", "pink");
          ctx.font = "50px Permanent Marker";
          ctx.strokeStyle = gradient;
          ctx.strokeText("Centro Lvl. "+lvlcentro, 10, 115);
          ctx.font = "35px Raleway";
          var gradient = ctx.createLinearGradient(0, 0, c.width, 0);
          gradient.addColorStop("0", "red");
          gradient.addColorStop("0.5", "blue");
          gradient.addColorStop("0.8", "pink");
          ctx.fillStyle = gradient;
          ctx.fillText("[ MEJORAR CENTRO ]", 33, 463);
        

          //Boton comprar meowth y persian
          ctx.font = "17px Raleway";
          ctx.fillStyle = "black";
          ctx.fillText("Meowth [" + preciomejora1 + " PC]", 10, 180);
          ctx.fillText("PokeCoins/click: " +(1+ mejora1), 260, 180);
          ctx.fillText("Persian [" + preciomejora2 + " PC]", 10, 280);
          ctx.fillText("PokeCoins/segundo: " + pcextra, 260, 280);
          ctx.fillText("- Meowth mejora los clicks con un extra de +1.", 10, 340);
          ctx.fillText("- Persian aumenta en 1 los PokeCoins automáticos.", 10, 360);
          ctx.fillText("- El Centro Pokémon multiplica X4 tus mejoras y", 10, 380);
          ctx.fillText("el coste de ellas X2. Precio reforma: [" + preciocentro+" PC]", 20, 400);
          ctx.fillStyle = "black";

          //Dibujamos las imagenes
          ctx.drawImage(pcoins, 310, 0);
          ctx.drawImage(pshop, 360, 57);
          ctx.drawImage(imgmeowth, posXmeowth, posYmeowth);
          ctx.drawImage(imgpersian, posXpersian, posYpersian);
          ctx.drawImage(img, posXball, posYball);

          if(feedball){
            ctx.beginPath();
            ctx.fillStyle="red";
            ctx.arc(780, 253, 30, 0, 2 * Math.PI);
            ctx.strokeStyle = gradient;
            ctx.fill();
          }
         //Dibujamos pokes comprados
         latestprint=410;
         for(i=0;i<meowthscomprados;i++){
          ctx.drawImage(imgmeowth, latestprint, 415); 
          latestprint+=40;
         }
         for(i=0;i<persianscomprados;i++){
          ctx.drawImage(imgpersian, latestprint+(i*50), 403); 
         }

        }
        function cacheImagenes() {
          img = new Image();
          imgmeowth = new Image();
          imgpersian = new Image();
          pcoins = new Image();
          pshop = new Image();
          background = new Image();
          background.src = "assets/img/pkmclicker/" + centromejora;
          pcoins.src = "assets/img/pkmclicker/pokecoins-pinterest.png";
          pshop.src = "assets/img/pkmclicker/pokeshop.png";
          imgmeowth.src = "assets/img/pkmclicker/meowth.png";
          imgpersian.src = "assets/img/pkmclicker/persian.png";
          img.src = "assets/img/pkmclicker/pokeball.png";
        }
        function gameLogic() {
          //Efectos listener
          c.addEventListener('mousedown', function (event) {
            var rect = c.getBoundingClientRect(); //posicion absoluta canvas, si no restamos no funcionan bien las coordenadas al mover el canvas con CSS.
            var x = event.pageX - rect.left;
            var y = event.pageY - rect.top;
            //Efecto pokeball
            if (x > posXball && x < img.width + posXball && y > posYball && y < img.height + posYball) {
              feedball=true;
            }
          });
          //Desactivamos efectos
          c.addEventListener('mouseup', function (event) {
              feedball=false;
          });
          //Listener evento clicks
          c.addEventListener('click', function (event) {
            var rect = c.getBoundingClientRect(); //posicion absoluta canvas, si no restamos no funcionan bien las coordenadas al mover el canvas con CSS.
            var x = event.pageX - rect.left;
            var y = event.pageY - rect.top;

            // Click pokeball
            if (x > posXball && x < img.width + posXball && y > posYball && y < img.height + posYball) {
              pokecoins += pokeclick;
            }
            // Click mejora centro
            if (x > 45 && x < 450 && y > 440) {
              if (pokecoins - preciocentro < 0) {
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'No tienes suficiente dinero.',
                });             
               } else {
                lvlcentro++;
                pokecoins -= preciocentro;
                centromejora = "centeractu2.jpg";
                preciomejora1 = preciomejora1 * 2;
                preciomejora2 = preciomejora2 * 2;
                preciocentro = preciocentro*3;
                mejora1 = mejora1 *4;
                pcextra = pcextra *4;
                background.src = "assets/img/pkmclicker/" + centromejora;
                Swal.fire(
                  '¡Enhorabuena!',
                  'El Centro Pokémon ha sido reformado y disfrutas de un X3 de tus mejoras.',
                  'success'
                );
              }
            }
            // Click meowth
            if (x > posXmeowth && x < imgmeowth.width + posXmeowth && y > posYmeowth && y < imgmeowth.height + posYmeowth) {
              if (pokecoins - preciomejora1 < 0) {
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'No tienes suficiente dinero.',
                });               
                } else {
                feedbuy=true;
                meowthscomprados++;
                pokecoins -= preciomejora1;
                mejora1++;
                preciomejora1+= Math.ceil(preciomejora1/2); //redondeamos al alza o estropea con decimales
                pokeclick = 1 + mejora1 + mejora2;
              }
            }
            // Click persian
            if (x > posXpersian && x < imgpersian.width + posXpersian && y > posYpersian && y < imgpersian.height + posYpersian) {
              if (pokecoins - preciomejora2 < 0) {
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'No tienes suficiente dinero.',
                });               
                } else {
                feedbuy=true;
                persianscomprados++;
                pokecoins -= preciomejora2;
                pcextra+=1;
                preciomejora2 += Math.ceil(preciomejora2/2);
              }
            }
          });
        }
        initGame();
        if(window.innerHeight > window.innerWidth){
          alert("El juego se tiene que jugar apaisado o en PC")
          //document.getElementById("canvassection").className = "wrapper"; 
        }
      </script>
      </div>
    </section>
  </main>

  <?php include("includes/footer.php"); ?>
</body>

</html>