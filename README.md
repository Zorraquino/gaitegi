# Gaitegi Laravel

Documentación Laravel
<https://laravel.com/docs/11.x>

## DEVELOPMENT

Para desarrollo, ejecutar el siguiente comando, se desplegará en <http://127.0.0.1:8000> y se activa un watch.

`composer run dev`

Para simplemente hacer un build de los assets:

`npm run build`

Para iniciar un servidor sin watch:

`php artisan serve`

## DESPLIEGUE

Ya está el servidor de Gaitegi configurado para que al realizar un push a la rama main, se realice el despliegue automáticamente en el servidor.
En este momento es accesible desde <https://gaitegi.com/dev/public>

A la hora de configurar para producción habrá que acceder al Plesk, y poner bien la ruta y el entorno.
