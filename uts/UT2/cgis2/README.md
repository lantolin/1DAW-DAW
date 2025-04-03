Directorio de demo de CGIs para el material WEBSERV.08 Contenido Dinámico

Este directorio de CGIs para funcionar requiere:

- Que esté activado mod_cgi (o alguna variante compatible)
- Que NO esté activado mod_php (podría estarlo, pero pueden entrar en conflicto, para este ejemplo mejor mantenerlo sencillo)
- Que haya un `ScriptAlias` similar al del ejemplo

```
ScriptAlias /cgi2/ /srv/1DAW-DAW/uts/UT2/cgis2/
<Directory "/srv/1DAW-DAW/uts/UT2/cgis2">
        AllowOverride None
        Require all granted
</Directory>
```

También se usa para explicar la transición y la diferencia entre `mod_cgi` y `mod_php`, para eso hay que desactivar el 1o, activar el 2o y usar `hola-nombre-mod.php`

Está hecho de modo que funcione `hola-nombre-cgi.php` con `mod_cgi` activado y `mod_php` desactivado, y viceversa. Las otras combinaciones no funcionarán. Bueno en realidad `hola-nombre-cgi.php` con `mod_php` si funcionará pero mostrará el `#!/usr/bin/php` y el `Content-type: text/html`