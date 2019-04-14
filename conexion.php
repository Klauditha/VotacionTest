<?php

function  conectarBD(){
    $host="host=localhost";
    $port="port=5432";
    $dbname="dbname=votacion"; 
    $user="user=postgres";
    $password="password=1234";
    
    $con =  pg_connect("host=localhost port=5432 dbname=votacion user=postgres password=1234");
 
    if(!$con){
        echo "error";   
    }
    else{
        return $con; }
}

function obtenerRegiones($conn){
    $SQL = "SELECT \"IdRegion\" as id,\"NombreRegion\" FROM \"Region\" ";
    $reg = pg_query($conn, $SQL); 
    

    return $reg;
   
}

function obtenerCandidato($conn){
    $SQL = "SELECT \"id\" ,\"nombre\" FROM \"candidato\" ";
    $cand = pg_query($conn, $SQL); 
    
    return $cand;
}

function obtenerComuna($conn){
    $SQL = "SELECT \"idcomuna\", \"nombre\" FROM \"comuna\" ";
    $com = pg_query($conn, $SQL); 
    return $com;
}

function insertarPersona( $conexion, $id, $nombre )
    {
        $sql = "INSERT INTO tbl_personas VALUES (".$id.", '".$nombre."')";
        // Ejecutamos la consulta (se devolverá true o false):
         return pg_query( $conexion, $sql );
    }

?>