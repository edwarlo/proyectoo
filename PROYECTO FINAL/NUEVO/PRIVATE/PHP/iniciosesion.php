<?php
    session_start();
    require_once('conexion/conexion.php');
    
    $correo =strtolower($_POST["correo"]);
    $contrasena = $_POST["contraseña"];

    $registros = mysqli_query($conect, "SELECT rol.Id_rol, rol.tipo_rol, usuario.Id_usuario, usuario.nombre1_usuario, usuario.nombre2_usuario, 
    usuario.apellido1_usuario, usuario.apellido2_usuario, documento.Id_documento, documento.tipo_documento, usuario.numero_documento_usuario, 
    usuario.correo_usuario, usuario.numero_telefono_usuario, usuario.contraseña_usuario, usuario.estado_usuario, tienda.Id_tienda, tienda.tienda 
    FROM usuario INNER JOIN documento ON usuario.documento_id_documento = documento.Id_documento INNER JOIN tienda ON usuario.tienda_Id_tienda = tienda.Id_tienda 
    INNER JOIN rol_has_usuario ON rol_has_usuario.usuario_Id_usuario=usuario.Id_usuario INNER JOIN rol ON rol.Id_rol=rol_has_usuario.rol_id_rol
    WHERE usuario.correo_usuario = '$correo' AND usuario.contraseña_usuario = '$contrasena'")
    or die(mysqli_error($conect));
    if ($regis = mysqli_fetch_array($registros)) {
        $rol = $regis['Id_rol'];
        $estado = $regis['estado_usuario'];

        if ($rol == 1 and $estado == 1) {
            $_SESSION['login'] = $correo;
            $_SESSION['Id_usuario'] = $regis['Id_usuario'];
            $_SESSION['nom1_usuario'] = $regis['nombre1_usuario'];
            $_SESSION['nom2_usuario'] = $regis['nombre2_usuario'];
            $_SESSION['ape1_usuario'] = $regis['apellido1_usuario'];
            $_SESSION['ape2_usuario'] = $regis['apellido2_usuario'];
            $_SESSION['num_documen_usuario'] = $regis['numero_documento_usuario'];
            $_SESSION['email_usuario'] = $regis['correo_usuario'];
            $_SESSION['num_tele_usuario'] = $regis['numero_telefono_usuario'];
            $_SESSION['contra_usuario'] = $regis['contraseña_usuario'];
            $_SESSION['estado_usuario'] = $estado;

            $_SESSION['Id_documento'] = $regis['Id_documento'];
            $_SESSION['tipo_document'] = $regis['tipo_documento'];

            $_SESSION['Id_rol'] = $rol;
            $_SESSION['tip_rol'] = $regis['tipo_rol'];

            $_SESSION['Id_tienda'] = $regis['Id_tienda'];
            $_SESSION['nom_tienda'] = $regis['tienda'];

            echo"<script>self.location='../INTERFAZ ADMI/InterAdmi.php';</script>";
        }
        else if ($rol == 2 and $estado == 1) {
            $_SESSION['login'] = $correo;
            $_SESSION['Id_usuario'] = $regis['Id_usuario'];
            $_SESSION['nom1_usuario'] = $regis['nombre1_usuario'];
            $_SESSION['nom2_usuario'] = $regis['nombre2_usuario'];
            $_SESSION['ape1_usuario'] = $regis['apellido1_usuario'];
            $_SESSION['ape2_usuario'] = $regis['apellido2_usuario'];
            $_SESSION['num_documen_usuario'] = $regis['numero_documento_usuario'];
            $_SESSION['email_usuario'] = $regis['correo_usuario'];
            $_SESSION['num_tele_usuario'] = $regis['numero_telefono_usuario'];
            $_SESSION['contra_usuario'] = $regis['contraseña_usuario'];
            $_SESSION['estado_usuario'] = $estado;

            $_SESSION['Id_documento'] = $regis['Id_documento'];
            $_SESSION['tipo_document'] = $regis['tipo_documento'];

            $_SESSION['Id_rol'] = $rol;
            $_SESSION['tip_rol'] = $regis['tipo_rol'];

            $_SESSION['Id_tienda'] = $regis['Id_tienda'];
            $_SESSION['nom_tienda'] = $regis['tienda'];

            echo"<script>self.location='../INTERFAZ CLIENTE/InterCliente.HTML;</script>";
        }
        else {
            echo"<script language= 'javascript' >
            alert('Datos incorrectos porfavor verifique Usuario y/o Contraseña')
            self.location='../../PUBLIC/login.HTML';
            </script>";
        }
    }
    else {
        echo"<script language= 'javascript' >
        alert('Datos incorrectos porfavor verifique Usuario y/o Contraseña')
        self.location='../../PUBLIC/login.HTML';
        </script>";
    }
?>