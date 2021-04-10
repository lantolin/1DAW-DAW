#!/usr/bin/php
<?php
 echo 'Content-type: text/plain

Hola, Mundo soy un script de PHP.
';  

// importantes diferencias con la ejecucion con mod_php que veremos despues
// 1. el fichero necesita cumplir con todo lo necesario para que el S.O lo ejecute
//  1a. permisos
//  1b. la línea #!/interprete
// 2. tiene que cumplir con el estandar CGI y mandar el content-type

// Cuando veamos mod_php esto ya no es necesario
?>

