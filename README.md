# Laboratorio 4 DS7

Este repositorio contiene los archivos y el código fuente del Laboratorio 4 de la materia DS7. El proyecto está desarrollado principalmente en [Laravel](https://laravel.com/), utilizando Blade como motor de plantillas y PHP como lenguaje backend.

## Estructura del Proyecto y Archivos Principales

La estructura principal del proyecto es la siguiente:

- **lab4-autocarga/**  
  Carpeta principal del laboratorio donde se agrupan todos los archivos relevantes.
  
  - **.gitignore**  
    Indica archivos y carpetas que deben ser ignorados por Git, evitando que archivos temporales o sensibles se suban al repositorio.
  
  - **README.md**  
    Explica el propósito, instrucciones y detalles del laboratorio contenido en la carpeta `lab4-autocarga`.

  - **composer.json**  
    Archivo de configuración de Composer para la gestión de dependencias de PHP.
  
  - **index.php**  
    Punto de entrada principal del proyecto. Generalmente es el archivo que inicia la aplicación al recibir una solicitud web.
  
  - **app/**  
    Carpeta donde se almacenan los archivos fuente de la aplicación, como clases, controladores o lógica específica.
  
  - **evidencias/**  
    Directorio destinado a almacenar archivos de evidencia o pruebas del desarrollo, como capturas de pantalla, resultados, imágenes, etc.

## Tecnologías utilizadas

- **Blade (57.2%)**: Vistas y plantillas web.
- **PHP (42.2%)**: Lógica de backend.
- **Otros (0.6%)**: Configuración y recursos secundarios.

## Requisitos Previos

- [PHP 8.x o superior](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js y npm](https://nodejs.org/) (opcional)
- Servidor de base de datos (MySQL, PostgreSQL, etc.)

## Instalación

1. Clona el repositorio:
   ```bash
   git clone https://github.com/appl3jvic3/Laboratorio-4-DS7.git
   cd Laboratorio-4-DS7/lab4-autocarga
   ```

2. Instala las dependencias de PHP:
   ```bash
   composer install
   ```

3. (Si es requerido) Configura tus variables de entorno y genera la clave de la aplicación:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. (Si es requerido) Realiza migraciones y carga datos de ejemplo:
   ```bash
   php artisan migrate --seed
   ```

5. (Opcional) Instala dependencias de frontend:
   ```bash
   npm install
   npm run dev
   ```

6. Ejecuta el servidor de desarrollo:
   ```bash
   php -S localhost:8000
   ```

## Cómo contribuir

1. Haz un fork del repositorio.
2. Crea una rama nueva: `git checkout -b feature/nueva-funcionalidad`
3. Realiza tus cambios y haz commit con mensajes claros.
4. Envía un Pull Request explicando tus cambios.

## Licencia

Este proyecto se distribuye bajo la licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.

---

**Autor:** [appl3jvic3](https://github.com/appl3jvic3)
