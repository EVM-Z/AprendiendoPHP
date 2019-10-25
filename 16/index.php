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
            $persona=array(
              'datos'=>array(
                'nombre'=>'Eliseo',
                'pais'=>'Mexico',
                'profesion'=>'Desarrollador Web'
            ),
              'lenguajes'=>array(
                'frontend'=>array('css', 'html5', 'javascript', 'jquery'),
                'backend'=>array('php', 'mysql', 'python')
              )
            );
        ?>

        <h2>Foreach arreglos Multidimensionales</h2>
        <ul>
            <?php foreach($persona['datos'] as $person): ?>
              <li><?php echo $person; ?></li>
            <?php endforeach; ?>

            <?php foreach($persona as $leng): ?>
                <?php if(array_key_exists('frontend', $leng)): ?>
                    <h2>Lenguajes de FrontEnd</h2>
                    <?php foreach($leng['frontend'] as $front): ?>
                        <li><?php echo $front; ?></li>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if(array_key_exists('backend', $leng)): ?>
                    <h2>Lenguajes de Backend</h2>
                    <?php foreach($leng['backend'] as $back): ?>
                        <li><?php echo $back; ?></li>
                    <?php endforeach; ?>
                <?php endif; ?>


            <?php endforeach; ?>
        </ul>


        </div>
    </div>




  </body>
</html>
