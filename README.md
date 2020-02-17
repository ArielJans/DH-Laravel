# DH-Laravel
Proyecto Digital House con Laravel
QuestionRace

1- Clonar repositorio para tener el proyecto instalado de manera local. Ubicados en la ruta del proyecto ejecutar el comando:

composer install

2- Crear Base de Datos llamada "questionrace" o importaría al directorio con preguntas

Desde consola o desde phpMyAdmin.

3- Chequear que en el archivo .env figure correctamente el nombre de la base de datos para su conexion.

4- Correr los siguientes comandos:

php artisan key:generate

php artisan migrate(para crear las tablas) 

php artisan db:seed (Genera usuario Administrador para interactuar con el Panel de Control)

php artisan storage:link

php artisan serve

DATOS DE ACCESO COMO ADMINISTRADOR

Email: administrador@questionrace.com Password: questionrace1234

5- Inicializar programa que oficie de servidor local (por ejemplo XAMPP)

6- Abrir el navegador e ingresar a la ruta

localhost:8000

7- De haber importado base de datos vacía cargar algunas preguntas con sus respectivas respuestas para probar funcionalidad.



