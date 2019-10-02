<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Robotics</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body>
<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="<?=base_url()?>"><img src="img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="<?=base_url()?>">Principal</a></li>
                    <li class="menu-has-children" style="color: white"><a >Categoria A</a>
                        <ul>
                            <li><a href="<?=base_url()?>Ainicial">Inicial</a></li>
                            <li><a href="<?=base_url()?>Aprincipiante">Principiante</a></li>
                            <li><a href="<?=base_url()?>Aintermedia">Intermedia</a></li>
                            <li><a href="<?=base_url()?>Aavanzada">Avanzada</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children" style="color: white"><a >Categoria B</a>
                        <ul>
                            <li><a href="<?=base_url()?>Bintermedia">Intermedia</a></li>
                            <li><a href="<?=base_url()?>Bavanzada">Avanzada</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children" style="color: white"><a >Categoria C</a>
                        <ul>
                            <li><a href="<?=base_url()?>Cprincipiante">Principiante</a></li>
                            <li><a href="<?=base_url()?>Cintermedia">Intermedia</a></li>
                            <li><a href="<?=base_url()?>Cavanzada">Avanzada</a></li>
                        </ul>
                    </li>
                    <?php
                    if (isset($_SESSION['user'])){
                        echo "<li><a href='".base_url()."Admin/logout'>Salir </a></li>";
                    }
                    ?>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

