<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Nos dedicamos a la fabricación de barandales y pasamanos de acero inoxidable, y/o con cristal templado, barandales curvos, barandales de escalera y para balcones. Mejoramos cualquier presupuesto, incluso el nuestro">
    <link rel="icon" type="image/png" href="img/arh_icon_final.png">
    <title>Brandales ARH - Expertos en barandales de acero inoxidable</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Estilos para componentes -->
    <link rel="stylesheet" href="{{asset('css/servicios.css')}}"/>
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
            <img src="img/gallery/banner_principal/banner_principal.png" style="heigth: auto; width: 100%" alt="banner">
        </div>
        <nav class="menu-fixed p-2">
            <!-- <div class="row w-100 m-0">
                <div class="col-lg-12 d-flex justify-content-center"> -->
            <div class="menu_hamburguer_box">
                <button class="menu_hamburguer" v-on:click="showMenu" v-if="showMenuButton">
                    <i class="fas fa-bars"></i>
                </button>
                <button class="menu_hamburguer" v-on:click="hideMenu" v-if="hideMenuButton">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div id="navbarNav">
                <ul class="w-100 p-0 ul_ham_menu" style="margin: auto;">
                    <li class="m-0">
                        <a href="#inicio">Inicio</a>
                    </li>
                    <li class="m-0">
                        <a class="" href="#servicios">Servicios</a>
                    </li>
                    <li class="m-0">
                        <a class="" href="#nosotros">Nosotros</a>
                    </li>
                    <li class="m-0">
                        <a class="" href="#contacto">Contacto</a>
                    </li>
                    <li class=" m-0">
                        <button class="nav-link text-white" onclick="toggleLoginModal()">Iniciar Sesión</button>
                    </li>
                </ul>
            </div>
            <!-- </div>
        </div> -->
        </nav>
        <div class="d-flex flex-column justify-content-evenly mt-3" id="floatNav" style="position: fixed; z-index: 5;">
            <div class="mt-1 p-2 d-flex align-items-center justify-content-center rounded-2 "
                 style="background: #2AB824;">
                <i class="fab fa-whatsapp text-white fs-3"></i>
                <a href="https://api.whatsapp.com/send?phone=5519319856" target="_blank" class="ps-2">Whatsapp</a>
            </div>
            <div class="mt-1 p-2 d-flex align-items-center justify-content-center rounded-2"
                 style="background: #1F65C4;">
                <i class="fab fa-facebook-f text-white fs-3"></i>
                <a href="https://www.facebook.com/ARH.acero.inoxidable.y.cristal.templado/?locale=es_LA" target="_blank"
                   class="ps-2">Facebook</a>
            </div>
            <div class="mt-1 p-2 d-flex align-items-center justify-content-center rounded-2"
                 style="background: #EC3315;">
                <i class="fab fa-youtube text-white fs-3"></i>
                <a href="https://www.youtube.com/@barandalesdeaceroinoxidabl3095" target="_blank"
                   class="ps-2">Youtube</a>
            </div>
            <div class="mt-1 p-2 d-flex align-items-center justify-content-center rounded-2"
                 style="background: #8736C7;">
                <i class="fa-solid fa-phone text-white fs-3"></i>
                <a href="tel:5519319856" target="_blank" class="ps-2">5519319856</a>
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
                                    <div class="input-group-text" id="spanInputUser"><i class="bi bi-person-circle"></i>
                                    </div>
                                    <input id="inputUser"
                                           name="inputUser"
                                           v-model="user.email"
                                           type="text" class="form-control"
                                           placeholder="Usuario"
                                           aria-label="Username"
                                           aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="spanInputPassword"><i class="bi bi-key-fill"></i></span>
                                    <input id="inputPassword"
                                           name="inputPassword"
                                           v-model="user.password"
                                           type="password"
                                           class="form-control" placeholder="Contraseña"
                                           aria-label="Username"
                                           aria-describedby="basic-addon1">
                                    <button type="button" class="input-group-text" onclick="toggleSeePassword()"><i
                                            id="iconSeePassword" class="bi bi-eye-fill"></i></button>
                                </div>
                                <div>
                                    <a href="#" class="fs-6">¿Olvidaste tu contraseña?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer py-1" style="min-height: 10px">
                        <button type="submit" class="btn btn-sm btn-primary"
                                v-on:click="logInSession()">
                            <span id="loginButtonText"> Ingresar</span>
                            <span id="loginButtonSpinner" class="spinner-border spinner-border-sm d-none mx-1"
                                  role="status" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="pb-3 pt-3 dark-background-pattern d-flex flex-column align-items-center justify-content-center">
            <div class="row w-100">
                <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
                    <img src="img/logoARH.jpeg" alt="LOGO ARH">
                </div>
                <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-end text-center">
                    <strong class="text-white">Powered by KIBY &copy; 2023 </strong>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{asset('js/barandalesArh.js')}}"></script>
