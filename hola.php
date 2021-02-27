<?php
If(!empty($_POST)){
//  $serverName = "JORGE-HP\Administrador";
// $connectionInfo = array( "Database"=>"polo");
// $conn = sqlsrv_connect( $serverName, $connectionInfo);

include('basedate.php')
$Nom=$_POST['nombre'];
$Ape=$_POST['apellidos'];
$Dir=$_POST['direccion'];    
$Cor=$_POST['correo'];  
$Tel=$_POST['telefono'];   
$Usu=$_POST['usuario'];  
$Cla=$_POST['clave'];    
$insertar= "INSERT INTO registrouno(Nombre,Apellido,Direccion,Telefono,Correo,Usuario,Clave)values('$Nom','$Ape','$Dir','$Tel','$Cor','$Usu','$Cla')";      

$result=mysqli_query($conexion,$insertar); 



if($result){
      echo"Agregado correctamente";
        

  
} 
    else{
      echo"No Agregado";
}



}
?>