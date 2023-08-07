
const AboutusComponent = {

    template: `
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
    `,
    data(){
        return{
            
        }
    }
}

export default AboutusComponent;