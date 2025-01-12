Este proyecto lo cree mientras investigaba la mejor manera de enseñar una intro a la creación
de Servlets y JSP.

TLDR; abandonado en el curso 23-24, no voy a usar este estilo, solo lo conservo por si acaso

Explicación larga:


# Desarrollar JEE en Eclipse
Dos maneras: 
  - estilo-eclipse creando un Dynamic Web Project (DWP) con eclipse
  - estilo-maven creando un Maven Project con org.apache.maven.archetypes maven-archetype-webapp 1.4

Comparación:

- DWP
    - Hay mas "ayudas" de eclipse que funcionan, por ejemplo doble click en los servlets en el Deployment Descriptor te lleva al servlet directo
    - Usa Un Deployment Descriptor 4.0 en vez de 2.3
    - OJO en el proyecto hay que añadir Facet | Dynamic | y activar el runtime de Tomcat , para que Eclipse se entere de que tiene que meter las dependencias de Servlet, etc
- Maven
    - No dependes de eclipse y seria facil llevartelo a otro IDE
    - Construir el WAR es automatico, en DWP o usas "Export as ... WAR" o tienes que crear una tarea ANT
    - OJO hay que añadir la dependencia tomcat7 org.apache.tomcat  tomcat-servlet-api (quiza alguna mas como JSTL)
    - pendiente-investigar: ahora que esta la dependencia, añadir el plugin tomcat7 para despliegue, y asi "librarse" del server local en Eclipse, todo mas portable

Ambos: el despliegue en servidor local funciona bien

Cosas que no han funcionado: desplegar las apps que trae Tomcat por defecto (manager) en el servidor local eclipse

Me quedo con el estilo Maven. Conservo el proyecto DWP en el repo por si acaso.