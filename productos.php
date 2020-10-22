<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&family=Vollkorn&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cedf025736.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <title>Vie Nature Market</title>

    <!-- Favicons -->
    <link href="img/favicon.ico" rel="icon">
    <link href="img/favicon.png" rel="favicon-icon">
</head>

<body class="fondo-portada">

    <!-- Barra navegacion -->

    <header>
        <nav class="container-fluid navbar navbar-icon-top navbar-expand-lg navbar-dark fondonav fixed-top ">
            <a id="marca" class="navbar-brand" href="index.php"><img class="img-fluid logos logo" src="img/logo.jpeg" alt="logo Vie"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"> Inicio </i><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="productos.php"><i class="fas fa-box-open"> Productos </i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php"><i class="fas fa-address-book"> Contacto </i></a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    <main>
        <section class="container">

            <!-- identidad sitio -->

            <div class="container col-lg-9 col-md-6 mt-5 mb-4 justify-content-center text-center pt-5">
                <img class="pt-5 img-fluid logomain" src="img/main.png" alt="logo Vie" style="  height: 250px; width: 220px; border-radius: 800px;">

                <blockquote class="blockquote">
                    <p class="mt-2 mb-0 text-light">Tienda de productos naturales donde tu salud viene en primer lugar</p>

                </blockquote>
            </div>
        </section>

        
        <section class="d-flex">
        <div class="col-lg-3 hidde-res">
                <div class="side card card-refine pt-0 mt-0 sidebar-parent-cate">
                    <div class="card-content">
                        <h4 class="card-title mh-n">Subcategorías <i class="fa fa-angle-down"></i></h4>
                        <div class="panel panel-default panel-rose ">
                            <div id="collapseMarca" class="panel-collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body pl-0 pr-0 pt-0">
                                    <li><a href="#" class="menu-item waves-effect waves-light"><i class="fa fa-caret-right" aria-hidden="true"></i> Frutos secos & más</a></li>
                                    <li><a href="#" class="menu-item waves-effect waves-light"><i class="fa fa-caret-right" aria-hidden="true"></i> Barritas y snacks</a></li>
                                    <li><a href="#" class="menu-item waves-effect waves-light"><i class="fa fa-caret-right" aria-hidden="true"></i> Dulces, mermeladas & más</a></li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/productos/cococubo.jpg" class="card-img-top" alt="img/productos/panal.jpg">
                <div class="card-body">
                    <h5 class="card-title">Coco en Cubos</h5>
                    <p class="card-text">El coco atesora un montón de propiedades beneficiosas para nuestro organismo: bactericida, antioxidante, anti parasitario, protege nuestro hígado, estimula nuestro...</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><p class="descuento">$255</p></li>   
                </ul>
                <div class="card-body">
                <a href="#" class="text-primary card-link">Detalles</a>
                <a href="#" class="text-primary card-link">Añadir al carrito</a>
                </div>
            </div>
            <div class="card ml-5" style="width: 18rem;">
                <img src="img/productos/chocostevia.jpg" class="card-img-top" alt="img/productos/panal.jpg">
                <div class="card-body">
                    <h5 class="card-title">Chocolate Mapsa Semi Amargo con Stevia</h5>
                    <p class="card-text"><p>Grande 100 Grs.</p> <p>Chocolate semiamargo sin azúcar.</p> <p>Libre de Gluten. </p><p>Alimento dietético de bajo valor glucídico.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><p class="descuento">$289</p></li>   
                    
                </ul>
                <div class="card-body">
                <a href="#" class="text-primary card-link">Detalles</a>
                <a href="#" class="text-primary card-link">Añadir al carrito</a>
                </div>
            </div>
            <div class="card ml-5   " style="width: 18rem;">
                <img src="img/productos/panal.jpg" class="card-img-top" alt="img/productos/panal.jpg">
                <div class="card-body">
                    <h5 class="card-title">Miel en Panal Nectar de Los Dioses</h5>
                    <p class="card-text">El panal de miel Néctar de los Dioses 100% miel de abeja, es producido por nuestra cabaña apícola; la cual...</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><p class="precio">$579</p><p class="descuento">$499</p></li>   
                    
                </ul>
                <div class="card-body">
                <a href="#" class="text-primary card-link">Detalles</a>
                <a href="#" class="text-primary card-link">Añadir al carrito</a>
                </div>
            </div>
            
        </section>
    </main>
    <footer>
        <div class="p-3 mt-3 mb-2 fondofooter text-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm text-center">
                        <h4>Programacion Web II</h4>
                        <h5>Integrantes Grupo 6</h5>
                        <p>Santiago Portillo<br> Adriana Vasquez <br> Lucena Enya Beatriz.</p>

                    </div>

                    <div class="col">

                        <h4 class="h3">Ayuda</h4>
                        <ul class="footer-menu">
                            <li class="footer-menu-item">Cómo comprar</li>
                            <li class="footer-menu-item">Medio de pago</li>
                            <li class="footer-menu-item"> Politica de cambio</li>



                        </ul>


                    </div>

                    <div class="col-sm text-center">
                        <h6>Seguinos en las redes sociales</h6>
                        <ul class="justify-content-center list-group list-group-horizontal redes ">

                            <li class="list-group-item fondofooter border-0">
                                <a href="https://www.facebook.com/" target="new">
                                    <i class="fab fa-facebook-f"></i>

                                </a>
                            </li>
                            <li class="list-group-item fondofooter border-0">
                                <a href="https://www.twitter.com/" target="new">
                                    <i class="fab fa-twitter"></i>

                                </a>
                            </li>
                            <li class="list-group-item fondofooter border-0">
                                <a href="https://www.instagram.com/" target="new">
                                    <i class="fab fa-instagram"></i>

                                </a>
                            </li>
                            <li class="list-group-item fondofooter border-0">
                                <a href="https://www.youtube.com.ar/" target="new">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>


            <div class="col-sm text-center">

                <span>Medios de pago</span>

                <span><img class="mediopago" src="img/medio.jpg"> </span>
            </div>
            <div class="col">



            </div>

            <span class="copy">&copy; Copyright 2020 Escuela de Arte Multimedial Da Vinci - Segundo Cuatrimestre</span>
        </div>

    </footer>

</body>

</html>