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
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

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

        <!-- Pagina de Inicio-->
            <inicio-component></inicio-component>
        <!-- Pagina de Inicio end -->
        <!-- Pagina Servicios -->
            <services-component :products="products"></services-component>
        <!-- Pagina Servicios end -->
        <!-- Pagina About Us -->
            <aboutus-component></aboutus-component>
        <!-- Pagina About Us end-->
        <!-- Pagina de contacto Component-->
            <contact-component :routes="routes"></contact-component>
        <!-- Pagiga de contacto Component end -->
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
                                    <input id="inputUser" v-model="user.username" type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="spanInputPassword"><i class="bi bi-key-fill"></i></span>
                                    <input id="inputPassword" v-model="user.password" type="password" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
                                    <button type="button" class="input-group-text" onclick="toggleSeePassword()"><i id="iconSeePassword" class="bi bi-eye-fill"></i></button>
                                </div>
                                <div>
                                    <a href="#" class="fs-6">¿Olvidaste tu contraseña?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer py-1" style="min-height: 10px">
                        <button type="button" class="btn btn-sm btn-primary" v-on:click="logInSession">
                            <span id="loginButtonSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            <span id="loginButtonText">Enviar</span>
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
        <script src="{{asset('js/app.js')}}"></script>
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
        <script src="{{asset('js/barandalesArh.js')}}"></script>
        <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
        <script type="module">
            import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'
            import ContactComponent from "/js/components/ContactComponent.js"
            import AboutusComponent from "/js/components/AboutusComponent.js"
            import ServicesComponent from "/js/components/ServicesComponent.js"
            import InicioComponent from "/js/components/InicioComponent.js"

            const app = createApp({
              data() {
                return {
                    products: {!! $products !!},
                    routes: {!! $routes !!},
                    user: {
                        username: '',
                        password: ''
                    }
                }
              },
              methods: {
                  logInSession: function(){
                      const { username, password } = this.user
                      axios.post('url', { username, password })
                          .then(response => {
                              console.log(response)
                          })
                          .catch(err => {
                              console.log(err)
                          })
                  }
              },
            })

            app.component('aboutus-component', AboutusComponent);
            app.component('contact-component', ContactComponent);
            app.component('services-component', ServicesComponent);
            app.component('inicio-component', InicioComponent);
            app.mount('#app');
          </script>
    </div>
</div>
</body>
</html>