<script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.5/mobile-detect.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script type="module">
    import {createApp} from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'
    import ContactComponent from "/js/components/ContactComponent.js"
    import AboutusComponent from "/js/components/AboutusComponent.js"
    import ServicesComponent from "/js/components/ServicesComponent.js"
    import InicioComponent from "/js/components/InicioComponent.js"
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'

    const app = createApp({
        data() {
            return {
                products: {!! $products !!},
                routes: {!! $routes !!},
                user: {
                    email: '',
                    password: ''
                },
                showMenuButton: true,
                hideMenuButton: false
            }
        },
        methods: {
            logInSession: function () {
                const {email, password} = this.user
                document.getElementById('loginButtonSpinner').classList.remove('d-none');
                axios.post(this.routes.authenticate, {email, password})
                    .then(response => {
                        if (response.data === 'sesion_iniciada') {
                            location.replace(window.location.origin + '/dashboard');
                            return
                        }
                        document.getElementById('loginButtonSpinner').classList.add('d-none');
                        response.data.exception.forEach(function (error) {
                            toastr.warning(error);
                        })
                        console.warn('Usuario o contraseña incorrectos');
                    })
                    .catch(err => {
                        console.log(err)
                        document.getElementById('loginButtonSpinner').classList.add('d-none');
                    })
            },
            socialMedia: function () {
                const floatNav = document.querySelector('#floatNav')

                floatNav.children[0].addEventListener('mouseover', () => {
                    floatNav.children[0].children[1].style.display = 'block'
                    floatNav.children[1].style.width = '50px'
                    floatNav.children[2].style.width = '50px'
                    floatNav.children[3].style.width = '50px'

                })

                floatNav.children[0].addEventListener('mouseout', () => {
                    floatNav.children[0].children[1].style.display = 'none'
                    floatNav.children[1].style.width = 'auto'
                    floatNav.children[2].style.width = 'auto'
                    floatNav.children[3].style.width = 'auto'
                })

                floatNav.children[1].addEventListener('mouseover', () => {
                    floatNav.children[0].style.width = '50px'
                    floatNav.children[1].children[1].style.display = 'block'
                    floatNav.children[2].style.width = '50px'
                    floatNav.children[3].style.width = '50px'
                })

                floatNav.children[1].addEventListener('mouseout', () => {
                    floatNav.children[0].style.width = 'auto'
                    floatNav.children[1].children[1].style.display = 'none'
                    floatNav.children[2].style.width = 'auto'
                    floatNav.children[3].style.width = 'auto'
                })

                floatNav.children[2].addEventListener('mouseover', () => {
                    floatNav.children[0].style.width = '50px'
                    floatNav.children[1].style.width = '50px'
                    floatNav.children[2].children[1].style.display = 'block'
                    floatNav.children[3].style.width = '50px'
                })

                floatNav.children[2].addEventListener('mouseout', () => {
                    floatNav.children[0].style.width = 'auto'
                    floatNav.children[1].style.width = 'auto'
                    floatNav.children[2].children[1].style.display = 'none'
                    floatNav.children[3].style.width = 'auto'
                })

                floatNav.children[3].addEventListener('mouseover', () => {
                    floatNav.children[0].style.width = '50px'
                    floatNav.children[1].style.width = '50px'
                    floatNav.children[2].style.width = '50px'
                    floatNav.children[3].children[1].style.display = 'block'
                })

                floatNav.children[3].addEventListener('mouseout', () => {
                    floatNav.children[0].style.width = 'auto'
                    floatNav.children[1].style.width = 'auto'
                    floatNav.children[2].style.width = 'auto'
                    floatNav.children[3].children[1].style.display = 'none'
                })

            },
            showMenu: function () {
                let showMenu = document.querySelector('#navbarNav')
                showMenu.style.transform = 'translateX(0%)'
                this.showMenuButton = false
                this.hideMenuButton = true
            },
            hideMenu: function () {
                let showMenu = document.querySelector('#navbarNav')
                showMenu.style.transform = 'translateX(-100%)'
                this.showMenuButton = true
                this.hideMenuButton = false
            }
        },
        mounted() {
            setTimeout(() => {
                this.socialMedia()
            }, 500)
        }
    });

    app.component('aboutus-component', AboutusComponent);
    app.component('contact-component', ContactComponent);
    app.component('services-component', ServicesComponent);
    app.component('inicio-component', InicioComponent);
    app.mount('#app');
</script>
</body>
</html>
