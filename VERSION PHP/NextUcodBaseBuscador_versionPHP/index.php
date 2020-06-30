<?php
CONST CIUDADES = array('New York','Orlando','Los Angeles','Houston','Washington','Miami');
CONST TIPOS = array('Casa','Casa de Campo','Apartamento');
 ?>

<!DOCTYPE html>
<!-- Inicio Idioma -->
<html class="no-js" lang="es-ES" xml:lang="es" data-textdirection="ltr" dir="ltr" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" data-reactroot="">
<!-- /Fin Idioma -->
<head>
    <!-- Inicio Las metaetiquetas requeridas siempre son lo primero -->
    <meta charset="utf-8">
    <meta data-rh="true" id="meta-charset" charset="utf-8">
    <meta data-rh="true" id="meta-http-content-type" http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta data-rh="true" id="meta-http-ua-compatible" http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- /Fin Las metaetiquetas requeridas siempre son lo primero -->
    <!-- Inicio Sitio -->
    <title data-rh="true">Base de Buscador® con PHP Next_U</title>
    <meta data-rh="true" id="meta-og-title" property="og:title" content="Base de Buscador® con PHP Next_U">
    <meta data-rh="true" id="meta-og-description" property="og:description" content="Base de Buscador® con PHP Next_U" />
    <meta data-rh="true" id="meta-og-site_name" property="og:site_name" content="Base de Buscador® con PHP Next_U" />
    <!-- /Fin Sitio -->
    <!-- Inicio Icono --><!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="img/ico/search.ico"/>
    <!-- /Fin Icono -->
    <meta name="author" content="Lino Adrián Páez Reyes">
    <meta name="keywords" content="Base de Buscador® con PHP Next_U,Lino,Adrián,Páez,Reyes">
    <meta name="description" content="Base de Buscador® con PHP Next_U">
    <meta &#64; CopyRight Base de Buscador® con PHP Next_U; Todos los derechos reservados&#46;>

  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/customColors.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/index.css"  media="screen,projection"/>
  
</head>

<body>
  <video src="img/video.mp4" id="vidFondo"></video>

  <div class="contenedor">
    <div class="card rowTitulo">
      <h1>Buscador</h1>
    </div>
    <div class="colFiltros">
      <form action="searcher.php" method="post" id="formulario">
        <div class="filtrosContenido">
          <div class="tituloFiltros">
            <h5>Realiza una búsqueda personalizada</h5>
          </div>
          <div class="filtroCiudad input-field">
            <label for="selectCiudad">Ciudad:</label>
            <select name="ciudad" id="selectCiudad">
              <option value="" selected>Elige una ciudad</option>
              <?php foreach (CIUDADES as $key => $value) {?>
                <option value="<?php echo $value ?>"><?php echo $value ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="filtroTipo input-field">
            <label for="selecTipo">Tipo:</label><br>
            <select name="tipo" id="selectTipo">
              <option value="" selected>Elige un Tipo</option>
              <?php foreach (TIPOS as $key => $value) {?>
                <option value="<?php echo $value ?>"><?php echo $value ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="filtroPrecio">
            <label for="rangoPrecio">Precio:</label>
            <input type="text" id="rangoPrecio" name="precio" value="" />
          </div>
          <div class="botonField">
            <input type="submit" class="btn white" value="Buscar" id="submitButton">
          </div>
        </div>
      </form>

      <div class="tituloFiltros">
        <ul class="menu">
          <li class="align-self-middle" style="color:white;">Lino Adrián Páez Reyes &#124;</li>
          <li><a href="#" style="color:white;">Bogotá D.C., Colombia &#124;</a></li>
          <li><a href="#" style="color:white;">Next_U &#124;</a></li>
          <li><a href="#" style="color:white;">Todos los derechos reservados.</a></li>
        </ul>
      </div>
    </div>

    <div class="colContenido">
      <div class="tituloContenido card">
        <h5>Resultados de la búsqueda:</h5>
        <div class="row">
          <div class="col s8 offset-s4" id="miColumna">

          </div>
        </div>
        <div class="divider" id="division"></div>
        <div class="row" id="resultados">
            <!--Aqui van mis resultados-->
        </div><!--row-->

            <button type="button" name="todos" class="btn-flat waves-effect" id="mostrarTodos">Mostrar Todos</button>


      </div>
    </div>
  </div>

  <script type="text/javascript" src="js/jquery-3.0.0.js"></script>
  <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
</body>
</html>
