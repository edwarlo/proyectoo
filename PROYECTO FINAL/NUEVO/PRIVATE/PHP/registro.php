<?php
require("config.php");
$Cedula           = $_REQUEST['Cedula'];
$Nombre           = ucwords($_REQUEST['Nombre']);
$Apellido         = ucwords($_REQUEST['Apellido']);
$Cel1             = $_REQUEST['Cel1'];
$Cel2             = $_REQUEST['Cel2'];
$Correo           = strtolower($_REQUEST['Correo']);
$CorreoSena       = strtolower($_REQUEST['CorreoSena']);
$Contraseña       = $Cedula;
$Cont             = $_REQUEST['Cont'];
$centro           = $_REQUEST['lista33'];
$Sede             = $_REQUEST['lista32'];
$Ciudad           = $_REQUEST['lista23'];
$de               = $_REQUEST['lista11'];
$Activo           = 1;

echo " Correo  ",$Correo," Contratista  ", $Cont," Correo Sena:  ", $CorreoSena;   

$query = $con -> query ("SELECT * FROM instructor WHERE Num_Ced='" .$Cedula. "'");
$valores = mysqli_fetch_array($query);

$CedulaReg=$valores['Num_Ced'];
  if($Cedula=$CedulaReg){
    header("Location:index.php?eeec=1");    
  }

$query1 = $con -> query ("SELECT * FROM instructor WHERE Nomb='" .$Nombre. "' AND Apellido='" .$Apellido. "'");
$valores1 = mysqli_fetch_array($query1);

$NombReg=$valores1['Nomb'];
  $ApellidoReg=$valores1['Apellido'];
  if($Nombre=$NombReg AND $Apellido=$ApellidoReg){
    header("Location:index.php?eeeb=1");    
  }

$query2 = $con -> query ("SELECT * FROM instructor WHERE Correo_Sena='" .$CorreoSena. "' OR Correo='" .$Correo. "'");
$valores2 = mysqli_fetch_array($query2);

$Correo_Sena=$valores2['Correo_Sena'];
  $CorreoReg=$valores2['Correo'];
  if($CorreoSena=$Correo_Sena OR $Correo=$CorreoReg){
    header("Location:index.php?eeeu=1");    
  }

  $Cedula           = $_REQUEST['Cedula'];
  $Nombre           = ucwords($_REQUEST['Nombre']);
  $Correo           = strtolower($_REQUEST['Correo']);
$CorreoSena       = strtolower($_REQUEST['CorreoSena']);
if (empty($valores) AND empty($valores1) AND empty($valores2)){

$InsertNuevoEvento = "INSERT INTO instructor(
      Num_Ced,
      Nomb,
      Apellido,
      Celular1,
      Celular2,
      Correo,
      Correo_Sena,
      Contraseña,
      Activo,
      Contrato,
      Id_Ciudad,
      Id_Sede
      )
    VALUES (
      '" .$Contraseña. "',
      '". $Nombre."',
      '" .$Apellido. "',
      '" .$Cel1. "',
      '" .$Cel2. "',
      '" .$Correo. "',
      '" .$CorreoSena. "',
      '" .$Contraseña. "',
      '" .$Activo. "',
      '" .$Cont. "',
      '" .$Ciudad. "',
      '" .$Sede. "'
  )";
  echo " Ciudad  ",$Ciudad," Departamento  ", $de," Centro:  ", $Sede;
$resultadoNuevoEvento = mysqli_query($con, $InsertNuevoEvento);
$query = $con -> query ("SELECT * FROM instructor WHERE Num_Ced='" .$Cedula. "'");           
$valores2 = mysqli_fetch_array($query);
$Id_Instructor=$valores2['Id_Instruc'];
$InsertNuevoEvento2 = "INSERT INTO centro_inst(
    Id_Centro,
    Id_Instructor
    )
    VALUES (
        '" .$centro. "',
        '" .$Id_Instructor. "'
  )";
  $resultadoNuevoEvento2 = mysqli_query($con, $InsertNuevoEvento2);
  $Rol=2;
  $InsertNuevoEvento3 = "INSERT INTO  rol_ins(
    Id_Rol,
    Id_Ins 
    )
    VALUES (
        '" .$Rol. "',
        '" .$Id_Instructor. "'
  )";
  $resultadoNuevoEvento3 = mysqli_query($con, $InsertNuevoEvento3);

header("Location:index.php?eeed=1");
    }
else {
  if (empty($valores) AND empty($valores1))
{
  header("Location:index.php?eeeu=1");
}

else {
  if (empty($valores) AND empty($valores2))
  {
    header("Location:index.php?eeeb=1");
  }
  else {
    if (empty($valores1) AND empty($valores2))
    {
      header("Location:index.php?eeec=1");
    }
  
  }
}
}

  

  
  

echo " Ciudad  ",$Ciudad," Departamento  ", $de," Centro:  ", $Sede;   
?>