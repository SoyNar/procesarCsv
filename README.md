# GCM Data Processing Module

Este módulo procesa archivos CSV, los almacena en la base de datos y expone endpoints para que el frontend en Angular construya una matriz. Además, el backend en Laravel ejecuta un script en R que toma los datos desde la base de datos y genera la matriz.

## Características

- Procesamiento de archivos CSV.
- Almacenamiento seguro de datos en la base de datos.
- Exposición de endpoints REST para el frontend.
- Ejecución de scripts R para análisis de datos.
- Soporte para filtros dinámicos que recalculan la matriz.

## Requisitos

- PHP >= 8.1
- Laravel >= 10.x
- R instalado en el servidor
- Base de datos MySQL/MariaDB
- Node.js >= 18.x (para frontend Angular)
- Composer y NPM

## Instalación

1. Clonar el repositorio:
    ```bash
    git clone https://tu-repo.git
    cd proyecto-gcm
    ```

2. Instalar dependencias de Laravel:
    ```bash
    composer install
    ```

3. Configurar el archivo `.env`:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Configurar la base de datos y ejecutar migraciones:
    ```bash
    php artisan migrate
    ```

5. Instalar dependencias de frontend:
    ```bash
    cd frontend
    npm install
    ```

## Uso

1. Subir archivos CSV mediante el módulo correspondiente.
2. Procesar los datos automáticamente.
3. Consultar la matriz generada a través de los endpoints.
4. Aplicar filtros según sea necesario.

## Contribuir

1. Hacer un fork del repositorio.
2. Crear una nueva rama:
    ```bash
    git checkout -b feature/nueva-funcionalidad
    ```
3. Realizar cambios y hacer commit:
    ```bash
    git commit -m "Descripción breve del cambio"
    ```
4. Enviar un pull request.

## Licencia

Este proyecto está bajo la licencia MIT.
