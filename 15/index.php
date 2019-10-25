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
            // Indexado
            $tecnologias=array('css', 'html', 'Javascript', 'jQuery');
            
          ?>

          <h2>Lenguajes que Conozco</h2>
          <ul>
          
          <!-- El foreach sirve para recorrer el arreglo -->
          <?php foreach($tecnologias as $tecnologia): ?>
            <li><?php echo $tecnologia; ?></li>
          <?php endforeach ?>
          </ul>


          Array asociativo
          <?php 
            $persona=array(
              'nombre'=>'Juan',
              'pais'=>'Mexico',
              'profesion'=>'Desarrollador Web'
            );
          ?>

          <h2>Datos Personales</h2>
          <ul>
            <?php foreach($persona as $key => $val): ?>
              <li><?php echo $key . ': ' . $val ?></li>
            <?php endforeach ?>
          </ul>

          <br>

          <h2>Datos Personales</h2>
          <ul>
            <?php foreach($persona as $val): ?>
              <li><?php echo $val ?></li>
            <?php endforeach ?>
          </ul>


        </div>
    </div>




  </body>
</html>
