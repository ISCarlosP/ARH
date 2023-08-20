
const IncioComponent = {

    template: `
        <div class="w-100 m-0 pb-5" style="height: auto;" id="inicio">
            <div class="d-flex flex-column align-items-center justify-content-center" style="padding-top: 20px; height: 100%;">
                <div class="d-flex justify-content-end" style="width: 95%;" id="content-inicio-info">
                    <div class="info-box d-flex flex-column align-items-start" style="width: 30%;">
                        <h2 class="text-center text-white p-0 m-0" style="font-size: 40px;">
                            Barandales de</h2>
                        <h2 style="font-size: 90px;" class="p-0 m-0">Acero</h2>
                        <h3 style="font-size: 70px;" class="p-0 m-0">inoxidable</h3>
                        <strong class="bg-primary text-white text-center p-5 pt-1 pb-1 w-100" style="display: inline-block; margin: 0px auto;">ESPECIALISTAS EN ACERO</strong>
                        <p class="pt-3 text-justify text-white" style="text-shadow: 3px 3px 3px black; font-size: 18px;">Nos dedicamos a la fabricación de barandales y pasamanos de acero inoxidable, y/o con cristal templado, barandales curvos, barandales de  escalera y para balcones...</p>
                    </div>
                </div>
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="width: 90%">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="d-flex justify-content-between img-carousel">
                               <img class="rounded-2 d-block" src="img/img1.jpg" alt="img" style="width: 22%">
                                <img class="rounded-2 d-block" src="img/img2.jpg" alt="img" style="width: 22%;">
                                <img class="rounded-2 d-block" src="img/img4.jpg" alt="img" style="width: 22%;">
                                <img class="rounded-2 d-block" src="img/img3.jpg" alt="img" style="width: 22%;" v-if="userDevice.mobile() === null">
                            </div>
                        </div>
                        <div class="carousel-item">
                          <div class="d-flex justify-content-between img-carousel">
                               <img class="rounded-2 d-block" src="img/img-1.jpeg" alt="img" style="width: 22%">
                                <img class="rounded-2 d-block" src="img/img-2.jpeg" alt="img" style="width: 22%;">
                                <img class="rounded-2 d-block" src="img/img-4.jpeg" alt="img" style="width: 22%;">
                                <img class="rounded-2 d-block" src="img/img-3.jpeg" alt="img" style="width: 22%;" v-if="userDevice.mobile() === null">
                            </div>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
    `,
    data(){
        return{
            userDevice: new MobileDetect(window.navigator.userAgent),
        }
    }
}

export default IncioComponent;
