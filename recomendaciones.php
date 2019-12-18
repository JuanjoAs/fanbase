<?php 
include("includes/a_config.php");
require_once 'Objetos/RecomendacionesObj.php';

?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navbar.php");?>

<main class="container mainpadding">

<!--==========================
      Juegos
    ============================-->
    <section class="recomendaciones wow fadeInUp">
        <div class="section-header">
          <h2>Juegos</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-12">
              <ul class="recomendaciones-list">
                <?php

                $recomendaciones=RecomendacionesObj::recuperarTodosJuegos();
                ?>
                <?php
                foreach($recomendaciones as $recomendacion){
                  //i href
                ?>
                <li class="border">
                  <a data-toggle="collapse" href="#juegos1" class="collapsed cajaenlace"><?php echo $recomendacion->nombre; ?><i class="fa fa-minus-circle"></i></a>
                  <div id="juegos1" class="collapse">
                    <div class="row">
                      <div class="col-lg-3">
                        <img class="border cartelrecos" src='<?php echo $recomendacion->imagen; ?>'>
                      </div>
                      <div class="col-lg-6">
                        <p>
                        <?php echo $recomendacion->descripcion; ?>
                        </p>
                      </div>
                      <div class="col-lg-3">
                        <div class="row storesbotones">
                          <?php
                          if($recomendacion->plataforma1!=null){
                            if($recomendacion->plataforma1=='gog'){
                              ?>
                              <div class="col-lg-12">
                              <a  href="<?php echo $recomendacion->linkplataforma1;?>"><img src="assets/img/recomendaciones/disponiblegog.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma1=='google'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma1;?>"><img src="assets/img/recomendaciones/disponiblegoogle.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma1=='appstore'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma1;?>"><img src="assets/img/recomendaciones/disponibleappstore.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma1=='microsoft'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma1;?>"><img src="assets/img/recomendaciones/disponiblepc.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma1=='steam'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma1;?>"><img src="assets/img/recomendaciones/disponiblesteam.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma1=='pc'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma1;?>"><img src="assets/img/recomendaciones/disponiblepc.png" ></a>
                              </div>
                              <?php
                            }
                          }
                          if($recomendacion->plataforma2!=null){
                            if($recomendacion->plataforma2=='gog'){
                              ?>
                              <div class="col-lg-12">
                              <a  href="<?php echo $recomendacion->linkplataforma2;?>"><img src="assets/img/recomendaciones/disponiblegog.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma2=='google'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma2;?>"><img src="assets/img/recomendaciones/disponiblegoogle.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma2=='appstore'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma2;?>"><img src="assets/img/recomendaciones/disponibleappstore.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma2=='microsoft'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma2;?>"><img src="assets/img/recomendaciones/disponiblepc.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma2=='steam'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma2;?>"><img src="assets/img/recomendaciones/disponiblesteam.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma2=='pc'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma2;?>"><img src="assets/img/recomendaciones/disponiblepc.png" ></a>
                              </div>
                              <?php
                            }
                          }
                          if($recomendacion->plataforma3!=null){
                            if($recomendacion->plataforma3=='gog'){
                              ?>
                              <div class="col-lg-12">
                              <a  href="<?php echo $recomendacion->linkplataforma3;?>"><img src="assets/img/recomendaciones/disponiblegog.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma3=='google'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma3;?>"><img src="assets/img/recomendaciones/disponiblegoogle.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma3=='appstore'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma3;?>"><img src="assets/img/recomendaciones/disponibleappstore.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma3=='microsoft'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma3;?>"><img src="assets/img/recomendaciones/disponiblepc.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma3=='steam'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma3;?>"><img src="assets/img/recomendaciones/disponiblesteam.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma3=='pc'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma3;?>"><img src="assets/img/recomendaciones/disponiblepc.png" ></a>
                              </div>
                              <?php
                            }
                          }
                          if($recomendacion->plataforma4!=null){
                            if($recomendacion->plataforma4=='gog'){
                              ?>
                              <div class="col-lg-12">
                              <a  href="<?php echo $recomendacion->linkplataforma3;?>"><img src="assets/img/recomendaciones/disponiblegog.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma4=='google'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma3;?>"><img src="assets/img/recomendaciones/disponiblegoogle.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma4=='appstore'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma3;?>"><img src="assets/img/recomendaciones/disponibleappstore.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma4=='microsoft'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma3;?>"><img src="assets/img/recomendaciones/disponiblepc.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma4=='steam'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma3;?>"><img src="assets/img/recomendaciones/disponiblesteam.png" ></a>
                              </div>
                              <?php
                            }
                            if($recomendacion->plataforma4=='pc'){
                              ?>
                              <div class="col-lg-12">
                              <a href="<?php echo $recomendacion->linkplataforma4;?>"><img src="assets/img/recomendaciones/disponiblepc.png" ></a>
                              </div>
                              <?php
                            }
                          }
                          ?>
                     
                        
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php
                }
                ?>
                
              </ul>
          </div>
        </div>
    </section>

