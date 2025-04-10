<?php
require_once 'conexion.php';
mysqli_set_charset($conn, "utf8mb4");

if (isset($_POST['verificar_cedula'])) {
    $cedula = preg_replace('/\D/', '', $_POST['cedula']); 
    $id = $_POST['id_personas'];


    $query = "SELECT * FROM personas WHERE cedula = '$cedula'";
    if (!empty($id)) {
        $query .= " AND id_personas != '$id'";
    }

    $resultado = mysqli_query($conn, $query);
    echo (mysqli_num_rows($resultado) > 0) ? 'duplicada' : 'ok'; 
    exit();
}


$id_personas = trim($_POST['id_personas']);
$tipo = trim($_POST['tipo']);
$cedula = trim($_POST['cedula']);
$cedula_limpia = preg_replace('/\D/', '', $cedula);
$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);
$telefono = trim($_POST['telefono']);
$email = trim($_POST['email']);
$cumple = trim($_POST['cumple']);
$estrato = trim($_POST['estrato']);
$barrio = trim($_POST['barrio']);
$sexo = trim($_POST['sexo']);
$departamento = trim($_POST['departamento']);
$municipio = trim($_POST['municipio']);
$direccion = trim($_POST['direccion']);
$lider = trim($_POST['lider']);
$sitio = trim($_POST['sitio']);
$mesa = trim($_POST['mesa']);


$tratamiento = "";
if (!empty($id_personas)) {
    $consultaTratamiento = mysqli_query($conn, "SELECT tratamiento FROM personas WHERE id_personas = '$id_personas'");
    $fila = mysqli_fetch_assoc($consultaTratamiento);
    $tratamiento = ($fila && empty($fila['tratamiento'])) ? (isset($_POST['tratamiento']) ? trim($_POST['tratamiento']) : "") : $fila['tratamiento'];
} else {
    $tratamiento = isset($_POST['tratamiento']) ? trim($_POST['tratamiento']) : "";
}


if (!empty($id_personas)) {
    $cedulaDuplicada = mysqli_query($conn, "SELECT * FROM personas WHERE cedula = '$cedula_limpia' AND id_personas != '$id_personas'");
    if (mysqli_num_rows($cedulaDuplicada) > 0) {
        echo "Ya existe otro registro con esa cédula. No se puede actualizar.";
        exit();
    }


    $query = "UPDATE personas SET tipo='$tipo', cedula='$cedula_limpia', nombres='$nombres', apellidos='$apellidos', telefono='$telefono', email='$email', cumple='$cumple', estrato='$estrato', barrio='$barrio', sexo='$sexo', departamento='$departamento', municipio='$municipio', direccion='$direccion', lider='$lider', sitio='$sitio', mesa='$mesa', tratamiento='$tratamiento' WHERE id_personas='$id_personas'";

    if (!mysqli_query($conn, $query)) {
        echo "Error al actualizar: " . mysqli_error($conn);
        exit();
    }
} else {
    $consulta = mysqli_query($conn, "SELECT * FROM personas WHERE cedula = '$cedula_limpia'");
    if (mysqli_num_rows($consulta) > 0) {
        echo "duplicada"; 
        exit();
    }

    $query = "INSERT INTO personas(id_personas, tipo, cedula, nombres, apellidos, telefono, email, cumple, estrato, barrio, sexo, departamento, municipio, direccion, lider, sitio, mesa, tratamiento) 
              VALUES('$id_personas','$tipo','$cedula_limpia','$nombres','$apellidos','$telefono','$email','$cumple','$estrato','$barrio','$sexo','$departamento','$municipio','$direccion','$lider','$sitio','$mesa','$tratamiento')";

    if (!mysqli_query($conn, $query)) {
        echo "Error, datos no guardados: " . mysqli_error($conn);
        exit();
    }
}

if (!isset($_POST['verificar_cedula'])) {
    header("Location: index.php");
    exit();
}

mysqli_close($conn);
?>

