<!DOCTYPE>
<html lang="es" dir="ltr">
  <head>
        <meta charset="utf-8">
        <title>Lover Peluches</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
        <script src="js/jquery.mobile-1.4.5.min.js" charset="utf-8"></script>

        <!-- <script  src = "../js/mi-scripts.js " ></script> -->

        <script  src = "js/zoomify.js " ></script>
        <link  href = "css/zoomify.css"  rel = " hoja de estilo " >

        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/styles-product.css">


  </head>
  <body>
    <header>
      <nav class="navegation">
        <div >
            <img class="imgcab" src="img/LOVERPELUCHES.png" alt="" title=""/>
        </div>
        <ul class="menu">
          <li>
            <a id="inicio-menu" href="index.php">
              <img src="img/home.png" alt="">
            </a>
          </li>
          <li>
            <a id="nosotros-menu" href="php/nosotros.php">NOSOTROS</a>
          </li>
          <li>
            <a id="productos-menu" href="product.php">PRODUCTOS</a>
          </li>
          <li>
            <a id="contacto-menu" href="php/form.php">CONTACTO</a>
          </li>
        </ul>
      </nav>
    </header>

    <div class="whatsapp">
      <ul class="ul-img-whatsapp">
        <li class="li-img-whatsapp">
          <a href="https://wa.me/541159394667?text=Me%20gustaría%20comunicarme%20con%20ustedes">
            <img class="img-whatsapp" src="img/Whatsapp-Icon_33936.png" alt="">
            <p class="p-consulta">Envianos tu Consulta!</p>
          </a>
        </li>
        <li class="li-img-whatsapp">
          <a href="https://www.facebook.com/LoverPeluches/" title="Facebook"><img class="img-redes" src="img/facebook64x64.png" alt=""></a>
        </li>
        <li class="li-img-whatsapp">
          <a href="https://www.instagram.com/tienda.lover/" title="Instagram"><img class="img-redes" src="img/instagram64x64.png" alt=""></a>
        </li>
        <li class="li-img-whatsapp">
          <a href="#" title="Twiter"><img class="img-redes" src="img/twiter64x64.png" alt=""></a>
        </li>
        <li class="li-img-whatsapp">
            <a href="https://perfil.mercadolibre.com.ar/TIENDA.LOVER" title="MercadoLibre"><img class="img-redes" src="img/mercadolibre64x64.png" alt=""></a>
        </li>
      </ul>
    </div>

    <div class="productos" id="productos-datos">
      <ul class="submenu">
        <li><a href="#" id="em">Emoticones</a></li>
        <li><a href="#" id="pf">Peluches Fierreros</a></li>
        <li>
          <a id="almohadones" href="#">Almohadones
             <img class="img-add" id="iconadd" src="img/add-icon.png" alt="" >
          </a>
              <ul class="submenu2" id="submenu2">
                <li>
                  <a href="#" id="infant">Infantiles</a>
                </li>
                <li>
                  <a href="#" id="futbol">Futbol</a>
                </li>
                <li>
                  <a href="#" id="autos">Logos de Autos</a>
                </li>
                <li>
                  <a href="#" id="roman">Romanticos</a>
                </li>
                <li>
                  <a href="#" id="fundas">Fundas</a>
                </li>
                <li>
                  <a href="#" id="personalizados">Personalizados</a>
                </li>
              </ul>
        </li>
        <li><a href="#" id="bordados">Bordados en general</a></li>
        <li><a href="#" id="percheros">Percheros</a></li>
        <li><a href="#" id="varios">Varios</a></li>
      </ul>

      <ul class="submenu-rs360">
        <li>
          <a class="a-rs360" href="#" id="pila"><img src="img/pila.png" alt="">
          </a>
        </li>
      </ul>


    </div>

    <div class="cont-emoticones" id="contem">
          <?php
            $directory="img/Productos/EMOTICONES";
            $dirint = dir($directory);
            $contador = 0;
            $alias = 'em';
            while (($archivo = $dirint->read()) !== false)
            {
              if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
                $contador = $contador + 1;

          ?>
                <div class="container" id="<?php echo "$alias$contador"; ?>">

                  <form class="" action="php/form.php" method="post">

                    <img id="imga" alt="" class="img-responsive img-thumbnail2 zoomify" src="<?php echo "$directory/$archivo"; ?>" />
                    <?php
                      $codigo = substr("$archivo", 0, 4);
                      $precio = substr("$archivo", 5, 3);
                      if (substr("$precio", 0, 1) == 0) {
                        $precio = substr("$archivo", 6, 2);
                      }
                     ?>
                    <h6>Codigo: <?php echo "$codigo"; ?></h6>
                    <h6>Precio: $ <?php echo "$precio"; ?></h6>

                    <input type="hidden" name="image" value="<?php echo "$directory/$archivo"; ?>">
                    <input type="hidden" name="cod-img" value="<?php echo "$archivo"; ?>">
                    <button class="btn-verde" type="" name="button">Consultar</button>

                  </form>

                </div>
          <?php
              }
            }
            $dirint->close();
          ?>

          <div class="container-pagination">
                <ul class="ppp">
                  <li class="imgpag"><a href="#">&laquo;</a></li>
                  <?php
                    $numero = 10;
                    $pagina = 1;
                    for($i=0;$i<$contador;$i++){
                      if($i%$numero==0){ ?>
                        <li class="imgpag">
                          <a class="aimgpag" href="#" id="<?php echo $alias; ?><?php echo $i + 1; ?>"><?php echo $pagina++; ?></a>
                        </li>
                  <?php
                      }
                    }
                  ?>
                  <li class="imgpag"><a href="#">&raquo;</a></li>
                </ul>
          </div>


    </div>

    <div class="cont-pf" id="contpf">
      <?php
        $directory="img/Productos/PELUCHES-FIERREROS";
        $dirint = dir($directory);
        $contador = 0;
        $alias = 'pf';
        while (($archivo = $dirint->read()) !== false)
        {
          if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            $contador = $contador + 1;

      ?>
      <div class="container" id="<?php echo "$alias$contador"; ?>">

        <form class="" action="php/form.php" method="post">

          <img id="imga" alt="" class="img-responsive img-thumbnail2 zoomify" src="<?php echo "$directory/$archivo"; ?>" />
          <?php
            $codigo = substr("$archivo", 0, 4);
            $precio = substr("$archivo", 5, 3);
            if (substr("$precio", 0, 1) == 0) {
              $precio = substr("$archivo", 6, 2);
            }
           ?>
          <h6>Codigo: <?php echo "$codigo"; ?></h6>
          <h6>Precio: $ <?php echo "$precio"; ?></h6>

          <input type="hidden" name="image" value="<?php echo "$directory/$archivo"; ?>">
          <input type="hidden" name="cod-img" value="<?php echo "$archivo"; ?>">
          <button class="btn-verde" type="" name="button">Consultar</button>

        </form>

      </div>
      <?php

         }
        }
        $dirint->close();
      ?>

      <div class="container-pagination">
            <ul class="ppp">
              <li class="imgpag"><a href="#">&laquo;</a></li>
              <?php
                $numero = 10;
                $pagina = 1;
                for($i=0;$i<$contador;$i++){
                  if($i%$numero==0){ ?>
                    <li class="imgpag">
                      <a class="aimgpag" href="#" id="<?php echo $alias; ?><?php echo $i + 1; ?>"><?php echo $pagina++; ?></a>
                    </li>
              <?php
                  }
                }
              ?>
              <li class="imgpag"><a href="#">&raquo;</a></li>
            </ul>
      </div>

    </div>

    <div class="cont-autos" id="contautos">
      <?php
        $directory="img/Productos/AL-AUTOS";
        $dirint = dir($directory);
        $contador = 0;
        $alias = 'au';
        while (($archivo = $dirint->read()) !== false)
        {
          if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            $contador = $contador + 1;

      ?>
      <div class="container" id="<?php echo "$alias$contador"; ?>">

        <form class="" action="php/form.php" method="post">

          <img id="imga" alt="" class="img-responsive img-thumbnail2 zoomify" src="<?php echo "$directory/$archivo"; ?>" />
          <?php
            $codigo = substr("$archivo", 0, 4);
            $precio = substr("$archivo", 5, 3);
            if (substr("$precio", 0, 1) == 0) {
              $precio = substr("$archivo", 6, 2);
            }
           ?>
          <h6>Codigo: <?php echo "$codigo"; ?></h6>
          <h6>Precio: $ <?php echo "$precio"; ?></h6>

          <input type="hidden" name="image" value="<?php echo "$directory/$archivo"; ?>">
          <input type="hidden" name="cod-img" value="<?php echo "$archivo"; ?>">
          <button class="btn-verde" type="" name="button">Consultar</button>

        </form>

      </div>
      <?php
          }
        }
        $dirint->close();
      ?>

      <div class="container-pagination">
            <ul class="ppp">
              <li class="imgpag"><a href="#">&laquo;</a></li>
              <?php
                $numero = 10;
                $pagina = 1;
                for($i=0;$i<$contador;$i++){
                  if($i%$numero==0){ ?>
                    <li class="imgpag">
                      <a class="aimgpag" href="#" id="<?php echo $alias; ?><?php echo $i + 1; ?>"><?php echo $pagina++; ?></a>
                    </li>
              <?php
                  }
                }
              ?>
              <li class="imgpag"><a href="#">&raquo;</a></li>
            </ul>
      </div>

    </div>

    <div class="cont-pers" id="contpers">
      <?php
        $directory="img/Productos/AL-PERSONALIZADOS";
        $dirint = dir($directory);
        $contador = 0;
        $alias = 'pe';
        while (($archivo = $dirint->read()) !== false)
        {
          if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            $contador = $contador + 1;

      ?>
      <div class="container" id="<?php echo "$alias$contador"; ?>">

        <form class="" action="php/form.php" method="post">

          <img id="imga" alt="" class="img-responsive img-thumbnail2 zoomify" src="<?php echo "$directory/$archivo"; ?>" />
          <?php
            $codigo = substr("$archivo", 0, 4);
            $precio = substr("$archivo", 5, 3);
            if (substr("$precio", 0, 1) == 0) {
              $precio = substr("$archivo", 6, 2);
            }
           ?>
          <h6>Codigo: <?php echo "$codigo"; ?></h6>
          <h6>Precio: $ <?php echo "$precio"; ?></h6>

          <input type="hidden" name="image" value="<?php echo "$directory/$archivo"; ?>">
          <input type="hidden" name="cod-img" value="<?php echo "$archivo"; ?>">
          <button class="btn-verde" type="" name="button">Consultar</button>

        </form>

      </div>
      <?php
          }
        }
        $dirint->close();
      ?>

      <div class="container-pagination">
            <ul class="ppp">
              <li class="imgpag"><a href="#">&laquo;</a></li>
              <?php
                $numero = 10;
                $pagina = 1;
                for($i=0;$i<$contador;$i++){
                  if($i%$numero==0){ ?>
                    <li class="imgpag">
                      <a class="aimgpag" href="#" id="<?php echo $alias; ?><?php echo $i + 1; ?>"><?php echo $pagina++; ?></a>
                    </li>
              <?php
                  }
                }
              ?>
              <li class="imgpag"><a href="#">&raquo;</a></li>
            </ul>
      </div>

    </div>

    <div class="cont-futbol" id="contfutbol">
      <?php
        $directory="img/Productos/AL-FUTBOL";
        $dirint = dir($directory);
        $contador = 0;
        $alias = 'fu';
        while (($archivo = $dirint->read()) !== false)
        {
          if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            $contador = $contador + 1;

      ?>
      <div class="container" id="<?php echo "$alias$contador"; ?>">

        <form class="" action="php/form.php" method="post">

          <img id="imga" alt="" class="img-responsive img-thumbnail2 zoomify" src="<?php echo "$directory/$archivo"; ?>" />
          <?php
            $codigo = substr("$archivo", 0, 4);
            $precio = substr("$archivo", 5, 3);
            if (substr("$precio", 0, 1) == 0) {
              $precio = substr("$archivo", 6, 2);
            }
           ?>
          <h6>Codigo: <?php echo "$codigo"; ?></h6>
          <h6>Precio: $ <?php echo "$precio"; ?></h6>

          <input type="hidden" name="image" value="<?php echo "$directory/$archivo"; ?>">
          <input type="hidden" name="cod-img" value="<?php echo "$archivo"; ?>">
          <button class="btn-verde" type="" name="button">Consultar</button>

        </form>

      </div>
      <?php
          }
        }
        $dirint->close();
      ?>

      <div class="container-pagination">
            <ul class="ppp">
              <li class="imgpag"><a href="#">&laquo;</a></li>
              <?php
                $numero = 10;
                $pagina = 1;
                for($i=0;$i<$contador;$i++){
                  if($i%$numero==0){ ?>
                    <li class="imgpag">
                      <a class="aimgpag" href="#" id="<?php echo $alias; ?><?php echo $i + 1; ?>"><?php echo $pagina++; ?></a>
                    </li>
              <?php
                  }
                }
              ?>
              <li class="imgpag"><a href="#">&raquo;</a></li>
            </ul>
      </div>

    </div>

    <div class="cont-infant" id="continfant">
      <?php
        $directory="img/Productos/AL-INFANTILES";
        $dirint = dir($directory);
        $contador = 0;
        $alias = 'in';
        while (($archivo = $dirint->read()) !== false)
        {
          if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            $contador = $contador + 1;

      ?>
      <div class="container" id="<?php echo "$alias$contador"; ?>">

        <form class="" action="php/form.php" method="post">

          <img id="imga" alt="" class="img-responsive img-thumbnail2 zoomify" src="<?php echo "$directory/$archivo"; ?>" />
          <?php
            $codigo = substr("$archivo", 0, 4);
            $precio = substr("$archivo", 5, 3);
            if (substr("$precio", 0, 1) == 0) {
              $precio = substr("$archivo", 6, 2);
            }
           ?>
          <h6>Codigo: <?php echo "$codigo"; ?></h6>
          <h6>Precio: $ <?php echo "$precio"; ?></h6>

          <input type="hidden" name="image" value="<?php echo "$directory/$archivo"; ?>">
          <input type="hidden" name="cod-img" value="<?php echo "$archivo"; ?>">
          <button class="btn-verde" type="" name="button">Consultar</button>

        </form>

      </div>
      <?php
          }
        }
        $dirint->close();
      ?>

      <div class="container-pagination">
            <ul class="ppp">
              <li class="imgpag"><a href="#">&laquo;</a></li>
              <?php
                $numero = 10;
                $pagina = 1;
                for($i=0;$i<$contador;$i++){
                  if($i%$numero==0){ ?>
                    <li class="imgpag">
                      <a class="aimgpag" href="#" id="<?php echo $alias; ?><?php echo $i + 1; ?>"><?php echo $pagina++; ?></a>
                    </li>
              <?php
                  }
                }
              ?>
              <li class="imgpag"><a href="#">&raquo;</a></li>
            </ul>
      </div>

    </div>

    <div class="cont-roman" id="controman">
      <?php
        $directory="img/Productos/AL-ROMANTICOS";
        $dirint = dir($directory);
        $contador = 0;
        $alias = 'ro';
        while (($archivo = $dirint->read()) !== false)
        {
          if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            $contador = $contador + 1;

      ?>
      <div class="container" id="<?php echo "$alias$contador"; ?>">

        <form class="" action="php/form.php" method="post">

          <img id="imga" alt="" class="img-responsive img-thumbnail2 zoomify" src="<?php echo "$directory/$archivo"; ?>" />
          <?php
            $codigo = substr("$archivo", 0, 4);
            $precio = substr("$archivo", 5, 3);
            if (substr("$precio", 0, 1) == 0) {
              $precio = substr("$archivo", 6, 2);
            }
           ?>
          <h6>Codigo: <?php echo "$codigo"; ?></h6>
          <h6>Precio: $ <?php echo "$precio"; ?></h6>

          <input type="hidden" name="image" value="<?php echo "$directory/$archivo"; ?>">
          <input type="hidden" name="cod-img" value="<?php echo "$archivo"; ?>">
          <button class="btn-verde" type="" name="button">Consultar</button>

        </form>

      </div>
      <?php
          }
        }
        $dirint->close();
      ?>

      <div class="container-pagination">
            <ul class="ppp">
              <li class="imgpag"><a href="#">&laquo;</a></li>
              <?php
                $numero = 10;
                $pagina = 1;
                for($i=0;$i<$contador;$i++){
                  if($i%$numero==0){ ?>
                    <li class="imgpag">
                      <a class="aimgpag" href="#" id="<?php echo $alias; ?><?php echo $i + 1; ?>"><?php echo $pagina++; ?></a>
                    </li>
              <?php
                  }
                }
              ?>
              <li class="imgpag"><a href="#">&raquo;</a></li>
            </ul>
      </div>

    </div>

    <div class="cont-borda" id="contborda">
      <?php
        $directory="img/Productos/BORDADOS";
        $dirint = dir($directory);
        $contador = 0;
        $alias = 'bo';
        while (($archivo = $dirint->read()) !== false)
        {
          if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            $contador = $contador + 1;

      ?>
      <div class="container" id="<?php echo "$alias$contador"; ?>">

        <form class="" action="php/form.php" method="post">

          <img id="imga" alt="" class="img-responsive img-thumbnail2 zoomify" src="<?php echo "$directory/$archivo"; ?>" />
          <?php
            $codigo = substr("$archivo", 0, 4);
            $precio = substr("$archivo", 5, 3);
            if (substr("$precio", 0, 1) == 0) {
              $precio = substr("$archivo", 6, 2);
            }
           ?>
          <h6>Codigo: <?php echo "$codigo"; ?></h6>
          <h6>Precio: $ <?php echo "$precio"; ?></h6>

          <input type="hidden" name="image" value="<?php echo "$directory/$archivo"; ?>">
          <input type="hidden" name="cod-img" value="<?php echo "$archivo"; ?>">
          <button class="btn-verde" type="" name="button">Consultar</button>

        </form>

      </div>
      <?php
          }
        }
        $dirint->close();
      ?>

      <div class="container-pagination">
            <ul class="ppp">
              <li class="imgpag"><a href="#">&laquo;</a></li>
              <?php
                $numero = 10;
                $pagina = 1;
                for($i=0;$i<$contador;$i++){
                  if($i%$numero==0){ ?>
                    <li class="imgpag">
                      <a class="aimgpag" href="#" id="<?php echo $alias; ?><?php echo $i + 1; ?>"><?php echo $pagina++; ?></a>
                    </li>
              <?php
                  }
                }
              ?>
              <li class="imgpag"><a href="#">&raquo;</a></li>
            </ul>
      </div>

    </div>

    <div class="cont-varios" id="contvarios">
      <?php
        $directory="img/Productos/VARIOS";
        $dirint = dir($directory);
        $contador = 0;
        $alias = 'va';
        while (($archivo = $dirint->read()) !== false)
        {
          if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            $contador = $contador + 1;

      ?>
      <div class="container" id="<?php echo "$alias$contador"; ?>">

        <form class="" action="php/form.php" method="post">

          <img id="imga" alt="" class="img-responsive img-thumbnail2 zoomify" src="<?php echo "$directory/$archivo"; ?>" />
          <?php
            $codigo = substr("$archivo", 0, 4);
            $precio = substr("$archivo", 5, 3);
            if (substr("$precio", 0, 1) == 0) {
              $precio = substr("$archivo", 6, 2);
            }
           ?>
          <h6>Codigo: <?php echo "$codigo"; ?></h6>
          <h6>Precio: $ <?php echo "$precio"; ?></h6>

          <input type="hidden" name="image" value="<?php echo "$directory/$archivo"; ?>">
          <input type="hidden" name="cod-img" value="<?php echo "$archivo"; ?>">
          <button class="btn-verde" type="" name="button">Consultar</button>

        </form>

      </div>
      <?php
          }
        }
        $dirint->close();
      ?>

      <div class="container-pagination">
            <ul class="ppp">
              <li class="imgpag"><a href="#">&laquo;</a></li>
              <?php
                $numero = 10;
                $pagina = 1;
                for($i=0;$i<$contador;$i++){
                  if($i%$numero==0){ ?>
                    <li class="imgpag">
                      <a class="aimgpag" href="#" id="<?php echo $alias; ?><?php echo $i + 1; ?>"><?php echo $pagina++; ?></a>
                    </li>
              <?php
                  }
                }
              ?>
              <li class="imgpag"><a href="#">&raquo;</a></li>
            </ul>
      </div>

    </div>

    <div class="cont-fundas" id="contfundas">
      <?php
        $directory="img/Productos/AL-FUNDAS";
        $dirint = dir($directory);
        $contador = 0;
        $alias = 'fn';
        while (($archivo = $dirint->read()) !== false)
        {
          if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            $contador = $contador + 1;

      ?>
      <div class="container" id="<?php echo "$alias$contador"; ?>">

        <form class="" action="php/form.php" method="post">

          <img id="imga" alt="" class="img-responsive img-thumbnail2 zoomify" src="<?php echo "$directory/$archivo"; ?>" />
          <?php
            $codigo = substr("$archivo", 0, 4);
            $precio = substr("$archivo", 5, 3);
            if (substr("$precio", 0, 1) == 0) {
              $precio = substr("$archivo", 6, 2);
            }
           ?>
          <h6>Codigo: <?php echo "$codigo"; ?></h6>
          <h6>Precio: $ <?php echo "$precio"; ?></h6>

          <input type="hidden" name="image" value="<?php echo "$directory/$archivo"; ?>">
          <input type="hidden" name="cod-img" value="<?php echo "$archivo"; ?>">
          <button class="btn-verde" type="" name="button">Consultar</button>

        </form>

      </div>
      <?php
          }
        }
        $dirint->close();
      ?>

      <div class="container-pagination">
            <ul class="ppp">
              <li class="imgpag"><a href="#">&laquo;</a></li>
              <?php
                $numero = 10;
                $pagina = 1;
                for($i=0;$i<$contador;$i++){
                  if($i%$numero==0){ ?>
                    <li class="imgpag">
                      <a class="aimgpag" href="#" id="<?php echo $alias; ?><?php echo $i + 1; ?>"><?php echo $pagina++; ?></a>
                    </li>
              <?php
                  }
                }
              ?>
              <li class="imgpag"><a href="#">&raquo;</a></li>
            </ul>
      </div>

    </div>

    <div class="cont-perch" id="contperch">
      <?php
        $directory="img/Productos/PERCHEROS";
        $dirint = dir($directory);
        $contador = 0;
        $alias = 'pr';
        while (($archivo = $dirint->read()) !== false)
        {
          if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            $contador = $contador + 1;

      ?>
      <div class="container" id="<?php echo "$alias$contador"; ?>">

        <form class="" action="php/form.php" method="post">

          <img id="imga" alt="" class="img-responsive img-thumbnail2 zoomify" src="<?php echo "$directory/$archivo"; ?>" />
          <?php
            $codigo = substr("$archivo", 0, 4);
            $precio = substr("$archivo", 5, 3);
            if (substr("$precio", 0, 1) == 0) {
              $precio = substr("$archivo", 6, 2);
            }
           ?>
          <h6>Codigo: <?php echo "$codigo"; ?></h6>
          <h6>Precio: $ <?php echo "$precio"; ?></h6>

          <input type="hidden" name="image" value="<?php echo "$directory/$archivo"; ?>">
          <input type="hidden" name="cod-img" value="<?php echo "$archivo"; ?>">
          <button class="btn-verde" type="" name="button">Consultar</button>

        </form>

      </div>
      <?php
          }
        }
        $dirint->close();
      ?>

      <div class="container-pagination">
            <ul class="ppp">
              <li class="imgpag"><a href="#">&laquo;</a></li>
              <?php
                $numero = 10;
                $pagina = 1;
                for($i=0;$i<$contador;$i++){
                  if($i%$numero==0){ ?>
                    <li class="imgpag">
                      <a class="aimgpag" href="#" id="<?php echo $alias; ?><?php echo $i + 1; ?>"><?php echo $pagina++; ?></a>
                    </li>
              <?php
                  }
                }
              ?>
              <li class="imgpag"><a href="#">&raquo;</a></li>
            </ul>
      </div>

    </div>


    <footer>
    <div class="footer" id="footer">
        <ul class="redes">
          <li>
            <a href="https://www.facebook.com/LoverPeluches/" title="Facebook"><img src="img/facebook.png" alt=""></a>
          </li>
          <li>
            <a href="https://www.instagram.com/tienda.lover/" title="Instagram"><img src="img/instagram.png" alt=""></a>
          </li>
          <li>
            <a href="#" title="Twiter"><img src="img/twitter.png" alt=""></a>
          </li>
          <li>
            <a href="https://perfil.mercadolibre.com.ar/TIENDA.LOVER" title="MercadoLibre"><img src="img/mercadolibre.png" alt=""></a>
          </li>
          <li>
            <a href="form.html" title="Contacto"><img src="img/gmail.png" alt=""></a>
          </li>
        </ul>
        <p>© 2019 LoverPeluches. All Rights Reserved.</p>
    </div>
  </footer>

  <script>
    $('.zoomify').zoomify(); // Default settings
  </script>

  <script type="text/javascript">
        $('.aimgpag').on('click', function(e) {

          contenedores = document.getElementsByClassName('container');
          // console.log(contenedores);
          for (var i = 0; i < contenedores.length; i++) {
            contenedores[i].style.display = 'none';
          }


          numreg = $(this).attr('id').substr(2);
          codreg = $(this).attr('id').substr(0,2);
          // console.log(numreg);
          // console.log(codreg);
          // console.log($(this).attr('id'));
          tot = Number(numreg) + 10;


          for (var i = numreg; i < tot; i++) {
            divview = document.getElementById(codreg+i);
            if (divview!=null){
              divview.style.display = 'block';
            }
          }
        });
  </script>

  <script src="js/mi-scripts.js"></script>

  </body>

</html>
