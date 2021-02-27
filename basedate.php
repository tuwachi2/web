<?php 
    $conexion = mysqli_connect("localhost","root","","registro");
    mysqli_set_charset($conexion, "utf8");
    if( $conexion ) {
        echo "Conexión establecida.<br />";
   }else{
        echo "Conexión no se pudo establecer.<br />";
        die( print_r( sqlsrv_errors(), true));
   }
?>