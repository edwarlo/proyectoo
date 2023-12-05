<?php

    if (!empty($_POST["registro_pago"])) {
        if (empty($_POST["forma__pago"])) {
            echo '<div class="alerta">Uno de los campos está vacío</div>';
        } else{
            $forma = $_POST["forma__pago"];

            $sql = $conect -> query("INSERT INTO forma_pago(metodo_pago) VALUES ('$forma')");
            
            if ($sql == 1) {
                echo 'Solicitud registrada';
            } else {
                echo 'Error en solicitud';
            }
        }
    }
?>