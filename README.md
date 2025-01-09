# Proyecto Laravel

Este es un proyecto basado en Laravel. Sigue las instrucciones a continuación para clonar y configurar correctamente el repositorio.

## Prerrequisitos

Asegúrate de tener instalados los siguientes componentes:

- **Node.js**: [Descargar e instalar Node.js](https://nodejs.org/)

## Instalación

Sigue estos pasos para configurar el proyecto en tu máquina local.

### 1. Clonar el repositorio

Clona el repositorio en tu máquina local usando el siguiente comando:


git clone <URL_DEL_REPOSITORIO>

### 2. Instalar dependencias de Node.js
Navega a la carpeta del proyecto y ejecuta el siguiente comando para instalar las dependencias de Node.js:

npm install

### 3. Actualizar dependencias de Composer
Ejecuta el siguiente comando para actualizar las dependencias de Composer:

composer update

### 4. Configuración de la Base de Datos
Asegúrate de que el nombre de la base de datos esté configurado correctamente en el archivo .env. Abre el archivo y verifica la siguiente línea:

env
DB_DATABASE=nombre_de_tu_base_de_datos

### 5. Ejecutar Migraciones
Finalmente, ejecuta las migraciones para configurar las tablas de la base de datos:


php artisan migrate

# ¡Listo! Ahora deberías tener el proyecto configurado y listo para usar.

### Contribuciones
Si deseas contribuir a este proyecto, por favor, haz un fork del repositorio y crea una pull request con tus cambios.

### Licencia
Este proyecto está licenciado bajo la licencia MIT. Consulta el archivo LICENSE para más detalles.