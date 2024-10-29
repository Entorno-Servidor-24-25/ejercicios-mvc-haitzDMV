# Arquitectura MVC

### Pregunta 1: ¿Qué camino sigue el código cuando el usuario accede por primera vez a `index.php`?
**Descripción**: Explica qué ocurre desde que el usuario carga index.php hasta que se muestra algo en pantalla. Incluye cómo intervienen el controlador, las vistas y el modelo, si es necesario.

**Respuesta**: Al cargar index.php lo primero que hace es definir en la constante BASE_PATH la ruta donde se está ejecutando archivo (var/www/html/src/). Luego, carga archivo UserController.php  mediante la ruta base anteriormente creada y la carpeta donde se encuentra (y el proparchivo). Require es similar a include, solo que al no encontrar archivo indicado include da un warning y require da error. También, el _once hace que archivo se incluya una vez, es decir, si el misarchivo se incluye en archivo más adelante, lo reutilizará. Por último, define un objeto UserController y llama a la función showForm().
En UserController.php carga /models/User.php y /db.php, que se usarán más adelante (carga cuando en el archivo anterior hace el require_once). Luego se ejecuta la función showForm() que carga userForm.php, que es lo que el usuario verá en pantalla, el formulario en html.


### Pregunta 2: ¿Qué camino sigue el código cuando el usuario introduce datos en el formulario?
**Descripción**: Detalla el proceso desde que el usuario envía el formulario hasta que se guarda la información y se muestra una respuesta en pantalla.

**Respuesta**: Al enviar el formulario lo manda a saveUser.php que es un archivo identico a index.php salvo porque llama a la funcion saveUser() en vez de showForm(). En la función saveUser() crea la conexión, obtiene el nombre, crea el objeto User y ejecuta la función save() que está en User.php. Dicha función inserta el usuario en la base de datos.

> **Nota:** Al crear nuevas vistas, añade alguna forma de navegar entre ellas de modo que el usuario pueda acceder a todas las vistas sin tener que modificar la URL directamente.

### Ejercicio 1: Mostrar Todos los Usuarios
**Descripción**: Extiende la funcionalidad de la aplicación para que se muestre una lista de todos los usuarios que están en la base de datos.
- Añadir un nuevo método en el controlador `UserController` llamado `getAllUsers()`.
- Crear una nueva vista `showUsers.php` para mostrar una tabla con los nombres de los usuarios.

### Ejercicio 2: Eliminar Usuario
**Descripción**: Implementa la funcionalidad para eliminar un usuario de la base de datos.
- Crear un método `deleteUser()` en `UserController`.
- Crear una acción en `showUsers.php` que permita eliminar usuarios, mostrando un botón "Eliminar" al lado de cada nombre en la lista de usuarios.