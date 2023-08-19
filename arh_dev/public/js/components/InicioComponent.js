
const IncioComponent = {

    template: `
        <div class="w-100 m-0" style="height: 100vh;" id="inicio">
            <div class="d-flex flex-column align-items-center justify-content-center" style="padding-top: 20px; height: 100%;">
                <div class="w-75 d-flex justify-content-center flex-column">
                    <h1 style="font-family: Arial, Helvetica, sans-serif, serif; font-weight: 600; margin-top: 0px; text-shadow: 3px 3px 3px black;" class="text-center text-white" id="title-h1">
                        BARANDALES DE ACERO INOXIDABLE</h1>
                    <strong class="bg-primary text-white p-5 pt-1 pb-1" style="display: inline-block; margin: 0px auto;">ESPECIALISTAS EN ACERO</strong>
                    <p class="pt-3 fs-4 text-center text-white fw-bolder" style="text-shadow: 3px 3px 3px black;">Nos dedicamos a la fabricación de barandales y pasamanos de acero inoxidable, y/o con cristal templado, barandales curvos, barandales de  escalera y para balcones.</p>
                </div>
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="width: 90%">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="d-flex justify-content-between">
                               <img class="rounded-2 d-block" src="img/img1.jpg" alt="img" style="width: 22%">
                                <img class="rounded-2 d-block" src="img/img2.jpg" alt="img" style="width: 22%;">
                                <img class="rounded-2 d-block" src="img/img4.jpg" alt="img" style="width: 22%;">
                                <img class="rounded-2 d-block" src="img/img3.jpg" alt="img" style="width: 22%;">
                            </div>
                        </div>
                        <div class="carousel-item">
                          <div class="d-flex justify-content-between">
                               <img class="rounded-2 d-block" src="img/img-1.jpeg" alt="img" style="width: 22%">
                                <img class="rounded-2 d-block" src="img/img-2.jpeg" alt="img" style="width: 22%;">
                                <img class="rounded-2 d-block" src="img/img-4.jpeg" alt="img" style="width: 22%;">
                                <img class="rounded-2 d-block" src="img/img-3.jpeg" alt="img" style="width: 22%;">
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

export default IncioComponent;
