<?php

$comment = '';

if ($_POST) {
  // echo'<pre>';
  // print_r($_POST);
  // echo'</pre>';

  $comment = $_POST['cod-img'];
  $img = $_POST['image'];

  $var_codigo = substr("$comment", 0, 4);
  $var_precio = substr("$comment", 5, 3);
  if (substr("$var_precio", 0, 1) == 0) {
    $var_precio = substr("$comment", 6, 2);
  }
}

 ?>
<!DOCTYPE>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lover Peluches</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="../js/jquery-3.3.1.min.js" charset="utf-8"></script>
    <script src="../js/jquery.mobile-1.4.5.min.js" charset="utf-8"></script>

    <script  src = "../js/zoomify.js " ></script>
    <link  href = "../css/zoomify.css"  rel = " hoja de estilo " >

    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/styles-form.css">

  </head>
  <body onload="FunMostrar()">
    <header>
      <nav class="navegation">
        <div >
            <img class="imgcab" src="../img/LOVERPELUCHES.png" alt="" title=""/>
        </div>
        <ul class="menu">
          <li>
            <a id="inicio-menu" href="../index.php">
              <img src="../img/home.png" alt="">
            </a>
          </li>
          <li>
            <a id="nosotros-menu" href="nosotros.php">NOSOTROS</a>
          </li>
          <li>
            <a id="productos-menu" href="../product.php">PRODUCTOS</a>
          </li>
          <li>
            <a id="contacto-menu" href="form.php">CONTACTO</a>
          </li>
        </ul>
      </nav>
    </header>

    <div class="whatsapp">
      <ul class="ul-img-whatsapp">
        <li class="li-img-whatsapp">
          <a href="https://wa.me/541159394667?text=Me%20gustaría%20comunicarme%20con%20ustedes">
            <img class="img-whatsapp" src="../img/Whatsapp-Icon_33936.png" alt="">
            <p class="p-consulta">Envianos tu Consulta!</p>
          </a>
        </li>
        <li class="li-img-whatsapp">
          <a href="https://www.facebook.com/LoverPeluches/" title="Facebook"><img class="img-redes" src="../img/facebook64x64.png" alt=""></a>
        </li>
        <li class="li-img-whatsapp">
          <a href="https://www.instagram.com/tienda.lover/" title="Instagram"><img class="img-redes" src="../img/instagram64x64.png" alt=""></a>
        </li>
        <li class="li-img-whatsapp">
          <a href="#" title="Twiter"><img class="img-redes" src="../img/twiter64x64.png" alt=""></a>
        </li>
        <li class="li-img-whatsapp">
            <a href="https://perfil.mercadolibre.com.ar/TIENDA.LOVER" title="MercadoLibre"><img class="img-redes" src="../img/mercadolibre64x64.png" alt=""></a>
        </li>
      </ul>
    </div>

    <div class="contacto" id="contacto-datos">

    <!-- <script src="https://www.powr.io/powr.js?platform=html"></script><div class="powr-comments" id="e2693675_1556547553"></div> -->

    <script src="https://www.powr.io/powr.js?platform=html"></script><div class="powr-form-builder" id="97b42f0c_1556559879"></div>

    <?php if ($_POST) { ?>
      <div class="container-form">
        <a href="#">
          <img class="img-responsive img-thumbnail2 zoomify"src="../<?php echo "$img"; ?>" alt="">
          <h6>Cod: <?php echo "$var_codigo"; ?></h6>
          <h6>Precio: $ <?php echo "$var_precio"; ?></h6>
        </a>
      </div>
    <?php } ?>


    </div>

    <footer>
      <div class="footer" id="footer">
          <ul class="redes">
            <li>
              <a href="https://www.facebook.com/LoverPeluches/" title="Facebook"><img src="../img/facebook.png" alt=""></a>
            </li>
            <li>
              <a href="https://www.instagram.com/tienda.lover/" title="Instagram"><img src="../img/instagram.png" alt=""></a>
            </li>
            <li>
              <a href="#" title="Twiter"><img src="../img/twitter.png" alt=""></a>
            </li>
            <li>
              <a href="https://perfil.mercadolibre.com.ar/TIENDA.LOVER" title="MercadoLibre"><img src="../img/mercadolibre.png" alt=""></a>
            </li>
          </ul>
          <p>© 2019 LoverPeluches. All Rights Reserved.</p>
      </div>
    </footer>

    <script>
      $('.zoomify').zoomify(); // Default settings
    </script>

    <script type="text/javascript">
          var contform = document.querySelector('.container-form');
          function FunMostrar (){
            setTimeout (function(){
              contform.style.display = 'block';
            },3000)
          }
    </script>

    <script src="../js/mi-scripts.js"></script>

  </body>
</html>
