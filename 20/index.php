<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>
        <div class="contenido">

          <?php
            function usuario($nombre, $tel){
              echo $nombre . "<br>";
              echo $tel . "<br>";
              echo "<hr>";
            }

            usuario('Pepe', '123');
            usuario('Miguel', '234');
            usuario('Eliseo', '345');
          ?>

        </div>
    </div>




  </body>
</html>
