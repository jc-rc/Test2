<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<!--Make it Responsive-->
<meta name="viewport" content="width=devicewidth, initial-scale=1.0, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--Load favicons-->
<link rel="icon" href="images/tufavicon48.png" type="image/png"/>
<link rel="shortcut icon" href="images/tufavicon48.png" type="image/png"/>
<!--Our CSS file-->
<link href="styles.css" rel="stylesheet" type="text/css"/>
<!--Useful Icons / Font Awesome--> 
<script src="https://kit.fontawesome.com/0a8f473504.js" crossorigin="anonymous"></script> 
<!--Title-->
<title>Prueba de PHP</title>
<!--Description-->
<meta name="description" content="150 characters">
</head>
<body>
<div class="container">
  <div class="formulario">
    <h1>Prueba de Formulario</h1>
    <form method="post" action="index.php">
      <input name="var1" type="text" autofocus="autofocus" required="required" placeholder="Inserte texto aquí...">
      <input type="submit" name="submit" value="¿Qué pasará?">
    </form>
    <hr>
      
    <?php
    if ( isset( $_POST[ "submit" ] ) ) {
      $texto = $_POST[ "var1" ];
        echo "<div class='appear'>El texto ingresado fue: $texto.</div>";
        echo "<div><img src='images/$texto.png' alt='Escribe logo para verme'></div>";
    }

    ?>
  </div>
</div>
</body>
</html>