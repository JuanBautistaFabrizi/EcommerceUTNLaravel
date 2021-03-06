<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="img/company_logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link  rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Inicio</title>
</head>

<body>
    <!-- BARRA DE NAVEGACION-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <img src="https://cherny.com.ar/web/image/res.company/1/logo?unique=8b1eb8b" alt="logo de la empresa" class="navbar-brand" width="60px" height="60px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="https://localhost/TP-UTN/tiendaDeRopaUTN/public/tienda">Inicio</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://localhost/TP-UTN/tiendaDeRopaUTN/public/contact">Contacto</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Comprar</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://localhost/TP-UTN/tiendaDeRopaUTN/public/sale"><i class="bi bi-cash-coin"></i>
                                    Ofertas</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="https://localhost/TP-UTN/tiendaDeRopaUTN/public/catalogo"><i class="bi bi-bag"></i>
                                    Catalogo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Cuenta</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://localhost/TP-UTN/tiendaDeRopaUTN/public/login"><i class="bi bi-person-circle"></i> Iniciar
                                    Sesion</a></li>
                            <li><a class="dropdown-item" href="https://localhost/TP-UTN/tiendaDeRopaUTN/public/register"><i class="bi bi-person-plus-fill"></i>
                                    Registrarse</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- HEADER-->
    <header>
        <img  src="https://i.pinimg.com/564x/a6/b7/2e/a6b72ea7df98cd1105ae34821918b4fb.jpg" alt="" width="100%" height="500px">
    </header>
    <!-- SECTION-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="container mb-5">
                <h1 class="display-4 fw-bolder text-dark justify-content-center">Productos Destacados</h1>
                <p class="lead fw-normal text-dark-50 mb-0">Recomendados por nuestros clientes</p>
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://essential.vteximg.com.br/arquivos/ids/353392-1000-1000/302-0017_1.jpg?v=637363853153300000" alt="campera nike" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Campera Nike</h5>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                $20.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./bikes.html">Ver Producto</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://www.opensports.com.ar/media/catalog/product/cache/4769e4d9f3516e60f2b4303f8e5014a8/G/N/GN4269_0.jpg" alt="campera adidas" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Campera Maraton Adidas</h5>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                $25.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./bikes.html">Ver Producto</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://pbs.twimg.com/media/DRcKkk5W0AIoSDl.jpg" alt="remera gucci" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Remera Gucci</h5>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                $12.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./bikes.html">Ver Producto</a></div>
                        </div>
                    </div>
                </div>


    </section>
    <!-- FOOTER-->
    <footer class="text-center text-white bg-dark">
        <div class="text-center p-3 bg-dark">
            <div class="text-center p-3 bg-dark">
            </div>

            <section class="text-center mb-5">
                <a href="https://www.instagram.com/chernygroup/" target="_blank" class="btn btn-outline-dark text-white me-4"><i class="bi bi-instagram"></i> Instagram</a>

                <a href="https://www.facebook.com/chernygroup" target="_blank" class="btn btn-outline-dark text-white me-4"><i class="bi bi-facebook"></i> Facebook</a>

                <a href="" class="btn btn-outline-dark text-white me-4"><i class="bi bi-envelope-fill"></i> Email</a>

                <a href="" class="btn btn-outline-dark text-white me-4"><i class="bi bi-whatsapp"></i> Whatsapp</a>
            </section>
        </div>
    </footer>
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/Bikes.js"></script>
    <script src="js/app.js"></script>
    <script src="js/buy.js"></script>
</body>

</html>
