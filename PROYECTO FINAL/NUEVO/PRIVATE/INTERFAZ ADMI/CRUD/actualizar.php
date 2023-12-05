<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../CARPETA CSS/fuente.css">
    <link rel="stylesheet" href="../Inter.css">
    <link rel="stylesheet" href="actualizar.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Actualizar Usuario</title>
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

                <h1 class="nav__titulo">SOIFL - ACTUALIZAR</h1>

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


    <div class="contenedor__actualizar">
        <p>NOTA: Ingrese el número de documento del usuario actualizar</p>
        <div class="actuali">
            <form action="$" method="post">
                <div class="dato__document" id="numero__document">
                    <input class="campo__texto"  type="text" required name="numero__documento"  placeholder=" ">
                    <label>Numero Documento</label><font color="red"> *</font>
                </div>
                <div class="dato"  id="content2">
                    <input class="campo__texto"  type="text" required name="primer__nombre"  placeholder=" ">
                    <label>Primer Nombre</label><font color="red"> *</font>
                </div>
                <div class="dato" id="content1">
                    <input class="campo__texto"  type="text" required name="segundo__nombre"  placeholder=" ">
                    <label>Segundo Nombre</label>
                </div>
                <div class="dato" id="content2">
                    <input class="campo__texto"  type="text" required name="primer__apellido"  placeholder=" ">
                    <label>Primer Apellido</label><font color="red"> *</font>
                </div>
                <div class="dato" id="content1">
                    <input class="campo__texto"  type="text" required name="segundo__apellido"  placeholder=" ">
                    <label>Segundo Apellido</label><font color="red"> *</font>
                </div>
                <div class="select" id="content2">
                    <label>Tipo Documento: </label>
                    <select name="tipo__documento" id="tipo__documento" required>

                    </select><font color="red"> *</font>
                </div>
                <div class="dato" id="content1">
                    <input class="campo__texto"  type="email required" name="correo"  placeholder=" ">
                    <label>Correo</label><font color="red"> *</font>
                </div>
                <div class="dato" id="content2">
                    <input class="campo__texto"  type="text" required name="numero__telefono"  placeholder=" ">
                    <label>Numero Telefono</label><font color="red"> *</font>
                </div>
                <div class="dato" id="content1">
                    <input class="campo__texto"  type="passw requiredord" name="contraseña"  placeholder=" ">
                    <label>Contraseña</label><font color="red"> *</font>
                </div>
                <div class="dato" id="content2">
                    <input class="campo__texto"  type="email required" name="confirmar__contraseña" placeholder=" ">
                    <label>Confirmar Contraseña</label><font color="red"> *</font>
                </div>
                <div class="dato" id="content1">
                    <input class="campo__texto"  type="text" required name="nombre__tienda"  placeholder=" ">
                    <label>Nombre Tienda</label><font color="red"> *</font>
                </div>
                <div class="select" id="content2">
                    <label >Rol: </label>
                    <select name="rol" id="rol" required>
                        
                    </select><font color="red"> *</font>
                </div>
                    <input type="button" value="Actualizar" class="btn__actualizar">
            </form>
        </div>
    </div>


    <script src="../InterAdmi.js"></script>
</body>
</html>