<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/img/company_logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <title>Contacto</title>
</head>
<body>
    <!-- BARRA DE NAVEGACION -->
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
                <button class="btn btn-outline-dark" id="goCart">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill" id="numberCart">0</span>
                </button>
            </div>
        </div>
    </nav>
    <!-- HEADER -->
    <header>
        <!-- <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div> -->
    </header>
    <!-- FORMULARIO DE CONTACTO -->
    <section class="py-5">
        <div class="container px-5">
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    </div>
                    <h1 class="fw-bolder"><i class="bi bi-envelope-open-fill" id="icon"></i> Contactanos</h1>
                    <!-- <p class="lead fw-normal text-muted mb-0">Dejanos tu mensaje</p> -->
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <form id="contactForm">

                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" id="name" placeholder="Ingrese su nombre..."
                                    data-sb-validations="required" />
                                <label for="name">Nombre</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                    data-sb-validations="required,email" />
                                <label for="email">Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(11) 15456-7890">
                                <label for="phone">Telefono</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Deje su mensaje aqui..." style="height: 10rem"></textarea>
                                <label for="message">Mensaje</label>
                            </div>
                            <!-- <div class="d-none" id="success">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Se envio</div>
                                </div>
                            </div> -->
                            <p class="visually-hidden" id="err">Todos los campos son obligatorios</p>
                            <button type="button" class="btn btn-dark mt-auto col-sm-12" id="submit" onclick="validateContactForm();">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
    </section>
    <!-- FOOTER -->
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
