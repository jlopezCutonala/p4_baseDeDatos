<?php
//Validar si hay una sesion activa
//Si no redireccionar o mostrar error

//Validar datos

//obtener datos
$nombre = $_POST['nombre'];
$ap = $_POST['ap'];
$am = $_POST['am'];
$domicilio = $_POST['domicilio'];
$colonia = $_POST['colonia'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];
$observaciones = $_POST['observaciones'];

$mysqli = new mysqli("localhost", "root", "s3guR0.", "directorio");
if ($mysqli->connect_errno) {
    throw new Exception(
        "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . 
        $mysqli->connect_error);
}

$sql = "INSERT INTO `contacto` ".
    "(`ap`, `am`, `nombre`, `domicilio`, `colonia`, ".
    "`cp`, `municipio`, `estado`, `pais`, `telefono`, `celular`, ".
    "`radio`, `email`, `observaciones`, `saved_at`) ".
    "VALUES ".
    "('".$ap."', '".$am."', '".$nombre."', '".$domicilio."', '".$colonia."', ".
    "'".$cp."', '".$municipio."', '".$estado."', '".$pais."', '',". 
    "'', '', '', '".$observaciones."', '".date("Y-m-d H:m:s")."');";

$resultado = $mysqli->query($sql);

$mysqli->close();
?>

<html>
    <body>
        <div>
            <h1>Nuevo contacto</h1>
            <p>Se ha agregado un contacto</p>
        </div>
    </body>
</html>
