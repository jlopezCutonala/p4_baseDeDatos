<?php
require_once('contacto.php');
require_once('listarContactos.php');
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <title>Ejemplo de PHP y MySQL</title>
    <meta charset="UTF-8"> 
    </head>
    <body>
        <h1>Mostrar los elementos</h1>
        <?php
            $modelo = new Contacto();
            $contactos = $modelo->encontrarTodos();
            $listar = new ListarContactos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>
        <h1>Agregar nuevo elemento y mostrar los elementos</h1>
        <?php
            $modelo->nuevo();
            $contactos = $modelo->encontrarTodos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>
        <h1>Editar el &uacute;ltimo elemento y mostrar los elementos</h1>
        <?php
            $modelo->editarUltimo();
            $contactos = $modelo->encontrarTodos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>
        <h1>Eliminar el &uacute;ltimo elemento y mostrar los elementos</h1>
        <?php
            $modelo->eliminarUltimo();
            $contactos = $modelo->encontrarTodos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>
    </body>
</html>

