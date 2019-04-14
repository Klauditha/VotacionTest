<?php

    $host="host=localhost";
    $port="port=5432";
    $dbname="dbname=votacion"; 
    $user="user=postgres";
    $password="password=1234";
    
    $con =  pg_connect("host=localhost port=5432 dbname=votacion user=postgres password=1234");
    $text = "";
    $text .= '<option value=0> Seleccione Candidato </option>';
    $SQL = "SELECT \"id\" ,\"nombre\" FROM \"candidato\" ";
    $com = pg_query($con, $SQL); 

    while ($row = pg_fetch_row($com)) {
       
       $text.= '<option value='.$row[0].'>'.$row[1].'</option>';
     }

   echo $text;

    ?>