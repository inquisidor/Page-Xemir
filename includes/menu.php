<nav id="bg-color-white" class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar bg-primary">
    <div class="breadcrumb-dn mr-auto">
        <ol class="breadcrumb header-breadcrumb">
            <li><a href="index.php"><img itemprop="logo" src="img/logos/logo.png" class="logoMenuH" alt="logo de la empresa en el menu"></a></li>
        </ol>
    </div>
    <button id="bg-Button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" id="clase1" href="acerca-de-nosotros.php">Acerca de Nosotros</a>
            </li>
            <li class="nav-item dropdown">
                <a id="clase2" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                <div class="dropdown-menu dropdown-primary">
                    <a class="dropdown-item" href="hardware-y-accesorios.php">Hardware y Accesorios</a>
                    <a class="dropdown-item" href="software.php">Software</a>
                </div>
            </li>

            <li class="nav-item">
                <a id="clase4" data-toggle="modal" data-target="#mostrarmodal" class="nav-link" href="#">Contactanos</a>
            </li>

            <li class="nav-item">
                <a id="clase5" data-toggle="modal" data-target="#mostrarmodal1" class="nav-link" href="#">Registrarse/Iniciar Sesión</a>
            </li>  
        </ul>
        <ul class="nav navbar-nav nav-flex-icons ml-auto navbar-right">
            <li class="nav-item ">
                <a id="clase6" class="nav-link" href="#" data-toggle="modal" data-target="#centralModalDanger1"><span class="badge red">0</span> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span class="hidden-sm-down">Carrito</span></a>
            </li>

            <li class="nav-item StyleS">
                 <form> <!--action="" in form-->
                    <input type="search" name="nombre" placeholder="Buscar(Inhabilitado)">
                </form>
            </li>               
        </ul>
    </div>
</nav>
<?php include 'includes/modalesMenu.html' ?>
    <!--<form class="form-inline">
    <input class="form-control mr-sm-2" type="text" placeholder="Buscar (Inhabilitado)" aria-label="Search">
    </form>-->