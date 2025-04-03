#!/usr/bin/php
Content-type: text/html

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <?php
    # mod_cgi no rellena $_GET (mod_php si lo hace), por tanto 
    # hay que hacerlo a mano
    parse_str(getenv('QUERY_STRING'),$_GET); 
    $nombre=$_GET['nombre'];
    $server=$_SERVER['SERVER_SOFTWARE'];
    $ip=$_SERVER['REMOTE_ADDR'];
    ?>

  <h1>Hola mundo y hola persona</h1>
  <p>A las buenas tardes, que sepas que estás usando el servidor <code>[<?php echo $server ?>]</code> y tu IP es: <code>[<?php echo $ip ?>]</code> </p>
  <p>Si quieres que te salude enviame tu nombre en el parametro  <code>nombre</code> de la URL Query </p>
  <p>Hola 
<strong><?php echo $nombre ?></strong>, ¿como te va?
</body>
</html>

