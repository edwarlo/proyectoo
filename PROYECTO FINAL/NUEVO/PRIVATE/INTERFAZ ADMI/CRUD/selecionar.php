

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../CARPETA CSS/fuente.css">
    <link rel="stylesheet" href="../Inter.css">
    <link rel="stylesheet" href="selecionar.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Información Usuarios</title>
</head>
<body>
    <header>
        <nav class="nav">

            <div class="nav__contenedor">
                <a href="#menu" class="nav__menu">
                    <span ><ion-icon name="menu-outline" class="nav__icono"></ion-icon></span>
                </a>

                <a href="#" class="nav__menu nav__menu--second">
                    <span ><ion-icon name="close-outline" class="nav__icono"></ion-icon></span>
                </a>

                <h1 class="nav__titulo">SOIFL - USUARIOS EXISTENTES</h1>

                <ul class="dropdown" id="menu">
                    <div class="nav__container">

                        <ul class="lista">
            
                            <li class="lista__item lista__item--click">  
                                <div class="lista__boton lista__boton--click">
                                    <span class="lista__img"><ion-icon name="person"></ion-icon></span>
                                    <a class="nav__link">Mi Información</a>
                                    <span class="lista__arrow"><ion-icon name="chevron-forward"></ion-icon></span>
                                </div> 
                                <ul class="lista__mostrar">
            
                                    <li class="lista__inside">
                                        <a href="../MiCuenta.php" class="nav__link nav__link--inside">Mi Cuenta</a>
                                    </li>
            
                                    <li class="lista__inside">
                                        <a href="../cam__contra.html" class="nav__link nav__link--inside">Cambiar Contraseña</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="lista__item">  
                                <div class="lista__boton">
                                    <span class="lista__img"><ion-icon name="person-add"></ion-icon></ion-icon></span>
                                    <a href="registro.php" class="nav__link">Registrar Usuarios</a>
                                </div> 
                            </li>            
                            <li class="lista__item">  
                                <div class="lista__boton">
                                    <span class="lista__img"><ion-icon name="folder-open"></ion-icon></ion-icon></span>
                                    <a href="selecionar.php" class="nav__link">Usuarios Existentes</a>
                                </div> 
                            </li>
                            <li class="lista__item lista__item--click">
                                <div class="lista__boton lista__boton--click">
                                    <span class="lista__img"><ion-icon name="duplicate"></ion-icon></span>
                                    <a class="nav__link">Registro Extra</a>
                                    <span class="lista__arrow"><ion-icon name="chevron-forward"></ion-icon></span>
                                </div>
            
                                <ul class="lista__mostrar">
            
                                    <li class="lista__inside">
                                        <a href="../CRUD EXTRA/tipo__documento.html" class="nav__link nav__link--inside">Registrar Tipo Documento</a>
                                    </li>
            
                                    <li class="lista__inside">
                                        <a href="../CRUD EXTRA/rol.html" class="nav__link nav__link--inside">Registrar Rol</a>
                                    </li>
            
                                    <li class="lista__inside">
                                        <a href="../CRUD EXTRA/tienda.html" class="nav__link nav__link--inside">Registrar Tienda</a>
                                    </li>
                                    <li class="lista__inside">
                                        <a href="../CRUD EXTRA/forma__pago.html" class="nav__link nav__link--inside">Registrar Forma Pago</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="lista__item lista__item--click">
                                <div class="lista__boton lista__boton--click">
                                    <span class="lista__img"><ion-icon name="people"></ion-icon></span>
                                    <a href="../contacto.html" class="nav__link">Contacto</a>
                                    </div>
                            </li>            
                            <li class="lista__item">  
                                <div class="lista__boton">
                                    <span class="lista__img"><ion-icon name="exit"></ion-icon></span>
                                    <a href="../cerrarsesion.php" class="nav__link">Cerrar Sesión</a>
                                </div> 
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>       
        </nav>
    </header>


    <div class="body__caja">    
        <div class="contenedor__principal">
            <div class="contendor__buscar">
                
                <div class="dato" >
                    <div class="text__label">
                        <label>Numero Documento: <font color="red">*</font></label>
                    </div>
                    <div class="text__input">
                    <form action="" method="post">
                        <input type="text" name="referencia__documento" id="referencia__documento" placeholder="Ingrese Numero Documento">
                    </form>
                    </div>
                </div>
                
            </div>
            <div class="contenedor__tabla">
            <table>
                <thead>
                    <tr>
                        <th class='id'>ID</th>
                        <th>PRIMER NOMBRE</th>
                        <th>SEGUNDO NOMBRE</th>
                        <th>PRIMER APELLIDO</th>
                        <th>SEGUNDO APELLIDO</th>
                        <th>TIPO DOCUMENTO</th>
                        <th>N° DOCUMENTO</th>
                        <th>CORREO</th>
                        <th>TELEFONO</th>
                        <th>ROL</th>
                        <th>NOMBRE TIENDA</th>
                        <th>ELIMINAR</th>
                        <th class='edit'>EDITAR</th>
                    </tr>
                </thead>
                <tbody id="content">

                </tbody>
            </table>

            <script>

                traerDatos()
                
                document.getElementById("referencia__documento").addEventListener("keyup", traerDatos);   

                function traerDatos() {
                    let input = document.getElementById("referencia__documento").value
                    let content = document.getElementById("content")
                    let url = "seleDatos.php"
                    let formaData = new FormData()
                    formaData.append('referencia__documento', input)

                    fetch(url, {
                        method: "POST",
                        body: formaData
                    }).then(response => response.json())
                    .then(data => {
                        content.innerHTML = data
                    }).catch(err => console.log(err))
                }
            </script>
            </div>
        </div>
    </div>

    <script src="../InterAdmi.js"></script>

</body>
</html>