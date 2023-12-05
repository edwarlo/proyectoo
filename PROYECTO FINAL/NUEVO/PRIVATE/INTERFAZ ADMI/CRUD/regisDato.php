<?php
    require("../../PHP/conexion/conexion.php");

    $nombre1_usuario                = ucwords($_REQUEST["primer__nombre"]);
    $nombre2_usuario                = ucwords($_REQUEST["segundo__nombre"]);    
    $apellido1_usuario              = ucwords($_REQUEST["primer__apellido"]);
    $apellido2_usuario              = ucwords($_REQUEST["segundo__apellido"]);
    $documento_Id_documento         = $_REQUEST["tipo__documento"];
    $numero_documento_usuario       = $_REQUEST["numero__documento"];
    $correo_usuario                 = strtolower($_REQUEST["correo"]);
    $numero_telefono_usuario        = $_REQUEST["numero__telefono"];
    $contraseña_usuario             = $_REQUEST["contraseña"];
    $confirmar_contraseña           = $_REQUEST["confirmar__contraseña"];
    $tienda_Id_tienda               = $_REQUEST["sele__tienda"];
    $rol                            = $_REQUEST["tipo__rol"];
    $estado_usuario                 = 1;

    $queryUsu = $conect -> query("SELECT * FROM usuario WHERE nombre1_usuario='".$nombre1_usuario."' AND apellido1_usuario='".$apellido1_usuario."'
    AND apellido2_usuario='".$apellido2_usuario."'");
    $valorUsu = mysqli_fetch_array($queryUsu);


?>