# PROYECTO: TIENDA ALKEMY 🛒

Proyecto de API realizado con Laravel el cual utiliza el patron de Arquitecura MVC, donde se utilizaron principalmente: 

- Models
- Controllers
- Seeds
- Migrations
- Routes

## API REST: PHP Puro vs Micro-framework Lumen/Laravel

### PHP Puro. 
Desarrollar una API en PHP puro implica construir la arquitectura MVC desde cero. Donde sus ventajas son:

- Rendimiento Máximo: Bajo consumo de recursos y latencia reducida.
- Control Total: Dominio absoluto sobre el ciclo de vida de la petición HTTP, las respuestas y las consultas SQL directas.

Por otro lado sus desventajas:

- Estructura Manual: El enrutamiento, la conexión a la base de datos, la gestión de cabeceras y la sanitización de datos deben implementarse a mano.
- Lógica Dispersa: Mayor riesgo de generar código difícil de mantener o "espagueti" si no se aplica de entrada un patrón de diseño estricto.

### Lumen/Laravel

Lumen (Micro-framework):
Esta iseñado específicamente para crear API REST y microservicios ultra rápidos y livianos y su principal ventaja es:

- Rendimiento: Optimizado para la velocidad sacrificando funcionalidades integradas pesadas. Su sintaxis es familiar a Laravel, facilitando la transición.

Laravel (Framework Completo):
Esta enfocado en la elegancia, claridad de código y un desarrollo ágil y sus ventajas son: 

- Enrutamiento: Definición limpia y modular de endpoints.
- ORM Eloquent: Abstracción de datos para interactuar con la base de datos de manera orientada a objetos en lugar de consultas SQL directas.
- Migraciones y Seeds: Control de versiones para la estructura de la base de datos y datos de prueba.
- Validaciones: Uso de *Form Requests* que separan la lógica de validación de los controladores.
- Middleware y Seguridad: Capas de procesamiento predefinidas para autenticación basada en tokens y protección de endpoints.

## FUNCIONALIDADES ⚙️

- CRUD (create, read, update, delete) para productos.
- CRUD (create, read, update, delete) para categorias.

Para las pruebas de dichas funcionalidades utilizamos la herramienta llamada PostMan.

## ESTRUCTURA DEL PROYECTO 🗂️

Las principales carpetas y archivos del proyecto son:

- 'app/': Contiene los modelos y controladores. 
- 'bootstrap/': Contiene los archivos necesarios para la inicializacion de la aplicacion. 
- 'config/': Contiene archivos para la configuracion del proyecto.
- 'database/': Contiene las migraciones, las seeds y las factories.
- 'public/': Contiene los archivos publicos.
- 'resourses/': Contiene los archivos que no son publicos como las vistas de Blade.
- 'routes/': Contiene los archivos de rutas que definen como se manejan las solicitudes entrantes.
- 'storage/': Almacena los archivos generados por la aplicacion.
- 'test/': Contiene las pruebas automatizadas de la aplicacion.
- 'vendor/': Contiene las dependencias de Composer.
- '.env': Almacena la configuración específica del entorno, como la configuración de la
base de datos y las claves de seguridad.

## EJEMPLO DEL FLUJO DE UNA PETICION PARA CREAR USUARIO:

- Cuando creamos un producto inicialmente primero pasan por la ruta:

Route::post('/crear-producto', [ProductoController::class, 'store']);

- Una vez en el controlador, lo primero que hace es enviarnos al StoreProductoRequest que se encarga de validar los datos enviados. 

- Cuando ya estan validados, se llaman al modelo para la creacion del producto.

- Una vez creado, se retorna una respuesta que nos devuelve el producto creado.


## REQUERIMIENTOS 🛠️

Los requerimientos son los siguientes: 

- Composer version 2.10.1.
- Laravel Installer version 5.31.0.
- PHP version 8.4.24.
- Postman (Opcional para envio de solicitudes).

Para ver tus versiones:
```shell
php -v
```
```shell
composer -v
```
```shell
laravel -v
```

## EJECUCION DEL PROYECTO 📑

- Crea un proyecto en la carpeta "htdocs" de Xammp.
- En Visual Studio abre la carpeta y abre una terminal. 
- Clona el repositorio mediante el siguiente comando el la terminal: 
```shell
git clone https://github.com/TomasVelazque/Alkemy-1 .
```
- Crea el archivo .env con todas las configuraciones especificas del entorno. 
- Instala composer en el proyecto ya que en github no esta subido.
- Corre el servidor mediante (recuerda estar en la carpeta del proyecto): 
```shell
php artisan serve
```
Para probar las funcionalidades recomiendo utilizar PostMan para una mejor experiencia. Ahi mediante las distintas url podras probar los CRUD's.

