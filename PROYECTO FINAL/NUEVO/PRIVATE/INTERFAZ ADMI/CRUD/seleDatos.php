<?php
 
    require '../../PHP/conexion/conexion.php';

    $columnas = ['Id_rol', 'tipo_rol', 'Id_usuario', 'nombre1_usuario',	'nombre2_usuario', 'apellido1_usuario',	
    'apellido2_usuario', 'Id_documento', 'tipo_documento', 'numero_documento_usuario', 'correo_usuario',	
    'numero_telefono_usuario', 'contraseña_usuario', 'estado_usuario', 'Id_tienda',	'tienda'];

    $columnasWhere = ['numero_documento_usuario'];


    $numeroDocumento = isset($_POST['referencia__documento']) ? $conect ->real_escape_string($_POST['referencia__documento']) : null;

    $where = '';
    
    if ($numeroDocumento != null) {
        $where = "WHERE (";

        $contador = count($columnasWhere);
        for ($i = 0; $i < $contador; $i++) {
            $where .= $columnasWhere[$i] . " LIKE '%". $numeroDocumento . "%' OR ";
        }
        $where = substr_replace($where, "", -3);
        $where .= ")";
    }

    $registros = "SELECT " . implode(", ", $columnas) . " FROM usuario INNER JOIN documento ON usuario.documento_id_documento = documento.Id_documento INNER JOIN tienda ON usuario.tienda_Id_tienda = tienda.Id_tienda 
    INNER JOIN rol_has_usuario ON rol_has_usuario.usuario_Id_usuario=usuario.Id_usuario INNER JOIN rol ON rol.Id_rol=rol_has_usuario.rol_id_rol $where ";


    $resultados = $conect -> query($registros); 
    $numeroFilas =  $resultados -> num_rows;
    $html = '';

    if ($numeroFilas > 0) {
        while ($fila = $resultados -> fetch_assoc()) {
    
            $html    .= '<tr>';
            $html    .= '<td>' . $fila['Id_usuario'] . '</td>';
            $html    .= '<td>' . $fila['nombre1_usuario'] . '</td>';
            $html    .= '<td>' . $fila['nombre2_usuario'] . '</td>';
            $html    .= '<td>' . $fila['apellido1_usuario'] . '</td>';
            $html    .= '<td>' . $fila['apellido2_usuario'] . '</td>';
            $html    .= '<td>' . $fila['tipo_documento'] . '</td>';
            $html    .= '<td>' . $fila['numero_documento_usuario'] . '</td>';
            $html    .= '<td>' . $fila['correo_usuario'] . '</td>';
            $html    .= '<td>' . $fila['numero_telefono_usuario'] . '</td>';
            $html    .= '<td>' . $fila['tipo_rol'] . '</td>';
            $html    .= '<td>' . $fila['tienda'] . '</td>';
            $html    .= '<td><a class="eli" href="registro.HTML">Eliminar</a></td>';
            $html    .= '<td><a href="actualizar.HTML">Editar</a></td>';
            $html    .= '</tr>';
        }
    }else {
        $html  .= '<tr>';
        $html  .= '<td colspan ="13">Sin resultados<td>';
        $html  .= '</tr>';
    }
    echo json_encode($html, JSON_UNESCAPED_UNICODE); 
?>