<!--==========================
      Series
    ============================-->
    <section class="recomendaciones wow fadeInUp">
        <div class="section-header">
          <h2>Películas y Series</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-12">
              <ul class="recomendaciones-list">
                <li class="border">
                  <a data-toggle="collapse" href="#series1" class="collapsed cajaenlace">Ataque a los Titanes <i class="fa fa-minus-circle"></i></a>
                  <div id="series1" class="collapse">
                    <div class="row">
                      <div class="col-lg-3">
                        <img class="border cartelrecos" src="assets/img/recomendaciones/titanes.png">
                      </div>
                      <div class="col-lg-6">
                        <p>
                          Juego multiplayer más popular de los últimos años. Pionero de los e-Sport. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempore ea sit commodi. At nisi maiores quo doloribus aperiam quam nam fuga eaque a tempore excepturi nemo hic, quod voluptate.
                          At nisi maiores quo doloribus aperiam quam nam fuga eaque a tempore excepturi nemo hic, quod voluptate. 
                        </p>
                      </div>
                      <div class="col-lg-3">
                        <div class="row storesbotones">
                          <div class="col-lg-12">
                            <a  href="https://play.google.com/store/apps/details?id=com.riotgames.league.wildrift&hl=es"><img src="assets/img/recomendaciones/disponiblegoogle.png" ></a>
                          </div>
                          <div class="col-lg-12">
                           <a href="www.apple.com" ><img src="assets/img/recomendaciones/disponibleappstore.png"></a>
                          </div>
                          <div class="col-lg-12">
                           <a href="https://signup.euw.leagueoflegends.com/es/signup/redownload"><img src="assets/img/recomendaciones/disponiblepc.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="border">
                  <a data-toggle="collapse" href="#series2" class="collapsed cajaenlace">Juego de Tronos <i class="fa fa-minus-circle"></i></a>
                  <div id="series2" class="collapse">
                    <div class="row">
                      <div class="col-lg-3">
                        <img class="border cartelrecos" src="assets/img/recomendaciones/cyberpunk1.jpg">
                      </div>
                      <div class="col-lg-6">
                        <p>
                          El juego AAA más esperado de la última década. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempore ea sit commodi. At nisi maiores quo doloribus aperiam quam nam fuga eaque a tempore excepturi nemo hic, quod voluptate.
                          At nisi maiores quo doloribus aperiam quam nam fuga eaque a tempore excepturi nemo hic, quod voluptate. 
                        </p>
                      </div>
                      <div class="col-lg-3">
                        <div class="row storesbotones">
                          <div class="col-lg-12">
                            <a href="https://www.gog.com/game/cyberpunk_2077" ><img src="assets/img/recomendaciones/disponiblegog.png"></a>
                          </div>
                          <div class="col-lg-12">
                           <a  href="https://store.steampowered.com/app/1091500/Cyberpunk_2077/"><img src="assets/img/recomendaciones/disponiblesteam.png" ></a>
                          </div>
                          <div class="col-lg-12">
                           <a href="https://www.microsoft.com/es-es/p/cyberpunk-2077/bx3m8l83bbrw"><img src="assets/img/recomendaciones/disponiblepc.png"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
          </div>
        </div>
    </section>
</main>

<?php include("includes/footer.php");?>  

</body>
</html>