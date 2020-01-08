<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
  <?php include("includes/head-tag-contents.php");?>
  <style>
    canvas {
      margin: 0 auto;
      margin-top: 115px;
      display: block;
    }
  </style>
</head>

<body>

  <?php include("includes/design-top.php");?>
  <?php include("includes/navbar.php");?>


  <main>
    <!--==========================
    TRILLO'S PKM CLICKER
  ============================-->
    <section class="section-bg wow fadeInUp pb-5">
      <canvas id="myCanvas" width="960" height="495" style="border:1px solid #d3d3d3;">
        Your browser does not support the HTML5 canvas tag.
      </canvas>
      <script>
        var c = document.getElementById("myCanvas");
        var pokecoins = 0;
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
        var img;
        var imgmeowth;
        var imgpersian;
        var pcoins;
        var pshop;
        var loop;
        var fps = 60;
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
          };
          gameLogic();
        }
        function dibujaJuego() {

          //Dibujamos fondo
          ctx.drawImage(background, 0, 0);
          // Dibujamos cuadrado derecha logo
          ctx.fillStyle = "rgb(11, 16, 34)";
          ctx.fillRect(c.width - 300, 0, 300, 55);
          //Pintamos logos
          ctx.font = "15px Raleway";
          ctx.fillStyle = "rgb(24,161,156)";
          ctx.fillText("Francisco Trillo's Fanbase", 670, 20);
          //ctx.fillText("FPS: ", c.width-80, c.height-10);
          //ctx.fillText(fps, c.width-45, c.height-10);
          // Creamos el gradient para el logo
          var gradient = ctx.createLinearGradient(0, 0, c.width, 0);
          gradient.addColorStop("0", "yellow");
          gradient.addColorStop("0.4", "yellow");
          gradient.addColorStop("1", "pink");
          ctx.font = "30px Permanent Marker";
          ctx.strokeStyle = gradient;
          ctx.strokeText("Pokemon Clicker", 680, 45);
          //Cuadrado monedas
          ctx.fillStyle = "rgb(24,161,156)";
          ctx.fillRect(0, 0, 285, 55);
          ctx.font = "20px Raleway";
          ctx.fillStyle = "yellow";
          ctx.fillText("PokeCoins:", 10, 35);
          ctx.fillText(pokecoins, 115, 35);
          ctx.fillStyle = "rgb(24,161,156)";
          //Cuadrados compras
          ctx.fillRect(0, 72, 350, 50);
          ctx.fillRect(0, 135, 510, 76);
          ctx.fillRect(0, 243, 510, 60);
          ctx.fillRect(0, 325, 510, 80);
          ctx.fillRect(0, 420, 410, 60);
          var gradient = ctx.createLinearGradient(0, 0, c.width, 0);
          gradient.addColorStop("0", "red");
          gradient.addColorStop("0.4", "blue");
          gradient.addColorStop("1", "pink");
          ctx.font = "50px Permanent Marker";
          ctx.strokeStyle = gradient;
          ctx.strokeText("Tienda", 10, 115);
          ctx.font = "30px Raleway";
          ctx.strokeText("[ MEJORAR CENTRO ]", 45, 460);
          //Boton comprar meowth y persian
          ctx.font = "17px Raleway";
          ctx.fillStyle = "black";
          ctx.fillText("Meowth [" + preciomejora1 + " PC]", 10, 180);
          ctx.fillText("PokeCoins/click: " +(1+ mejora1), 260, 180);
          ctx.fillText("Persian [" + preciomejora2 + " PC]", 10, 280);
          ctx.fillText("PC automáticos/s: " + pcextra, 260, 280);
          ctx.fillText("- Meowth mejora los clicks con un extra de +1.", 10, 340);
          ctx.fillText("- Persian aumenta en 1 los PokeCoins automáticos.", 10, 360);
          ctx.fillText("- El Centro Pokémon DUPLICA todas tus mejoras y aumenta", 10, 380);
          ctx.fillText("el coste de las mejoras X4. Precio reforma: " + preciocentro+" PC", 20, 400);
          //Dibujamos las imagenes
          ctx.drawImage(pcoins, 230, 0);
          ctx.drawImage(pshop, 280, 60);
          ctx.drawImage(imgmeowth, posXmeowth, posYmeowth);
          ctx.drawImage(imgpersian, posXpersian, posYpersian);
          ctx.drawImage(img, posXball, posYball);
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
                alert("No tienes suficiente dinero");
              } else {
                pokecoins -= preciocentro;
                centromejora = "centeractu2.jpg";
                preciomejora1 = preciomejora1 * 4;
                preciomejora2 = preciomejora2 * 4;
                preciocentro += preciocentro;
                mejora1 = mejora1 + (mejora1 / 2);
                mejora2 = mejora2 + (mejora2 / 2);
                background.src = "assets/img/pkmclicker/" + centromejora;
                alert("¡ Enhorabuena !\n El Centro Pokémon ha sido reformado y disfrutas del doble de tus mejoras.");
              }
            }
            // Click meowth
            if (x > posXmeowth && x < imgmeowth.width + posXmeowth && y > posYmeowth && y < imgmeowth.height + posYmeowth) {
              if (pokecoins - preciomejora1 < 0) {
                alert("No tienes suficiente dinero");
              } else {
                pokecoins -= preciomejora1;
                mejora1++;
                preciomejora1+= preciomejora1/2;
                pokeclick = 1 + mejora1 + mejora2;
              }
            }
            // Click persian
            if (x > posXpersian && x < imgpersian.width + posXpersian && y > posYpersian && y < imgpersian.height + posYpersian) {
              if (pokecoins - preciomejora2 < 0) {
                alert("No tienes suficiente dinero");
              } else {
                pokecoins -= preciomejora2;
                pcextra+=1;
                preciomejora2 += preciomejora2/2;
              }
            }
          });
        }
        initGame();
      </script>
      </div>
    </section>
  </main>

  <?php include("includes/footer.php"); ?>
</body>

</html>