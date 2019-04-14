<?php

    $host="host=localhost";
    $port="port=5432";
    $dbname="dbname=votacion"; 
    $user="user=postgres";
    $password="password=1234";
    
    $con =  pg_connect("host=localhost port=5432 dbname=votacion user=postgres password=1234");
    $text = "";
    $text .= '<option value=0> Seleccione Region </option>';
    $SQL = "SELECT \"IdRegion\" as id,\"NombreRegion\" FROM \"Region\" ";
    $com = pg_query($con, $SQL); 

    while ($row = pg_fetch_row($com)) {
       
       $text.= '<option value='.$row[0].'>'.$row[1].'</option>';
     }

   echo $text;

    ?>