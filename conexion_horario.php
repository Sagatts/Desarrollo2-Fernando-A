<?php
function conectar_horario(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="horario_atencion";

 
    $con_horario=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con_horario,$bd);

    
    return $con_horario;
}
?>