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
            $tecnologias=array('css', 'html', 'Javascript', 'jQuery');
            // Verificamos si un elemento existe en el array
            // in_array toma array indexados
            $existe=in_array('html', $tecnologias);
          ?>

          <pre>
            <?php var_dump($existe); ?>
          </pre>
            
          <?php
            $persona=array(
              'nombre'=>'Eliseo',
              'pais'=>'Mexico',
              'profesion'=>'Desarrollador Web'
            );
          ?>


          <!-- Con array_values conviertes asociativo a uno indexado - con valores en cada elemento -->
          <?php $existe2=in_array('Eliseo', array_values($persona)); ?>

          <pre>
            <?php var_dump($existe2); ?>
          </pre>


        </div>
    </div>




  </body>
</html>
