<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/tienda.css')}}">
    <script type="text/javascript" src="{{ asset('js/function.js')}}"></script>
    rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Tienda</title>
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#">
                <img src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30"
                    height="24" class="d-inline-block align-text-top">
                Column Spring
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#solutions">Solutions</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Header-->
    <header>
        <div class="container-lg">
            <div class="row align-items-center">
                <div class="col-md">
                    <h1 class="h1-header">We help tell your brand's story</h1>
                    <h2 class="my-4">The most efficient toolset for business</h2>
                    <a class="btn btn-primary" href="#" role="button">Discover more
                        <i class="las la-angle-right"></i></a>
                </div>
                <div class="col-md">
                    <div class="box-image d-flex justify-content-center align-items-center mt-4 mt-md-0">
                        <img style="width: 43em"  src="https://previews.123rf.com/images/sergeypykhonin/sergeypykhonin1705/sergeypykhonin170500095/79248250-compras-banner-de-boutique-concepto-de-tienda-de-moda-ilustraci%C3%B3n-vectorial.jpg" alt="banner de la tienda" srcset="">

                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="solutions" class="bg-color2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Custom solutions</h2>
                </div>
                <div class="row g-4 mt-3 justify-content-center">
                    <div class="col-sm-6 col-md">
                        <div class="box-image d-flex justify-content-center align-items-center mt-4 mt-md-0">
                            <i class="las la-image"></i>
                        </div>
                        <div class="bg-white text-center px-2 py-4">
                            <h3>Reactive tools</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md">
                        <div class="box-image d-flex justify-content-center align-items-center mt-4 mt-md-0">
                            <i class="las la-image"></i>
                        </div>
                        <div class="bg-white text-center px-2 py-4">
                            <h3>Reactive tools</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md">
                        <div class="box-image d-flex justify-content-center align-items-center mt-4 mt-md-0">
                            <i class="las la-image"></i>
                        </div>
                        <div class="bg-white text-center px-2 py-4">
                            <h3>Reactive tools</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our philosophy</h2>
                </div>
            </div>
            <div class="row mt-3 align-items-center">
                <div class="col-md col-xl-4">
                    <div class="box-image d-flex justify-content-center align-items-center mt-4 mt-md-0">
                        <i class="las la-image"></i>
                    </div>
                </div>
                <div class="col-md col-xl-8">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, dolor maiores. Harum, ratione
                        commodi. Natus, error fugiat alias quam repellendus possimus molestiae sit voluptatem. Deserunt
                        commodi minima eos adipisci esse?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, consectetur sequi,
                        maiores vel laudantium fugit explicabo omnis facilis quisquam excepturi ipsum voluptas
                        perspiciatis fugiat soluta velit suscipit, aspernatur tenetur natus!
                    </p>
                    <a class="btn btn-primary" href="#" role="button">Read more
                        <i class="las la-angle-right"></i></a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
