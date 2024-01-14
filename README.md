# SymfonyApp - Guía de Instalación

¡Bienvenido a SymfonyApp! A continuación, te proporcionamos una guía detallada para instalar y configurar la aplicación en tu entorno local.

## Requisitos

Asegúrate de tener instalados los siguientes requisitos antes de proceder:

- [XAMPP](https://www.apachefriends.org/es/index.html): Paquete que incluye Apache, MySQL, PHP y Perl para simplificar la creación y gestión de entornos de desarrollo local.
- [Symfony 7](https://symfony.com/download): Framework PHP utilizado para desarrollar la aplicación.
- [Composer](https://getcomposer.org/download/): Administrador de dependencias para PHP.

## Pasos de Instalación

### Paso 1: Clonar el Repositorio

Abre una terminal y navega a la carpeta `htdocs` de tu instalación de XAMPP.

```bash
git clone https://github.com/Ferran05/SymfonyApp.git
```
   Esto copiará el contenido de este repositorio en la carpeta.

### Paso 2: Siguiendo en la terminal de la carpeta creada utiliza este comando para instalar las dependencias necesarias:
```bash
   composer install
```
   Esto instalará todas las dependencias del archivo `composer.json`

### Paso 3: Instalar la Base de Datos
En la carpeta de la aplicación, encontrarás la base de datos necesaria `dades_symfony.sql`. Instala esta base de datos en el MySQL de XAMPP.

### Paso 4: Configurar el Archivo .env
Después de tener la base de datos creada, modifica la información de esta línea de código en la carpeta `.env` según tu base de datos:
```bash
    DATABASE_URL="mysql://usuario:contraseña@127.0.0.1:3306/dades_symfony?serverVersion=8.0.32&charset=utf8mb4"
```
   Asegúrate de cambiar "usuario", "contraseña"

### ¡Listo!
Con estos pasos, has instalado correctamente SymfonyApp en tu entorno local. Puedes acceder a la aplicación a través de tu navegador.


