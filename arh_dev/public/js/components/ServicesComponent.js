
const ServicesComponent = {
    props: {
        products: {
            type: Array,
            required: true
        }
    },
    template: `
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
                        <div class="col-lg-4 mt-4 h-auto" v-for="product in products">
                            <div class="d-flex flex-column align-items-center justify-content-start rounded-2 h-100"
                                    style="background-color: rgb(243, 244, 246);">
                                <img :src="product.product_main_image" style="width: 100%; height: 400px;" class="rounded-2 m-0">
                                <div class="w-100 h-100 d-flex flex-column justify-content-between align-items-center">
                                    <h4 class="fs-3 p-3 pb-1 text-center">{{ product.product_name }}</h4>
                                    <a href="galery.html" class="w-75 btn btn-primary mb-4">Ver catalogo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `,
    data(){
        return{

        }
    }
}

export default ServicesComponent;