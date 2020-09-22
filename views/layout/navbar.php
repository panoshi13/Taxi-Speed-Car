<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Taxi Speed Car</title>
    <link rel="shortcut icon" href="<?= base_url ?>assets/fonts/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url ?>vendor/css/normalize.css">
    <!-- MDB icon -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url ?>vendor/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="<?= base_url ?>vendor/css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="<?= base_url ?>vendor/css/style.css">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/style.css">
    <!-- MDBootstrap Datatables  -->
    <link href="<?= base_url ?>vendor/css/addons/datatables2.min.css" rel="stylesheet">
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm">
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand font-weight-bold" href="#">Taxi Speed Car</a>
            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url ?>">Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url ?>#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url ?>#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url ?>#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url ?>blog/todas">Noticias</a>
                    </li>
                <?php if (isset($_SESSION['verify'])) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                            <?= $_SESSION['verify']->nombre ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item" href="<?= base_url ?>admin/noticia">Mis Noticias</a>
                            <a class="dropdown-item" href="<?= base_url ?>admin/cartilla">Mis Cartillas</a>
                            <a class="dropdown-item" id="cerrar_sesion" href="<?= base_url ?>admin/logout">Cerrar Sesion</a>
                        </div>
                    </li>
                <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>