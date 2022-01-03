<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/img/company_logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <title>catalogo</title>
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
                <a href="#cart">
                    <button class="btn btn-outline-dark">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <p class="badge bg-dark text-white ms-1 rounded-pill" id="numberCart">0</p>
                    </button>
                </a>
            </div>
        </div>
    </nav>

    {{-- CATALOGO --}}

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="http://d3ugyf2ht6aenh.cloudfront.net/stores/001/245/791/products/c991d39d-b55c-47d6-a50b-ef3f60c357d1-84d9a9dd6d463fda6716244543899798-640-0.jpg" alt="remera adidas" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Remera Adidas talle L Negro</h5>
                                $9500
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-primary mt-auto" id="1"><i
                                        class="bi bi-cart-plus-fill"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://statics.glamit.com.ar/media/catalog/product/d/s/dsc09074_1.jpg" alt="zapatilla nike" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Zapatilla nike talle 42 azul</h5>
                                $15.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-primary mt-auto" id="2"><i
                                        class="bi bi-cart-plus-fill"></i> </a>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://www.stockcenter.com.ar/on/demandware.static/-/Sites-dabra-catalog/default/dw2e99aaf4/products/UA_3022024-001/UA_3022024-001-1.JPG" alt="zapatilla under armor" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Zapatilla Under Armor talle 45 gris/negro</h5>
                                $18.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-primary mt-auto" id="3"><i class="bi bi-cart-plus-fill"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://static.dafiti.com.ar/p/fila-9127-500394-1-product.jpg"
                            alt="remera fila" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Remera Fila talle S blanco/rojo</h5>
                                $9000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-primary mt-auto" id="4"><i
                                        class="bi bi-cart-plus-fill"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://www.opensports.com.ar/media/catalog/product/cache/4769e4d9f3516e60f2b4303f8e5014a8/G/N/GN4269_0.jpg" alt="campera marathon adidas" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Campera Maraton Adidas talle M gris</h5>
                                $25.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-primary mt-auto" id="5"><i
                                        class="bi bi-cart-plus-fill"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://essential.vteximg.com.br/arquivos/ids/353392-1000-1000/302-0017_1.jpg?v=637363853153300000"
                            alt="campera nike" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Campera Nike talle S rosa/azul</h5>
                                $14.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-primary mt-auto" id="6"><i
                                        class="bi bi-cart-plus-fill"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://pbs.twimg.com/media/DRcKkk5W0AIoSDl.jpg" alt="remera gucci" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Remera Gucci talle XL blanco</h5>
                                $12.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-primary mt-auto" id="7"><i
                                        class="bi bi-cart-plus-fill"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://www.tripstore.com.ar/media/catalog/product/cache/4769e4d9f3516e60f2b4303f8e5014a8/B/V/BV2869-100_0.jpg"
                            alt="campera nike" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Campera Nike talle L blanco/verde</h5>
                                $20.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-primary mt-auto" id="8"><i
                                        class="bi bi-cart-plus-fill"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="cart">

            <header class="bg-white py-5">
                <div class="container px-4 px-lg-5 my-5">
                    <div class="text-center text-dark">
                        <h1 class="display-4 fw-bolder"><i class="bi bi-cart-fill"></i> Carrito</h1>
                        <p class="lead fw-normal text-white-50 mb-0"> </p>
                    </div>
                </div>
            </header>
            <table class="container table table-dark table-white">
                <thead>
                    <tr>
                        <th scope="col">Nº Producto</th>
                        <th scope="col">Nombre De Producto</th>
                        <th scope="col">Precio Unitario</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tr id="container">
                    <th scope="row" id="quantityProduct"></th>
                    <td id="nameProduct"></td>
                    <td id="priceProduct"></td>
                    <td id="total"></td>
                </tr>
                <thead>
                    <tr>
                        <th scope="col"><button class="btn btn-primary ms-lg-4" id="viewTotal">Pagar</button></th>
                        <th scope="col"><button class="btn btn-danger ms-lg-4" id="deleteAll"><i class="bi bi-trash"></i> Vaciar</button></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <!-- <tr id="container">
                    <td id="total"></td>
                    <th scope="row" id="quantityProduct"></th>
                    <td id="nameProduct"></td>
                    <td id="">
                        <div class="text-center" id="buttonContainer"></div>
                    </td>
                </tr> -->
            </table>
        </section>
    </section>
    <!-- FOOTER-->
    <footer class="text-center text-white bg-dark">
        <div class="text-center p-3 bg-dark">
            <div class="text-center p-3 bg-dark">
            </div>

            <section class="text-center mb-5">
                <a href="" class="btn btn-outline-dark text-white me-4"><i class="bi bi-instagram"></i> Instagram</a>

                <a href="" class="btn btn-outline-dark text-white me-4"><i class="bi bi-facebook"></i> Facebook</a>

                <a href="" class="btn btn-outline-dark text-white me-4"><i class="bi bi-envelope-fill"></i> Email</a>

                <a href="" class="btn btn-outline-dark text-white me-4"><i class="bi bi-whatsapp"></i> Whatsapp</a>
            </section>
        </div>
    </footer>
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/tienda.js"></script>
    <script src="js/app.js"></script>

</body>

</html>
