<?php  
    require_once ("includes/conexion.php"); 
    $conn=conectarBD();  

    $regiones=obtenerRegiones($conn);
    $comunas=obtenerComuna($conn);
    $candidatos=obtenerCandidato($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/validaciones.js" ></script>
    <title>Formulario de votacion</title>
</head>

<body style="padding: 20px;">
<div>   </div>    
    <h2>Formulario de Votacion</h2>
    <form  name="f1" method="post"  action="insertar_votacion.php" >
<table>
    <tr> <td>Nombre y Apellido</td>                 
    <td> <input  type="text" id="txtNombre" name="txtNombre" onBlur="camposVacios(this);" > </td></tr>

    <tr> <td>Alias</td>                 
    <td> <input type="text" id="txtAlias"  name="txtAlias"  onBlur="validacionAlfaNum(this);">      </td> </tr>
    
    <tr> <td>RUT</td>                   
    <td> <input type="text" id="txtRut" name="txtRut" onChange="Valida_Rut(this);">       </td> </tr>
<tr> <td>Email</td>                 <td> <input type="mail" id="txtEmail" name="txtEmail" />      </td> </tr>
<tr> <td>Region </td>               
<td> <select  id="cmbRegion" name="cmbRegion"><option value="0"> Seleccione Region </option></select> </td> </tr>
<tr> <td>Comuna</td>                <td> <select  id="cmbComuna" name="cmbComuna"> 
     <option value="0"> Seleccione Comuna </option> </select>   </td> </tr>
<tr> <td>Candidato</td>             <td> <select  id="cmbCandidato" name="cmbCandidato">
<option value="0"> Seleccione Candidato </option></select>   </td> </tr>

<tr> <td>Como se enteró de Nosotros</td>
     <td> <label > <input type="checkbox" id="cbWeb">Web                  </label>
          <label > <input type="checkbox" id="cbTv"> TV                   </label>
          <label > <input type="checkbox" id="cbRSociales"> Redes Sociales</label> 
          <label > <input type="checkbox" id="cbAmigos">Amigos            </label></td> 
</tr>
 <tr><td><button type="submit" > Votar</button></td></tr>

</table>
</form>
</body>

</html>

