# ActionLog App

Esta aplicación captura información de cada controlador una vez que el usuario realiza una acción, como iniciar sesión o registrarse, esto se almacena en una tabla para el consumo y la mejora por nosotros, los desarrolladores. Puedes reutilizarla tanto como quieras.

## Requisitos previos

- PHP >= 7.4
- Composer
- MySQL
- Node.js y npm (o Yarn)

## Instalación

1. Clona el repositorio o descarga el código fuente:


2. Accede al directorio del proyecto:
 ```
 cd /actionLog
 ```

3. Instala las dependencias de PHP utilizando Composer:
 ```
 composer install
 ```

4. Crea una copia del archivo de configuración de entorno `.env`:
 ```
 cp .env.example .env
 ```

5. Genera una nueva clave de aplicación:
 ```
 php artisan key:generate
 ```

6. Configura la conexión a la base de datos en el archivo `.env`:
 ```
 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=nombre_de_la_base_de_datos
 DB_USERNAME=usuario
 DB_PASSWORD=contraseña
 ```

7. Ejecuta las migraciones de la base de datos:
 ```
 php artisan migrate
 ```

8. Instala las dependencias de JavaScript utilizando npm o Yarn:
 ```
 npm install
 ```
 o
 ```
 yarn install
 ```

9. Compila los assets:
 ```
 npm run dev
 ```
 o
 ```
 yarn dev
 ```

10. Inicia el servidor de desarrollo:

 ```
 php artisan serve
 ```

11. Accede a la aplicación en tu navegador web:

 ```
 http://localhost:8000
 ```

## Capturas de pantalla

### Pantalla principal
![Pantalla principal](screenshots/Captura%20desde%202024-08-29%2023-37-12.png)

### Pantalla registro
![Pantalla registro](screenshots/Captura%20desde%202024-08-29%2023-37-22.png)

### Pantalla iniciar
![Pantalla iniciar](screenshots/Captura%20desde%202024-08-29%2023-37-34.png)

### Pantalla dashboard
![Pantalla dashboard](screenshots/Captura%20desde%202024-08-29%2023-37-54.png)

### Pantalla logs
![Pantalla logs](screenshots/Captura%20desde%202024-08-29%2023-38-05.png)

### Pantalla logs
![Pantalla logs](screenshots/Captura%20desde%202024-08-29%2023-38-19.png)