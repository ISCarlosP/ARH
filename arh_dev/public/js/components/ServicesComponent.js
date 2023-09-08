const ServicesComponent = {
    props: {
        products: {
            type: Array, required: true
        }
    }, template: `
        <div class="d-flex align-items-center justify-content-center bg-transparent"
        id="servicios">
            <div class="container p-3">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column mb-5">
                        <div class="bg-dark bg-opacity-10 rounded-5 p-2" id="servicios_info">
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
                <div id="carouselExampleAutoplaying" class="carousel slide mt-5" data-bs-ride="carousel">
                      <div class="carousel-inner">
                      <template  v-if="userDevice.mobile() === null">
                                   <div class="carousel-item active">
                          <div class="row row-cols-4" style="min-height: 20rem">
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-1.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-2.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-3.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-4.jpg" alt="img"></div>
                        </div>
                        </div>
                                   <div class="carousel-item">
                          <div class="row row-cols-4" style="max-height: 20rem">
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-5.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-6.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-7.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-8.jpg" alt="img"></div>
                        </div>
                        </div>
                                   <div class="carousel-item">
                          <div class="row row-cols-4" style="min-height: 20rem">
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-9.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-10.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-11.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-12.jpg" alt="img"></div>
                        </div>
                        </div>
                                   <div class="carousel-item">
                          <div class="row row-cols-4" style="min-height: 20rem">
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-13.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-14.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-15.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-16.jpg" alt="img"></div>
                        </div>
                        </div>

</template>
                        <template v-if="userDevice.mobile() !== null">
                                   <div class="carousel-item active">
                          <div class="row row-cols-2 h-100" >
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-1.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-2.jpg" alt="img"></div>
                        </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row row-cols-2 h-100">
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-3.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-4.jpg" alt="img"></div>
                        </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row row-cols-2 h-100">
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-5.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-6.jpg" alt="img"></div>
                        </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row row-cols-2 h-100">
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-7.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-8.jpg" alt="img"></div>
                        </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row row-cols-2 h-100">
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-9.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-10.jpg" alt="img"></div>
                        </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row row-cols-2 h-100">
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-11.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-12.jpg" alt="img"></div>
                        </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row row-cols-2 h-100">
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-13.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-14.jpg" alt="img"></div>
                        </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row row-cols-2 h-100">
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-15.jpg" alt="img"></div>
                          <div class="col"><img class="rounded px-2 w-100 h-100" src="img/img-16.jpg" alt="img"></div>
                        </div>
                        </div>
</template>
                      </div>
                    </div>
                <div class="container mt-5 services-container">
                    <h2 style="font-size: 40px; text-align: center; margin-bottom: 40px; color: aliceblue; font-family: Arial, Helvetica, sans-serif;">
                        Productos
                    </h2>
                    <div class="row">
                        <div class="col-lg-4 mt-4 h-auto" v-for="product in products">
                            <div class="d-flex flex-column align-items-center justify-content-start rounded-2 h-100"
                                    style="background-color: rgb(243, 244, 246);">
                                <div style="width: 100%; height: 400px;">
                                    <img :src="product.product_main_image" style="width: 100%; height: 400px; object-fit: cover;" class="rounded-2 m-0">
                                </div>
                                <div class="w-100 h-100 d-flex flex-column justify-content-between align-items-center">
                                    <h4 class="fs-3 p-3 pb-1 text-center">{{ product.product_name }}</h4>
                                    <a :href="'/galeria/' + route" class="w-75 btn btn-primary mb-4" v-on:click="getRoute(product.product_name)">Ver catalogo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `, data() {
        return {
            route: '',
            userDevice: new MobileDetect(window.navigator.userAgent),
        }
    }, methods: {
        getRoute: function (data) {
            let myRoute = data.split(' ')
            let joinRoute = myRoute.join('_')

            this.route = joinRoute
        }
    },
}

export default ServicesComponent;
