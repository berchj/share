<?php include 'conexion.php' ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
<link rel="stylesheet" href="css/foundation.min.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="foundation-icons/foundation-icons.css">
</head>
<body>
<header>
  <div data-sticky-container>
<div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
  <div class="tittle-bar-tittle">Menu</div>
</div>

<div class="top-bar" data-sticky data-margin-top="0" id="responsive-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li id='title' class="menu-text tittle">El secreto del alba</li>
      <li class="has-submenu">
         <a href="">Social</a>
        <ul class="submenu menu vertical" data-submenu>
          <li><a href="https://twitter.com/Berchj1" target="_blank">Twitter <i class="step fi-social-twitter size-30"></i></a></li>
          <li><a href="https://www.facebook.com/Elsecretodelalba/" target="_blank" >Facebook <i class="step fi-social-facebook size-30"></i></a></li>
          <li><a href="https://www.instagram.com/elsecretodelalba/" target="_blank">Instagram <i class="step fi-social-instagram size-30"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCX9567ZEXn9E2Sn6l51dk6w?fbclid=IwAR2LOGm1dz8edDWxXJhG1UGdM_DoDRCMB4BCVhOHOVaBrlQqSbMNNEJ0iOs" target="_blank">Youtube <i class="step fi-social-youtube size-30"></i></a></li>
        </ul>
      </li>
      <li><a class="show-for-large" href="mailto:Juliobermudezch@gmail.com">Contacto <i class="step fi-mail size-16"></i></a></li>
      <li class=""><a href="videos.php"><i class="step fi-play-circle size-16"></i></a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="EJ:Ocultismo" required/></li>
      <li><button type="button" class="button">Buscar</button></li>
    </ul>
  </div>
</div>
</div>
</header><br>

<div class="row align-center hide-for-small-only">
  
  <img id="logo" src="images/logo.jpg"/>

</div>

<div class="row align-center show-for-small-only">
  
  <img id="logo" src="images/logo.jpg"/>

</div>




<div id="button-group" class="row column">
    
    <div class="button-group expanded stacked-for-small">
      <a class="button">Ovnis</a>
      <a class="button">Paranormal</a>
      <a class="button">Ocultismo</a>
      <a class="button">Conspiracion</a>
    </div>
</div>

<div class="row">
  <div class="callout secondary large-8 medium-12 small-12 column">
    
    <div class="callout primary">
      <h5>Ovni</h5>
        <img src="images/ovni.jpg"><br>
        <dl>
          <br>
          
          <dd>nombre masculino
              Objeto volador de origen y naturaleza desconocidos;
               se aplica especialmente a las naves 
              espaciales de procedencia supuestamente extraterrestre.</dd>
        </dl>
        <br>
        <a class="tiny button" href="">Leer mas...</a>

    </div>
    <div class="callout primary">
      <dl>
      <h5>La demonologia explicada Ft. Stefany Molina.</h5>
      <img src="images/episodio1.jpg"><br><br>
      <dd> - Primer episodio del podcast del secreto del alba, el tema de es acerca de la rama de la teologia 
          mas polemica de la historia; la demonologia.
          Explicaremos de manera general de que trata con un poco de humor y anecdotas relacionadas:
      <br><br>
          <iframe id='audio_47468410' frameborder='0' allowfullscreen='' scrolling='no' height='200' src='https://ar.ivoox.com/es/player_ej_47468410_4_1.html?c1=7c12a3' style='border:1px solid #EEE; box-sizing:border-box; width:100%;'></iframe>
        
       <br><br>   
          Apoyanos en Patreon para poder hacer este proyecto autosustentable:

          <br><br>

          <a target="_blank" href='https://www.patreon.com/user?u=30816574' class='button'>DONAR</a>
          <br>
          COMENTA: 
          <br>
          <form action='' method='POST'>
          <input type='text' name='usuario' placeholder='Escribe tu nombre'><br><br>
          <input type='text' name='comentario' placeholder='Escribe tu comentario'><br>
          <input type='submit' name='enviar' value='Enviar.'>
          </form>

          <?php
          $consulta1 = mysqli_query($conexion, 'SELECT * FROM comments')or die(mysqli_error($conexion));
          while ($row = mysqli_fetch_assoc($consulta1)){
            echo '<div class="comentarios">'.$row['name'].':<br><br>'.$row['comment'].'</div>';
          }
          ?>

          

          <?php
          
            if(isset($_POST['enviar'])){
              $usuario = utf8_decode(mysqli_real_escape_string($conexion, $_POST['usuario']));
              $comentario = utf8_decode(mysqli_real_escape_string($conexion, $_POST['comentario']));
              if($usuario == '' or $comentario == '' ){
                echo 'lo sentimos tienen que estar completos los campos...';

              }else{
                $insertar = mysqli_query($conexion,"INSERT INTO comments (name,comment) VALUES ('".$usuario."','".$comentario."')")or die(mysqli_error($conexion));
              echo '<br>el comentario se envio';              
              }
            }
          
          ?>
      
        
          
          
        </dd>
      </dl>
      <br>
     

  </div>

  </div>
  <div class="callout primary large-3 large-offset-1 column hide-for-medium-only hide-for-small-only">
    <form>
      <fieldset class="fieldset">
      <label>Para nuestro Feed:
        <input type="email" placeholder="Email" required/>
        <input type="submit" class="tiny button">
      </label>
    </fieldset>
    </form>
  </div>

</div>
 




<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
