### Productos

- [X] Validar talles
- [X] Listar la categoría a la que pertenece cada producto
- [X] Requerir todos los datos
- [X] Mostrar errores
- [X] Al cargar/editar un producto, que permita elegir a qué categorías pertenece
- [X] Cada producto debe pertenecer a una sola categoría

### Categorías
- [X] Listar cantidad de productos por categoría
- [X] Eliminar la tabla ProdCat

### API
- [ ] Implementar inserciones y creaciones por API

### Vistas
- [X] Paginar todas las vistas
- [ ] Recuperar contraseña

### Preguntas
- No me carga los css definidos por mi (solucionado)
- ProductoController falta de eficiencia en línea 17? Si
- Puedo usar más de un modelo en un mismo controlador? Si
- Puedo usar javascript? Si

- Está bien hacer la verificación de los datos en la vista? Si
- Los usuarios válidos son los empleados o admin es un usuario no empleado? Todo lo que está en empleado va a user y uso User como tabla de empleados (aclararlo en la documentación)
- Puedo acceder a las rutas si no estoy loggeado? Middleware

- Es conveniente enviar la contraseña del usuario por PUT ya encriptada (por cuestiones de seguridad) o es preferible hacer la encriptación en el servidor?

### Notas

#### React + Next.js
Podemos usar React Next.js
    npx create-next-app
Usar App Router

#### Vue
    
    npm init vue@latest

JSX es como un HTML

    Add Vue Router? Yes
    Add ESLint? Yes
    Add Prettier? Yes

BAiRWPDWyoR6R7SR

## Para el final (15 puntos)
- [ ] Evitar que la verificación borre todos los campos cuando se ingresa un campo erróneo
- [ ] Checkeo de talles por backend
- [X] Implementar eliminado suave
- [X] Previsualizar imágenes antes de guardarlas
- [X] No puedo guardar el producto si no cambio la imagen
- [ ] Actualizar documentación de Swagger
- [ ] Arreglar vista paginada
- [ ] Autenticación de usuarios en JS (6 puntos): 
    - Permitir al usuario loguearse en la aplicación de JS
    - Permitir al usuario recuperar sus pedidos
    - Extender la API para que incluya autenticación
    - Extender la API para que devuelva los pedidos del usuario debidamente autenticado
- [ ] Mercado pago (4 puntos): Integrar Mercado Pago (en modo sandbox) para realizar el pago del carrito. Puntualmente, se debe integrar, mínimamente Checkout Bricks - Card Payment Brick
- [X] Administración de archivos (2 puntos): Se puede implementar la administración de archivos o imágenes. Dichos archivos o imágenes deben ser almacenados en la BD, o en su defecto, en un sistema externo. Se debe permitir subir las imagenes en Laravel, y la API las debe devolver correctamente para su uso en JS
- [ ] Accesibilidad (2 puntos): Cumplir con al menos 3 guías de accesibilidad en la aplicación del Proyecto Javascript - React/Vue. Se debe indicar claramente cuales son las guías que fueron implementadas y mostrarlas funcionando en la defensa correspondiente.
- [ ] PWA (2 puntos): Convertir la aplicación del Proyecto Javascript - React/Vue en PWA, mostrando claramente como se puede instalar y como mejora la experiencia del usuario.
