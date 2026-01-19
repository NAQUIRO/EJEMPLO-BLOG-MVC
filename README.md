# Blog

Este es un proyecto de ejemplo de una aplicación de Blog implementada en PHP nativo, siguiendo el patrón de diseño **Modelo-Vista-Controlador (MVC)**. La aplicación proporciona una gestión completa de artículos a través de operaciones CRUD (Crear, Leer, Actualizar y Eliminar).

## 📋 Características

*   **Listado de Artículos:** Visualización de todos los artículos publicados ordenados por fecha.
*   **Creación de Contenido:** Formulario para redactar y guardar nuevos artículos.
*   **Edición:** Capacidad para modificar el título y contenido de artículos existentes.
*   **Eliminación:** Opción para borrar artículos de la base de datos.
*   **Arquitectura MVC:** Separación clara entre la lógica de negocio (Modelo), la interfaz de usuario (Vista) y el manejo de solicitudes (Controlador).

## 🛠️ Tecnologías Utilizadas

*   **Lenguaje:** PHP 8+
*   **Base de Datos:** MySQL / MariaDB
*   **Servidor Web:** Apache (vía XAMPP, WAMP, Laragon, etc.)
*   **Frontend:** HTML, CSS (en las vistas)

## 🚀 Instalación y Configuración

Sigue estos pasos para poner en marcha el proyecto en tu entorno local:

1.  **Clonar el repositorio**
    Descarga el proyecto en tu carpeta de servidor web (por ejemplo `htdocs` en XAMPP).

2.  **Base de Datos**
    *   Abre tu gestor de base de datos (como phpMyAdmin).
    *   Crea una nueva base de datos llamada `blogdb` (o usa el script incluido que ya la define).
    *   Importa el archivo `model/blogdb.sql` incluido en el proyecto para crear la tabla `articulos` e insertar datos de prueba.

3.  **Configuración de Conexión**
    Verifica los datos de conexión en el archivo `model/BlogDB.php`. Por defecto está configurado para XAMPP:
    ```php
    private static $host = "localhost";
    private static $dbname = "blogdb";
    private static $user = "root";
    private static $pass = "";
    ```
    Si tu configuración de MySQL es diferente, modifica estas variables.

## 📂 Estructura del Proyecto

*   **`controller/`**: Contiene la lógica para manejar las solicitudes de los usuarios (`nuevo.php`, `editar.php`, `grabar.php`, etc.).
*   **`model/`**: Contiene las clases de acceso a datos (`Articulo.php`, `BlogDB.php`) y el script SQL.
*   **`view/`**: Contiene las plantillas HTML para la visualización de datos.
*   **`index.php`**: Punto de entrada a la aplicación (redirecciona al controlador principal).

## ✒️ Autor

**Antony Jampol Aquino Rumualdo**
