<?php

    $host="host=localhost";
    $port="port=5432";
    $dbname="dbname=votacion"; 
    $user="user=postgres";
    $password="password=1234";
    
    $con =  pg_connect("host=localhost port=5432 dbname=votacion user=postgres password=1234");
    $text = "";
    $text .= '<option value=0> Seleccione Comuna </option>';
    $SQL = "SELECT \"idcomuna\", \"nombre\" FROM \"comuna\" ";
    $com = pg_query($con, $SQL); 

    while ($row = pg_fetch_row($com)) {
        //$text.=$row[1];
       //$text='<option value='\'.$row[0].'\'>'.$row[1].'</option>';
       $text.= '<option value='.$row[0].'>'.$row[1].'</option>';
     }

   echo $text;

    ?>