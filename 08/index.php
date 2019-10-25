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
            $lenguaje="JavaScript";

            switch($lenguaje){
              case 'PHP':
                echo "BackEnd";
                break;
              case 'JavaScript':
                echo "FrontEnd y BackEnd (NodeJS)";
                break;
              case 'HTML5':
                echo "FrontEnd";
                break;
              default:
                echo "No valido";
                break;

            }


            ?>
            


        </div>
    </div>




  </body>
</html>
