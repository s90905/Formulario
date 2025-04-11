
# 📝 Proyecto PHP + MySQL con XAMPP:

🚀💡 Este proyecto es un **Formulario web desarrollado en PHP** con conexión a una base de datos **MySQL**, gestionada desde **phpMyAdmin**, usando **XAMPP** como entorno local.

🔧 Permite registrar, editar y actualizar datos a través de una interfaz dinámica con validación en tiempo real. Al momento de hacer clic en el botón "Editar" en uno de los registros que se van almacenando en la tabla que se encuentra en la parte inferior del Formulario, los datos pasan al formulario donde corresponden, inmediatamente aparece un texto en color amarillo informativo sobre cuál es el número del ítem que se está editando en ese momento. Se realiza la Actualización de los datos necesarios y se finaliza dando clic en el botón "Actualizar" que inicialmente se llama "Guardar".

Si la persona encargada de diligenciar los datos, edita o añade una cédula que ya está registrada, en ese mismo momento (es decir, por optimización de tiempo la persona no necesita diligenciar todo el formulario para al final percatarse que el documento ya está registrado, sino que el sistema le informa en ese preciso momento cuando diligencia el número de cédula) aparece un aviso de color rojo y al mismo tiempo el botón "Guardar" queda Inactivo, es decir, no permite continuar con el proceso.

En caso que la persona encargada, esté Editando un registro y modifique la cédula por otro número de documento que ya está registrado, aparecen los dos avisos, amarillo: "Estás editando el ítem: __ ". Aviso color Rojo: "Ya existe un registro con ésa cédula.", y el botón en este caso "Actualizar" queda inmediatamente Inactivo, es decir, el sistema valida la cédula para evitar la duplicidad de información en la base de datos.

📁 Estructura del proyecto:
- `index.html` - `index.php` 📝 Formulario principal.
- `style.css` 🎨 Estilos personalizados.
- `conexion.php` 🔌 Conexión a la base de datos.
- `guardar.php` 💾 Procesamiento y guardado de datos.
- `personas.sql` 📝 Tabla de la base de datos `electoral`, exportada desde phpMyAdmin.

📦 Requisitos:
- ✅ XAMPP instalado.
- ✅ PHP 7+ o superior.
- ✅ Navegador web.
- ✅ phpMyAdmin para gestionar la base de datos.

 Ejemplo de Avisos en el formulario:

 ![image](https://github.com/user-attachments/assets/b0daf1d3-4acc-4ae7-810e-fb2e1485a251)

