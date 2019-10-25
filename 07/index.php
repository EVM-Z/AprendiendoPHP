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
            
            <!-- Solo PHP -->
            <?php
            if(1<2){
              echo "1 es menor";
            }
            else{
              echo "1 es mayor";
            }
            echo "<hr>";

            $edad1=13;
            $edad2=12;
            if($edad1 < $edad2){
              echo "La edad 1 es mayor";
            }
            else if($edad1 == $edad2){
              echo "Son iguales";
            }
            else{
              echo "La edad 2 es menor";
            }
            echo "<hr>";

            $numero1=10;
            if($numero1 % 2 == 0){
              echo "El numero es par";
            }
            else{
              echo "El numero es impar";
            }
            ?>
            


        </div>
    </div>




  </body>
</html>
