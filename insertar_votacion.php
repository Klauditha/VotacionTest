<?php 
// Conexión a la base de datos 
require_once ("conexion.php"); 


$mensajeOk=false;
if(isset($_POST['txtNombre']) && isset($_POST['txtAlias']) && isset($_POST['txtRut'])
    && isset($_POST['cmbRegion']) && isset($_POST['cmbComuna']) && isset($_POST['cmbCandidato'])){

    $conn=conectarBD();  
    $nombre = $_POST['txtNombre'];
    $alias = $_POST['txtAlias'];
    $rut = $_POST['txtRut'];
    $region = $_POST['cmbRegion'];
    $candidato = $_POST['cmbCandidato'];
    $comuna = $_POST['cmbComuna'];
    $email  = $_POST['txtEmail'];
    $medio = 'pendiente';
    $query ="INSERT INTO votacion(alias, candidato, comuna, email, nombre, region, rut, medio)
        VALUES ('$alias', '$candidato', '$comuna', '$email', '$nombre', '$region','$rut', '$alias');";
   
    $result = pg_query($conn, $query);
  
    if (!$result) {
    $error.="pg_last_error($conn)<li>";
    }
    else{
        echo 'Su votacion se ha ingresado correctamente';
    }
}
else{
    echo 'Todos los datos son requeridos.';
  
}

?> 