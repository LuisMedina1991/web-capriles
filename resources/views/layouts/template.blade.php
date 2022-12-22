<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IMPORTADORA CAPRILES</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/llantas.png" />
        <!-- Font Awesome icons (free version)-->
        <link href="css/app.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="importadora-capriles">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#importadora-capriles">Importadora Capriles</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-danger text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#productos">Productos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#acerca_de_nosotros">Acerca de Nosotros</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contactanos">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-danger text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="img/LOGO3.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Importadora de Llantas</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fab fa-empire"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Ventas al por mayor y menor</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="productos">
            <div class="container">
                
                @yield('content')
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Productos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-store-alt"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/GOODYEAR-265-70R16.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/DORADO-235-55R19.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/KORYO-215-60R16.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/BOSSWAY-315-80R22.5.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/INVOVICK-265-65R17.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/ZEXTOUR-185-65R14.jpg" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-danger text-white mb-0" id="acerca_de_nosotros">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Quien somos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-building"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Somos Capriles. Importadora de llantas desde 1983. Contamos con variedad de medidas para el sector agricola, industrial y de transporte.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Trabajamos con tecnologia india, americana, japonesa y china. Con Capriles todo marcha sobre ruedas!!!</p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://api.whatsapp.com/send?phone=59172127779">
                        <i class="fab fa-whatsapp me-2"></i>
                        Haz tu consulta!!
                    </a>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contactanos">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contactanos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-envelope-open-text"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        
                        <form id="contactForm" data-sb-form-api-token="a89c8eac-4eb6-4ae1-aa15-b62f868534f5">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" data-sb-validations="required" />
                                <label for="name">Nombre completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Se requiere un nombre.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" data-sb-validations="required,email" />
                                <label for="email">Correo electronico</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Se requiere un correo.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">El correo no es valido.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" data-sb-validations="required" />
                                <label for="phone">Numero de telefono</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Se requiere un numero de telefono.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Mensaje</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Se requiere un mensaje.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Gracias, tu mensaje ha sido enviado!</div>
                                    Nuestro personal de ventas se pondra en contacto contigo
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Enviar</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Direccion</h4>
                        <p class="lead mb-0">
                            Radial 19, pasando una cuadra del 4to anillo
                            <br />
                            Calle Curupau #4065, Santa Cruz de la Sierra, Bolivia
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Nuestras redes sociales</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/profile.php?id=100087778116435&mibextid=ZbWKwL"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.tiktok.com/@caprilesloficial1983?_t=8YL9oXgOsA1&_r=1"><i class="fab fa-fw fa-tiktok"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/p/CmZEL94tyad/?igshid=YmMyMTA2M2Y="><i class="fab fa-fw fa-instagram-square"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Tecnologia</h4>
                        <p class="lead mb-0">
                            India, Americana, Japonesa y China.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Importadora Capriles</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content bg-warning">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Oferta de la semana</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-hand-holding-usd"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="img/GOODYEAR-265-70R16.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4 font-weight-bold">Hasta Agotar Stock!!!
                                        <br>
                                        Ofertas Todas las Semanas!!!
                                    </p>
                                    <button class="btn btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content bg-warning">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Oferta de la semana</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-hand-holding-usd"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="img/DORADO-235-55R19.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4 font-weight-bold">Hasta Agotar Stock!!!
                                        <br>
                                        Ofertas Todas las Semanas!!!
                                    </p>
                                    <button class="btn btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content bg-warning">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Oferta de la semana</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-hand-holding-usd"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="img/KORYO-215-60R16.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4 font-weight-bold">Hasta Agotar Stock!!!
                                        <br>
                                        Ofertas Todas las Semanas!!!
                                    </p>
                                    <button class="btn btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content bg-warning">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Proximamente</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-hourglass-half"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="img/BOSSWAY-315-80R22.5.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4 font-weight-bold">Hasta Agotar Stock!!!
                                        <br>
                                        Ofertas Todas las Semanas!!!
                                    </p>
                                    <button class="btn btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content bg-warning">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Proximamente</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-hourglass-half"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="img/INVOVICK-265-65R17.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4 font-weight-bold">Hasta Agotar Stock!!!
                                        <br>
                                        Ofertas Todas las Semanas!!!
                                    </p>
                                    <button class="btn btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content bg-warning">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Proximamente</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-hourglass-half"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="img/ZEXTOUR-185-65R14.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4 font-weight-bold">Hasta Agotar Stock!!!
                                        <br>
                                        Ofertas Todas las Semanas!!!
                                    </p>
                                    <button class="btn btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!--SB Forms JS-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
