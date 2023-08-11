<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/galeria.css')}}">
</head>
<body>
    <div id="app">
        <div class="row w-100">
            <div class="col-lg-5 d-flex flex-column justify-content-center p-5" style="background: rgba(0,0,0,.8); height: 100vh;">
                <h2 class="fs-1 fw-bolder mb-5 text-white text-center" style="font-family: Arial;">GALERIA</h2>
                <h2 class="fw-bolder text-white">ENCUENTRA EL DISEÑO DE TUS SUEÑOS</h2>
                <strong class="mt-3" style="color: gray;">Explora nuestro catalogo.</strong>
                <span class="mt-2" style="color: white;">Tu satisfacción es nuestra prioridad, y nuestro equipo de expertos estará encantado de asesorarte en cada paso del camino, asegurándose de que encuentres el diseño que se adapte perfectamente a tu estilo.</span>
                <a href="index.html" class="btn btn-sm btn-primary mt-5 w-25">volver al inicio</a>
            </div>
            <div class="col-lg-7 p-5" style="height: 100vh;">
                <div class="row" style="overflow:auto; height: 100%;" id="gallery">
                        <template v-for="(image) in productImages">
                            <div class="col-lg-4 m-0 p-2 box-img-galery">
                                <img :src="image.product_image_url" alt="img" class="rounded" style="width: 100%; height: 300px; margin-bottom: 3px; object-fit: cover;">
                                <div class="img-desc">
                                    <button class="btn" v-on:click="fullScreen(image.product_image_url)">Pantalla completa<i class="fas fa-images ps-2"></i></button>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fullScreen d-none d-flex justify-content-center align-items-center">
        <button v-on:click="myCloseButton" class="closeButton"><i class="fas fa-times-circle"></i></button>
        <div class="img-content p-4" style="width: 500px; height: 600px;">
        </div>
    </div>
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
    <script src="js/galeria.js"></script>
    <script type="module">
        import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'
        const app = createApp({
            data() {
                return {
                   productImages: {!! $productImages !!}
                }
            },
            methods: {
                fullScreen: function(data){
                    const fullScreen = document.querySelector('.fullScreen')
                    const imgContent = document.querySelector('.img-content')
                    const newImage = document.createElement('img')
                    newImage.src = data
                    newImage.classList = 'fullImgScreen'
                    imgContent.appendChild(newImage)
                    fullScreen.classList.remove('d-none')
                },
                myCloseButton: function(){
                    const fullScreen = document.querySelector('.fullScreen')
                    fullScreen.classList.add('d-none')
                    console.log('okokok')
                }
            },
        })

        app.mount('#app');
    </script>
</body>
</html>
