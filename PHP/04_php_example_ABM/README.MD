# Instrucciones para Ejecutar el Proyecto

Este proyecto es un ejemplo básico de una aplicación PHP que interactúa con una base de datos. Sigue los pasos a continuación para configurarlo y ejecutarlo en tu entorno local.

## Requisitos Previos

- Servidor web con soporte para PHP (por ejemplo, Apache).
- MySQL o cualquier otro sistema de gestión de bases de datos compatible.
- Acceso a la carpeta `htdocs` (en XAMPP o similar).

## Pasos para Ejecutar el Proyecto

### 1. Configurar la Base de Datos

1. **Crear la base de datos**: Antes de comenzar, asegúrate de que tienes una base de datos creada en tu servidor MySQL.
2. **Ejecutar el script SQL**:
   - Ubica el archivo `script.sql` que viene incluido en este proyecto.
   - Importa y ejecuta este archivo en tu base de datos utilizando una herramienta como phpMyAdmin, MySQL Workbench, o la línea de comandos.
   - Esto creará las tablas necesarias y poblará la base de datos con datos iniciales.

### 2. Mover los Archivos PHP

1. **Copiar los archivos PHP**:
   - Mueve todos los archivos `.php` del proyecto a la carpeta `htdocs` en tu servidor local.
   - La carpeta `htdocs` se encuentra generalmente en la raíz de tu instalación de XAMPP, WAMP, o similar.

### 3. Configurar la Conexión a la Base de Datos

1. **Editar los archivos PHP**:

   - Abre los archivos `.php` que contienen la configuración de la base de datos (generalmente un archivo `config.php` o similar).
   - Modifica las siguientes variables para que coincidan con la configuración de tu servidor:

   ```php
   $host = 'localhost'; // Dirección del servidor de base de datos
   $db = 'nombre_de_tu_base_de_datos'; // Nombre de la base de datos
   $user = 'tu_usuario'; // Usuario de la base de datos
   $pass = 'tu_contraseña'; // Contraseña del usuario

   $servidor = '<servidor>:<puerto>/<directorio>'; // servidor donde corre el xampp, puerto donde corre el xamp, directorio o subdirectorio donde se encuentran los archivos
   ```
