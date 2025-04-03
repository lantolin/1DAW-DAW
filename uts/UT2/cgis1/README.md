Directorio de demo de CGIs para el material WEBSERV.08 Contenido Dinámico

Este directorio esta bajo el control de GIT, en el repo publico de 1DAW-DAW

No se pueden listar sus contenidos, eso es intencionado, por seguridad. Para ejecutar un CGI tienes que conocer su nombre
De hecho con la configuracion tan simple de un solo ScriptAlias no se puede tener un index.html porque intenta ejecutarlo y da un 500.

Este directorio de CGIs para funcionar requiere:

- Que esté activado mod_cgi (o alguna variante compatible)
- Que NO esté activado mod_php (podría estarlo, pero pueden entrar en conflicto, para este ejemplo mejor mantenerlo sencillo)
- Que haya un `ScriptAlias` similar al del ejemplo

```
ScriptAlias /cgi1/ /srv/1DAW-DAW/uts/UT2/cgis1/
<Directory "/srv/1DAW-DAW/uts/UT2/cgis1">
        AllowOverride None
        Require all granted
</Directory>
```