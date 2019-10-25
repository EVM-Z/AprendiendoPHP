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
            // Estos array no se enumeran como el indexado
              $persona=array(
                      'datos'=>array(
                        'nombre'=>'Juan',
                        'pais'=>'Mexico',
                        'profesion'=>'Desarrollador Web'
                      ),
                      'lenguajes'=>array(
                        'fontend'=>array('css', 'html5', 'javacript', 'jquery'),
                        'backend'=>array('php', 'mysql', 'python')
                      )
              );
            ?>

            <!-- Imprimimos el arreglo -->
            <pre>
              <?php print_r($persona); ?>
            </pre>

            <br>

            <!-- Accedemos a una seccion del arreglo -->
            <pre>
              <?php print_r($persona['lenguajes']); ?>
            </pre>



        </div>
    </div>




  </body>
</html>
