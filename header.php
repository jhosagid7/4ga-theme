<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet"> -->

    <title><?php wp_title( '|', true, 'right' );?></title>
    <?php wp_head();?>
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluit bg-dark fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/Rigo-white.png" width="30" height="30" class="d-inline-block align-top" alt=""> 4Geeks Academy
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo01">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- End navbar -->

    <!-- Suscrive -->
    <div class="container-fluid suscrive d-flex flex-column justify-content-center align-items-center">
        <div class="text-white text-center title">
            <h1 class="display-1 bold">4Geeks Academy</h1>
        </div>
        <form action="" class="form-inline flex-column flex-sm-row">
            <div class="form-group mr-3">
                <input type="text" placeholder="Nombre" class="form-control">
            </div>
            <div class="form-group mr-3">
                <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary" value="Suscrive">
            </div>
        </form>
    </div>
    <!-- End suscrive -->