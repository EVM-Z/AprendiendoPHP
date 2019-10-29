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
          // Agregamos valores por defecto
            function usuario($nombre='Joe', $tel='000'){
              echo $contacto=$nombre . " " . $tel;
            }

            $usuario=usuario('Eliseo', '123');
            echo $usuario;
            echo "<hr>";

            $usuario2=usuario("Miguel");
            echo $usuario2;
          ?>

        </div>
    </div>




  </body>
</html>
