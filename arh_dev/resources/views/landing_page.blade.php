<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/arh_icon_final.png">
    <title>Brandales ARH</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
</head>
<body onload="toggleLoader()">
<div id="content"
     style="min-height: 40rem"
     class="d-flex justify-content-center align-items-center">
    <div id="loader"
         class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div id="app" class="w-100 d-none dark-background-pattern">
        <div class="w-100">
            <img src="img/banner_principal.png" alt="" style="width: 100%;">
        </div>
        <nav class="navbar navbar-expand-lg w-100 menu-fixed d-flex justify-content-end" style="background: rgb(0,0,0);">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: aliceblue; font-size: 24px;"><i class="fas fa-bars"></i></span>
            </button>
            <!-- <div class="row w-100 m-0">
                <div class="col-lg-12 d-flex justify-content-center"> -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto" style="margin: auto;">
                    <li class="nav-item active m-0">
                        <a class="nav-link text-white ps-3 pe-4" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item m-0">
                        <a class="nav-link text-white ps-3 pe-4" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item m-0">
                        <a class="nav-link text-white ps-3 pe-4" href="#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item m-0">
                        <a class="nav-link text-white ps-3 pe-4" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link text-white ps-3 pe-4" onclick="toggleLoginModal()">Iniciar Sesión</button>
                    </li>
                </ul>
            </div>
            <!-- </div>
        </div> -->
        </nav>
        <div class="d-flex flex-column justify-content-evenly mt-3" id="floatNav" style="position: fixed; z-index: 5;">
            <div class="mt-1 p-2 d-flex align-items-center justify-content-center rounded-2 " style="background: #2AB824;">
                <i class="fab fa-whatsapp text-white fs-3"></i>
                <a href="https://api.whatsapp.com/send?phone=5565081247" target="_blank" class="ps-2">Whatsapp</a>
            </div>
            <div class="mt-1 p-2 d-flex align-items-center justify-content-center rounded-2" style="background: #1F65C4;">
                <i class="fab fa-facebook-f text-white fs-3"></i>
                <a href="https://www.facebook.com/ARH.acero.inoxidable.y.cristal.templado/?locale=es_LA" target="_blank" class="ps-2">Facebook</a>
            </div>
            <div class="mt-1 p-2 d-flex align-items-center justify-content-center rounded-2" style="background: #EC3315;">
                <i class="fab fa-youtube text-white fs-3"></i>
                <a href="https://www.youtube.com/@barandalesdeaceroinoxidabl3095" target="_blank" class="ps-2">Youtube</a>
            </div>
            <div class="mt-1 p-2 d-flex align-items-center justify-content-center rounded-2" style="background: #8736C7;">
                <i class="fa-solid fa-phone text-white fs-3"></i>
                <a href="tel:5565081247" target="_blank" class="ps-2">55 0834 5632</a>
            </div>
        </div>
        <div class="w-100 m-0" style="height: 100vh;" id="inicio">
            <div class="d-flex flex-column align-items-center justify-content-center" style="padding-top: 20px; backdrop-filter: blur(6px); height: 100%;">
                <div class="w-75 d-flex justify-content-center flex-column">
                    <h1 style="font-family: Arial, Helvetica, sans-serif, serif; font-weight: 600; margin-top: 0px; text-shadow: 3px 3px 3px black;" class="text-center text-white" id="title-h1">
                        BARANDALES DE ACERO INOXIDABLE</h1>
                    <strong class="bg-primary text-white p-5 pt-1 pb-1" style="display: inline-block;margin: 0px auto;">ESPECIALISTAS EN ACERO</strong>
                    <p class="pt-3 fs-4 text-center text-white fw-bolder" style="text-shadow: 3px 3px 3px black;">Nos dedicamos a la fabricación de barandales y pasamanos de acero inoxidable, y/o con cristal templado, barandales curvos, barandales de  escalera y para balcones.</p>
                </div>
                <div class="bg-transparent mt-4 w-100" style="height: 250px; overflow: hidden;">
                    <div class="container" style="height: 100%;">
                        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="3"
                                          space-between="30" free-mode="true" autoplay

                        >
                            <swiper-slide><img class="rounded-2" src="img/img1.jpg" alt=""></swiper-slide>
                            <swiper-slide><img class="rounded-2" src="img/img2.jpg" alt=""></swiper-slide>
                            <swiper-slide><img class="rounded-2" src="img/img4.jpg" alt=""></swiper-slide>
                            <swiper-slide><img class="rounded-2" src="img/img3.jpg" alt=""></swiper-slide>
                            <swiper-slide><img class="rounded-2" src="img/img4.jpg" alt=""></swiper-slide>
                            <swiper-slide><img class="rounded-2" src="img/img1.jpg" alt=""></swiper-slide>
                            <swiper-slide><img class="rounded-2" src="img/img3.jpg" alt=""></swiper-slide>
                            <swiper-slide><img class="rounded-2" src="img/img1.jpg" alt=""></swiper-slide>
                            <swiper-slide><img class="rounded-2" src="img/img2.jpg" alt=""></swiper-slide>
                        </swiper-container>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-info d-flex align-items-center justify-content-center bg-transparent"
             id="servicios">
            <div class="container p-3">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column">
                        <div class="bg-dark bg-opacity-10 rounded-5 p-2">
                            <h2 class="text-white fw-bolder" style="font-size: 50px;">ARH</h2>
                            <p class="text-white">Nos especializamos en la fabricación de barandales y pasamanos de alta calidad,
                                utilizamos acero inoxidable y cristal templado. Nuestro catálogo incluye una amplia variedad de
                                opciones, como barandales curvos, barandales para escaleras y barandales para balcones. Nos
                                enorgullece ofrecer productos duraderos, elegantes y funcionales que cumplen con los más altos
                                estándares de seguridad y diseño.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="video-container" class="d-flex align-items-center rounded">
                            <iframe src="https://www.youtube.com/embed/8BsvbWl69Lw" class="rounded" width="560" height="350" frameborder="0"
                                    allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
                <div class="container mt-5">
                    <h2 style="font-size: 40px; text-align: center; margin-top: 70px; margin-bottom: 40px; color: aliceblue; font-family: Arial, Helvetica, sans-serif;">
                        Productos
                    </h2>
                    <div class="row">
                        <div class="col-lg-4 mt-4 h-auto">
                            <div class="d-flex flex-column align-items-center justify-content-start rounded-2 h-100"
                                 style="background-color: rgb(243, 244, 246);">
                                <img src="img/canceles-para-baños/img-4.jpeg" alt="" style="width: 100%; height: 400px;" class="rounded-2 m-0">
                                <div class="w-100 h-100 d-flex flex-column justify-content-between align-items-center">
                                    <h4 class="fs-3 p-3 pb-1 text-center">Canceles para baño</h4>
                                    <a href="galery.html" class="w-75 btn btn-primary mb-4">Ver catalogo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4 h-auto">
                            <div class="d-flex flex-column align-items-center justify-content-start rounded-2 h-100"
                                 style="background-color: rgb(243, 244, 246);">
                                <img src="img/barandales-de-acero/img-1.jpeg" alt="" style="width: 100%; height: 400px;" class="rounded-2">
                                <div class="w-100 h-100 d-flex flex-column justify-content-between align-items-center">
                                    <h4 class="fs-3 p-3 pb-1 text-center">Barandales de acero inoxidable</h4>
                                    <a href="galery2.html" class="w-75 btn btn-primary mb-4">Ver catalogo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4 h-auto">
                            <div class="d-flex flex-column align-items-center justify-content-start rounded-2 h-100"
                                 style="background-color: rgb(243, 244, 246);">
                                <img src="img/cristal-templado/img-1.jpeg" alt="" style="width: 100%; height: 400px;" class="rounded-2">
                                <div class="w-100 h-100 d-flex flex-column justify-content-between align-items-center">
                                    <h4 class="fs-3 p-3 pb-1 text-center">Barandales de acero con cristal templado</h4>
                                    <a href="galery3.html" class="w-75 btn btn-primary mb-4">Ver catalogo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4 h-auto">
                            <div class="d-flex flex-column align-items-center justify-content-start rounded-2 h-100"
                                 style="background-color: rgb(243, 244, 246);">
                                <img src="img/tapas-cisternas/img-1.jpeg" alt="" style="width: 100%; height: 400px;" class="rounded-2">
                                <div class="w-100 h-100 d-flex flex-column justify-content-between align-items-center">
                                    <h4 class="fs-3 p-3 pb-1 text-center">Tapas para cisterna</h4>
                                    <a href="galery4.html" class="w-75 btn btn-primary mb-4">Ver catalogo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4 h-auto">
                            <div class="d-flex flex-column align-items-center justify-content-start rounded-2 h-100"
                                 style="background-color: rgb(243, 244, 246);">
                                <img src="img/baradales-curvos/img-1.jpeg" alt="" style="width: 100%; height: 400px;" class="rounded-2">
                                <div class="w-100 h-100 d-flex flex-column justify-content-between align-items-center">
                                    <h4 class="fs-3 p-3 pb-1 text-center">Barandales curvos</h4>
                                    <a href="galery5.html" class="w-75 btn btn-primary mb-4">Ver catalogo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4 h-auto">
                            <div class="d-flex flex-column align-items-center justify-content-start rounded-2 h-100"
                                 style="background-color: rgb(243, 244, 246);">
                                <img src="img/pasamanos/img-1.jpeg" alt="" style="width: 100%; height: 400px;" class="rounded-2">
                                <div class="w-100 h-100 d-flex flex-column justify-content-between align-items-center">
                                    <h4 class="fs-3 p-3 pb-1 text-center">Pasamanos de acero inoxidable</h4>
                                    <a href="galery6.html" class="w-75 btn btn-primary mb-4">Ver catalogo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-center p-0"
             style="width: 100%; height: auto; padding-bottom: 60px;"
             id="nosotros">
            <div class="text-white container">
                <h2 class="text-center mb-5" style="font-family: Arial;">¿Porque Nosotros?</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex pb-2">
                            <div class="d-flex align-items-center justify-content-center" id="imgUs">
                                <img src="img/objetivo.png" alt="" style="width: 60px; height: 60px;">
                            </div>
                            <div class="" style="font-family: Arial;">
                                <h3>Mision</h3>
                                <p>Ser una empresa que brinde calidad total y soluciones inmediatas de acuerdo a las necesidades
                                    de nuestros clientes al mejor costo y de manera eficiente.</p>
                            </div>
                        </div>
                        <div class="d-flex pb-2">
                            <div class="d-flex align-items-center justify-content-center" id="imgUs">
                                <img src="img/vision.png" alt="" style="width: 60px; height: 60px;">
                            </div>
                            <div class="" style="font-family: Arial;">
                                <h3>Vision</h3>
                                <p>Ser una compañía altamente competitiva en la fabricación de barandales que satisfaga y supere
                                    la expectativa de nuestros clientes desarrollando nuevas alternativas para un mejor
                                    servicio</p>
                            </div>
                        </div>
                        <!-- <div class="d-flex pb-2">
                            <div class="d-flex align-items-center justify-content-center" id="imgUs">
                                <img src="img/nosotros.png" alt="" style="width: 60px; height: 60px;">
                            </div>
                            <div class="" style="font-family: Arial;">
                                <h3>Nosotros</h3>
                                <p>Fabricamos barandales a precios muy económicos. No utilizamos tornillos ni remaches para las
                                    uniones, en su lugar soldamos con proceso TIG desbastamos y pulimos los bordes para obtener
                                    un acabado satinado.</p>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-6">
                        <p class="text-center fw-bolder">Como trabajamos?</p>
                        <div class="container">
                            <div class="mt-3">
                                <div
                                    style="background-color: #181823; width: 40px; height: 40px; border-radius: 50%; display: inline-block;"
                                    class="text-white text-center fs-4">
                                    1
                                </div>
                                <strong class="fs-5">Cuentanos tu idea.</strong>
                            </div>
                            <div class="mt-3">
                                <div
                                    style="background-color: #181823; width: 40px; height: 40px; border-radius: 50%; display: inline-block;"
                                    class="text-white text-center fs-4">
                                    2
                                </div>
                                <strong class="fs-5">En breve haremos tu cotizacion.</strong>
                            </div>
                            <div class="mt-3">
                                <div
                                    style="background-color: #181823; width: 40px; height: 40px; border-radius: 50%; display: inline-block;"
                                    class="text-white text-center fs-4">
                                    3
                                </div>
                                <strong class="fs-5">Fabricacion de tu producto.</strong>
                            </div>
                            <div class="mt-3">
                                <div
                                    style="background-color: #181823; width: 40px; height: 40px; border-radius: 50%; display: inline-block;"
                                    class="text-white text-center fs-4">
                                    4
                                </div>
                                <strong class="fs-5">Entrega de tu producto.</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-center pb-5 bg-transparent"
             style="width: 100%; height: auto;"
             id="contacto">
            <div class="w-75 h-75">
                <div class="row">
                    <h2 class="text-center mt-5 mb-5 text-white fw-bolder" style="font-family: Arial;">Contactanos</h2>
                    <div class="col-lg-7 col-sm-12">
                        <div class="">
                            <div class="card-body">
                                <h2 class="fw-bolder pb-3 text-white pt-4">Contactanos</h2>
                                <form action="" id="formNosotros">
                                    <input type="text" name="" id="name" class="form-control mb-4" placeholder="Nombre">
                                    <input type="text" name="" id="email" class="form-control mb-4" placeholder="Correo Electronico">
                                    <input type="text" name="" id="phoneNumber" class="form-control mb-4" placeholder="Telefono">
                                    <div class="form-floating mb-4">
                                <textarea class="form-control" placeholder="Deja un comentario" id="floatingTextarea"
                                          style="height: 120px;"></textarea>
                                        <label for="floatingTextarea">Comments</label>
                                    </div>
                                    <input type="submit" value="Enviar" class="btn" style="background-color: #112B3C; color: white;">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 mt-4">
                        <div class="bg-white p-3 rounded-5">
                            <iframe class="rounded-5" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3757.3983138560848!2d-99.26260272560322!3d19.653005033606785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDM5JzEwLjgiTiA5OcKwMTUnMzYuMSJX!5e0!3m2!1ses-419!2smx!4v1687144294916!5m2!1ses-419!2smx"
                                    style="width: 100%; height: 380px; border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="loginModal"
             tabindex="-1"
             aria-labelledby="loginModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header py-1" style="min-height: 10px ">
                        <span class="modal-title fs-6 fw-bold bg-gray-300" id="exampleModalLabel">INICIAR SESIÓN</span>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-10 col-sm-12 mx-auto">
                                <div class="input-group mb-3">
                                    <div class="input-group-text" id="spanInputUser"><i class="bi bi-person-circle"></i></div>
                                    <input id="inputUser" type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="spanInputPassword"><i class="bi bi-key-fill"></i></span>
                                    <input id="inputPassword" type="password" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
                                    <button type="button" class="input-group-text" onclick="toggleSeePassword()"><i id="iconSeePassword" class="bi bi-eye-fill"></i></button>
                                </div>
                                <div>
                                    <a href="#" class="fs-6">¿Olvidaste tu contraseña?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer py-1" style="min-height: 10px">
                        <button type="button" class="btn btn-sm btn-primary" onclick="sendLogin()">
                            <span id="loginButtonSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            <span id="loginButtonText"> Enviar</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="pb-3 pt-3 dark-background-pattern d-flex flex-column align-items-center justify-content-center">
            <div class="row w-100">
                <div class="col-lg-6 col-sm-12 d-flex justify-content-start align-items-center ps-5 img-div">
                    <img src="img/logoARH.jpeg" alt="LOGO ARH">
                </div>
                <div class="col-lg-6 col-sm-12 d-flex justify-content-end align-items-center pe-5">
                    <strong class="text-white pe-4">Todos los derechos reservados &copy; 2023 </strong>
                </div>
            </div>
        </footer>
        <script src="app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
                integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
        <script src="js/barandalesArh.js"></script>
    </div>
</div>
</body>
</html>