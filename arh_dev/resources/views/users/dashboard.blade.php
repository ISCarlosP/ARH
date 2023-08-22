<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="icon" type="image/png" href="img/arh_icon_final.png">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <title>ARH Dashboard</title></head>
<body>
<div id="app" class="d-flex justify-content-center"
     style="background-image: url('/img/subtle-prism (1).svg'); background-repeat: no-repeat; min-height: 63rem; z-index: 0">
    <div id="" class="w-100">
        <div class="row m-0 p-0">
            <div class="col-12 d-flex justify-content-start py-2 shadow bg-white sticky-top">
                <button class="btn btn-sm fs-5 mx-2"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#userMenu">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="w-100 d-flex align-items-center justify-content-end">
                    <span class="fw-bold">ARH DASHBOARD</span>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="tab-content w-100 h-100"
                     id="dashboardTabContent">
                    <div class="tab-pane fade show active"
                         id="visitDetailContent"
                         role="tabpanel">
                        <!--Visit cards-->
                        <div class="row mx-0 my-2 p-0">
                            <div class="col-sm-6 col-lg-3 my-2 mx-auto"
                                 v-for="card in cardsData">
                                <div class="card shadow">
                                    <div class="card-body d-flex p-0 d-fle rounded"
                                         :style="'border: ' + card.hex +' solid .15rem'">
                                        <div class="row w-100">
                                            <div class="col-2">
                                                <div class="h-100 "
                                                     :style="'max-width: 1rem; min-width: 1rem; min-height: 5rem; background-color:' + card.hex +';'"></div>
                                            </div>
                                            <div class="col-10 mb-1">
                                                <div class="row">
                                                    <div class="col-2 text-center d-flex align-items-center">
                                                        <i :class="card.icon_class"
                                                           style="font-size: 3.5rem"></i>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="row w-100">
                                                            <div class="col-12 text-center">
                                                                <span class="fw-bolder fs-1 text-secondary"
                                                                      v-text="card.value"></span>
                                                            </div>
                                                            <div class="col-12 text-center">
                                                                <span class="fw-bold text-secondary"
                                                                      v-text="card.name"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="rowWeekVisit" class="row my-3 d-none">
                            <div class="col-12">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div id="weeklyVisitsChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Month visits chart-->
                        <div id="rowMonthVisit" class="row my-3 d-none">
                            <div class="col-12">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div id="monthVisitChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="loadingVisitData" class="row my-5">
                            <div class="col-3 mx-auto d-flex justify-content-center">
                                <div class="fs-2 text-secondary">Cargando
                                    <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade"
                         id="mailContent"
                         role="tabpanel">
                        <div class="w-100 text-center">
                            <div class="row my-3">
                                <div class="col-lg-3 my-2 mx-auto"
                                     v-for="message in messages">
                                    <div class="card shadow h-100">
                                        <div class="card-header">
                                            <span class="fw-bold fs-4"
                                                  v-text="'Mensaje: #' + message.message_id"></span>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-lg-center">
                                                <div class="w-100">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <span class="fw-bolder text-secondary">NOMBRE:</span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-bold" v-text="message.message_user_name"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-lg-center">
                                                <div>
                                                    <div>
                                                        <span class="fw-bolder text-secondary">MENSAJE:</span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-bold" v-text="message.message_text"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div>
                                                    <div>
                                                        <span class="fw-bolder text-secondary">E-MAIL</span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-bold" v-text="message.message_user_mail"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div>
                                                    <div>
                                                        <span class="fw-bolder text-secondary">Tel:</span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-bold"
                                                              v-text="message.message_user_phone"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-sm btn-success fw-bold"
                                                    v-on:click="checkCurrentMessage(message.message_id)">Marcar como
                                                visto
                                                <span :id="'checkMessageLoading' + message.message_id"
                                                      class="spinner-border spinner-border-sm d-none mx-1" role="status"
                                                      aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade"
                         id="createUserContent"
                         role="tabpanel">
                        <div class="w-100 text-center">
                            <div class="d-flex justify-content-end my-3">
                                <button class="btn btn-sm btn-success"
                                        v-on:click="openCreateUsers()">Agregar usuarios
                                </button>
                            </div>
                            <div class="row px-2">
                                <div class="col-lg-8 col-sm-12 col-md-12 mx-auto card shadow p-0">
                                    <div class="card-header fw-bolder">
                                        Gesti&oacute;n de usuarios
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive w-100">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nombre completo</th>
                                                    <th scope="col">Usuario</th>
                                                    <th scope="col">Fecha de cumpleaños</th>
                                                    <th scope="col">Fecha de creación</th>
                                                    <th scope="col">Opciones</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr v-for="(user, index) in users">
                                                    <th scope="row" v-text="index + 1"></th>
                                                    <td v-text="user.first_name + ' ' + user.last_name"></td>
                                                    <td v-text="user.email"></td>
                                                    <td v-text="user.birth_date"></td>
                                                    <td v-text="user.created_at"></td>
                                                    <td class="d-flex justify-content-center">
                                                        <button class="btn btn-sm btn-icon btn-warning mx-2"
                                                                v-on:click="getCurrentEditUser(user, index)"><i
                                                                    class="fa-solid fa-pen-to-square"></i></button>
                                                        <button class="btn btn-sm btn-icon btn-danger mx2"
                                                                v-on:click="destroyUser(user.id, index)">
                                                            <i :id="'deleteUserIconSpinner' + index"
                                                               class="fa-solid fa-trash"></i>
                                                            <span :id="'deleteUserSpinner' + index"
                                                                  class="spinner-border spinner-border-sm d-none"
                                                                  aria-hidden="true"></span></button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade"
                         id="editGaleryContent"
                         role="tabpanel">
                        <div class="w-100">
                            <div class="d-flex justify-content-center my-2">
                                <div class="text-center">
                                    <span class="fw-bolder fs-3 my-1">BANNER PRINCIPAL</span>
                                    <div class="row">
                                        <div class="col-lg-8 col-sm-12 mx-auto">
                                            <div class="d-flex justify-content-center my-2 w-100 shadow">
                                                <img id="bannerPrincipal"
                                                     alt="Banner principal"
                                                     :src="bannerInfo.url"
                                                     class="rounded img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center align-items-center" id="main_container">
                                        <div class="element">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 mx-auto d-flex justify-content-center">
                                            <div class="px-1">
                                                <label class="btn btn-sm btn-warning btn-icon fw-bolder" type="button">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                    <input
                                                            id="inputBanner"
                                                            type="file"
                                                            style="display: none;"
                                                            v-on:change="getBannerUpdatedData()">
                                                </label>
                                            </div>
                                            <div class="px-1">
                                                <a id="seeCurrentBanner"
                                                   type="button"
                                                   cursor="pointer"
                                                   class="btn btn-sm btn-icon bg-primary"
                                                   :href="bannerInfo.url"
                                                   target="_blank">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                            </div>
                                            <div id="saveBannerButton" class="px-1 d-none">
                                                <button id="saveBannerButtonOriginal"
                                                        class="btn btn-sm btn-icon bg-success"
                                                        v-on:click="saveEditBanner()">
                                                    <i id="saveBannerButtonIcon" class="fa-solid fa-floppy-disk"></i>
                                                    <span id="saveBannerSpinner"
                                                          class="spinner-border spinner-border-sm  d-none"
                                                          aria-hidden="true"></span>
                                                </button>
                                            </div>
                                            <div id="deleteBannerChanges" class="px-1 d-none">
                                                <button id="cancelBannerChangesButton"
                                                        class="btn btn-sm btn-icon bg-danger"
                                                        v-on:click="cancelBannerChanges()">
                                                    <i class="fa-solid fa-xmark text-white"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center my-2">
                                <div class="text-center w-100">
                                    <span class="fw-bolder fs-3 my-1">CATEGORIAS PRINCIPALES</span>
                                    <div class="row" v-if="productsInfo.length > 0">
                                        <div v-for="product in productsInfo"
                                             class="col-lg-3 col-sm-5 mx-auto my-2">
                                            <div class="card">
                                                <div class="d-flex justify-content-center p-2">
                                                    <img :id="'productImageSource' + product.product_id"
                                                         alt="category"
                                                         style="width: 100%; height: 400px;"
                                                         :src="product.product_main_image"
                                                         class="rounded">
                                                </div>
                                                <div class="my-1 d-flex justify-content-center">
                                                    <div class="px-1">
                                                        <label class="btn btn-sm btn-warning btn-icon fw-bolder"
                                                               type="button">
                                                            <i class="fa-solid fa-pen-to-square text-dark"></i>
                                                            <input type="file"
                                                                   :id="'productInput' + product.product_id"
                                                                   style="display: none;"
                                                                   v-on:change="getProductUpdatedData(product.product_id)">
                                                        </label>
                                                    </div>
                                                    <div :id="'seeProductDiv' + product.product_id"
                                                         class="px-1">
                                                        <a type="button"
                                                           :id="'seeCurrentProduct' + product.product_id"
                                                           class="btn btn-sm btn-icon bg-primary"
                                                           :href="product.product_main_image"
                                                           target="_blank">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                    </div>
                                                    <div :id="'saveProductDiv' + product.product_id"
                                                         class="px-1 d-none">
                                                        <button v-on:click="saveProductImage(product.product_id)"
                                                                class="btn btn-sm btn-icon bg-success">
                                                            <i :id="'saveProductIcon' + product.product_id"  class="fa-solid fa-floppy-disk"></i>
                                                            <span :id="'saveProductSpinner' + product.product_id"
                                                                  class="spinner-border spinner-border-sm d-none mx-1" role="status"
                                                                  aria-hidden="true"></span>
                                                        </button>
                                                    </div>
                                                    <div :id="'productCancelChangesDiv' + product.product_id"
                                                         class="px-1 d-none">
                                                        <button class="btn btn-sm btn-icon bg-danger"
                                                                v-on:click="cancelProductChanges(product.product_id)">
                                                            <i class="fa-solid fa-xmark text-white"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="my-2 text-center px-2">
                                                    <div type="button"
                                                         class="bg-dark rounded-3"
                                                         v-on:click="openEditProductGallery(product)">
                                                        <span
                                                                class="fw-bolder text-white text-center d-flex justify-content-center align-items-center"
                                                                style="min-height: 3.0rem"
                                                                v-text="(product.product_name).toUpperCase()"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade"
                         id="editProductsContent"
                         role="tabpanel">
                        <div class="w-100 text-center">
                            Gestionar Productos
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-start"
             style="max-width: 17rem; background-image: url('img/dragon-scales.svg');"
             data-bs-scroll="true"
             tabindex="-1"
             id="userMenu"
             data-bs-backdrop="false">
            <div class="offcanvas-header shadow">
                <div class="row w-100">
                    <div class="col-12 d-flex justify-content-end p-0">
                        <button type="button" class="btn btn-sm btn-icon btn-outline-danger"
                                data-bs-dismiss="offcanvas"
                                aria-label="Close">
                            <i class="fa-solid fa-arrow-left fs-6"></i>
                        </button>
                    </div>
                    <div class="col-12">
                        <div class="w-100 d-flex justify-content-center">
                            <i class="fa-regular fa-circle-user"
                               style="font-size: 6rem; color: darkgray"></i>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="w-100 fw-bold text-center fs-6">
                            <span v-text="user.first_name + ' ' + user.last_name"></span>
                        </div>
                        <div class="w-100 text-center">
                            <span class="fw-bolder fs-5 text-muted">ADMINISTRADOR</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-body p-0 py-5 bg-dark bg-opacity-50">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item custom_hover rounded-1">
                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="visitDetailContent"
                           aria-selected="true" href="#visitDetailContent">
                            <i class="fa-solid fa-people-group form-check-inline " id="visitDetail"></i>
                            <label class="form-check-label  fw-bold" for="visitDetail">Detalle de visitas</label>
                        </a>
                    </li>
                    <li class="nav-item custom_hover rounded-1">
                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="mailContent"
                           aria-selected="false" href="#mailContent">
                            <i class="fa-solid fa-envelope-circle-check form-check-inline" id="mail"></i>
                            <label class="form-check-label fw-bold" for="mail">Buzon de entrada</label>
                        </a>
                    </li>
                    <li class="nav-item custom_hover rounded-1">
                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="createUser"
                           aria-selected="false" href="#createUserContent">
                            <i class="fa-solid fa-user-plus form-check-inline " id="createUser"></i>
                            <label class="form-check-label  fw-bold" for="createUser">Gestionar usuarios</label>
                        </a>
                    </li>
                    <li class="nav-item custom_hover rounded-1">
                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="editGaleryContent"
                           aria-selected="false" href="#editGaleryContent">
                            <i class="fa-regular fa-images form-check-inline" id="editGalery"></i>
                            <label class="form-check-label fw-bold" for="editGalery">Editar Galeria</label>
                        </a>
                    </li>
                    <!--                    <li class="nav-item custom_hover rounded-1">-->
                    <!--                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="editProductsContent"-->
                    <!--                           aria-selected="false" href="#editProductsContent">-->
                    <!--                            <i class="fa-solid fa-bars-progress form-check-inline" id="editProducts"></i>-->
                    <!--                            <label class="form-check-label fw-bold" for="editProducts">Ver productos</label>-->
                    <!--                        </a>-->
                    <!--                    </li>-->
                </ul>
            </div>
            <div class="offcanvas-bottom">
                <div class="w-100 d-flex justify-content-center py-2">
                    <button class="btn btn-sm btn-danger"
                            v-on:click="loggout()">Cerrar sesi&oacute;n
                        <span id="loggoutSpinner"
                              class="spinner-border spinner-border-sm d-none"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade"
         id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="fw-bolder">EDITAR USUARIO</span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row w-100">
                        <div class="col-lg-4 col-sm-12 my-2 mx-auto">
                            <small class="fw-bolder">Nombre completo</small>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Nombre completo"
                                   aria-label="Username"
                                   aria-describedby="basic-addon1"
                                   v-model="editUser.userName">
                        </div>
                        <div class="col-lg-4 col-sm-12 my-2 mx-auto">
                            <small class="fw-bolder">Apellido paterno</small>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Apellido Paterno"
                                   aria-label="lastName1"
                                   aria-describedby="basic-addon1"
                                   v-model="editUser.userLastName">
                        </div>
                        <div class="col-lg-4 col-sm-12 my-2 mx-auto">
                            <small class="fw-bolder">Apellido materno</small>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Apellido materno"
                                   aria-label="lastName2"
                                   aria-describedby="basic-addon1"
                                   v-model="editUser.userLastName1">
                        </div>
                        <div class="col-lg-4 col-sm-12 my-2 mx-auto">
                            <small class="fw-bolder">Nombre de usuario</small>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Nombre de usuario"
                                   aria-label="userName"
                                   aria-describedby="basic-addon1"
                                   disabled
                                   v-model="editUserCodeName">
                        </div>
                        <div class="col-lg-4 col-sm-12 my-2 mx-auto">
                            <small class="fw-bolder">Fecha de nacimiento</small>
                            <input
                                    type="date"
                                    class="form-control"
                                    placeholder="dd/mm/aaaa"
                                    aria-label="Username"
                                    aria-describedby="basic-addon1"
                                    v-model="editUser.userBirthDate">
                        </div>
                        <div class="col-lg-4 col-sm-12 my-2 mx-auto">
                            <small class="fw-bolder">Editar contraseña</small>
                            <div class="input-group">
                                <input id="passwordEdit"
                                       type="password"
                                       v-bind:class="'form-control border' + reactiveBorderEdit"
                                       placeholder="Contraseña"
                                       aria-label="password"
                                       aria-describedby="basic-addon1"
                                       v-model="editUser.userPassword">
                                <button class="btn btn-outline-secondary"
                                        type="button"
                                        id="button-addon1"
                                        v-on:click="seePassword('passwordEdit')">
                                    <i id="passwordIcon" class="fa-solid fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 my-2 mx-auto">
                            <small class="fw-bolder">Confirmar contraseña</small>
                            <div class="input-group">
                                <input id="confirmPasswordEdit"
                                       type="password"
                                       v-bind:class="'form-control border' + reactiveBorderEdit"
                                       placeholder="Confirmar"
                                       aria-label="confirmPassword"
                                       aria-describedby="basic-addon1"
                                       v-model="editUser.userConfirmPassword">
                                <button class="btn btn-outline-secondary"
                                        type="button"
                                        id="button"
                                        v-on:click="seePassword('confirmPasswordEdit')">
                                    <i id="confirmPasswordIcon" class="fa-solid fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-success"
                            v-on:click="validateSendEditUser()">Guardar
                        <span id="saveEditUserSpinner" class="spinner-border spinner-border-sm d-none"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade"
         id="createUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="fw-bolder">CREAR USUARIOS</span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row w-100">
                        <div class="col-lg-4 col-sm-12 my-2 mx-auto">
                            <small class="fw-bolder">Nombre completo</small>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Nombre completo"
                                   aria-label="Username"
                                   aria-describedby="basic-addon1"
                                   v-model="createUser.userName">
                        </div>
                        <div class="col-lg-4 col-sm-12 my-2 mx-auto">
                            <small class="fw-bolder">Apellido paterno</small>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Apellido Paterno"
                                   aria-label="lastName1"
                                   aria-describedby="basic-addon1"
                                   v-model="createUser.userLastName">
                        </div>
                        <div class="col-lg-4 col-sm-12 my-2 mx-auto">
                            <small class="fw-bolder">Apellido materno</small>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Apellido materno"
                                   aria-label="lastName2"
                                   aria-describedby="basic-addon1"
                                   v-model="createUser.userLastName1">
                        </div>
                        <div class="col-lg-4 col-sm-12 my-2 mx-auto">
                            <small class="fw-bolder">Nombre de usuario</small>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Nombre de usuario"
                                   aria-label="userName"
                                   aria-describedby="basic-addon1"
                                   disabled
                                   v-model="createUserCodeName">
                        </div>
                        <div class="col-lg-4 col-sm-12 my-2 mx-auto">
                            <small class="fw-bolder">Fecha de nacimiento</small>
                            <input
                                    type="date"
                                    class="form-control"
                                    placeholder="dd/mm/aaaa"
                                    aria-label="Username"
                                    aria-describedby="basic-addon1"
                                    v-model="createUser.userBirthDate">
                        </div>
                        <div class="col-lg-4 col-sm-12 my-2 mx-auto">
                            <small class="fw-bolder">Ingresar contraseña</small>
                            <div class="input-group">
                                <input id="password"
                                       type="password"
                                       v-bind:class="'form-control border' + reactiveBorder"
                                       placeholder="Contraseña"
                                       aria-label="password"
                                       aria-describedby="basic-addon1"
                                       v-model="createUser.userPassword">
                                <button class="btn btn-outline-secondary"
                                        type="button"
                                        id="button-addon1"
                                        v-on:click="seePassword('password')">
                                    <i id="passwordIcon" class="fa-solid fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 my-2 mx-auto">
                            <small class="fw-bolder">Confirmar contraseña</small>
                            <div class="input-group">
                                <input id="confirmPassword"
                                       type="password"
                                       v-bind:class="'form-control border' + reactiveBorder"
                                       placeholder="Confirmar"
                                       aria-label="confirmPassword"
                                       aria-describedby="basic-addon1"
                                       v-model="createUser.userConfirmPassword">
                                <button class="btn btn-outline-secondary"
                                        type="button"
                                        id="button"
                                        v-on:click="seePassword('confirmPassword')">
                                    <i id="confirmPasswordIcon" class="fa-solid fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-success"
                            v-on:click="saveUser()">Guardar
                        <span id="saveUserSpinner" class="spinner-border spinner-border-sm d-none"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade"
         id="productModalGallery"
         tabindex="-1"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <span class=" fw-bold"
                          v-text="(currentProductType !== '')? currentProductType.product_name.toUpperCase() : ''"></span>
                </div>
                <div class="modal-body px-2">
                    <div class="d-flex justify-content-center w-100 my-2">
                        <label class="btn btn-sm btn-success btn-icon fw-bolder" type="button">
                            <i class="fa-solid fa-plus text-white"></i>
                            <input type="file" id="miInput" style="display: none;">
                        </label>
                    </div>
                    <div class="w-100 px-2 d-flex" style="overflow-x: auto">
                        <template v-if="currentProductType !== ''">
                            <div v-for="galleryItem in productsInfo[productsInfo.indexOf(currentProductType)].images"
                                 class="mx-2 my-2">
                                <div class="w-100 d-flex justify-content-center">
                                    <img alt="Imagen " :src="galleryItem.product_image_url"
                                         style="max-height: 10rem; max-width: 10rem; height: 10rem "
                                         class="rounded shadow">
                                </div>
                                <div class="d-flex justify-content-center my-2">
                                    <button class="mx-1 btn btn-sm btn-icon btn-danger"><i
                                                class="fa-solid fa-trash-can text-white"></i></button>
                                    <button class="mx-1 btn btn-sm btn-icon btn-warning"><i
                                                class="fa-solid fa-pen-to-square text-white"></i></button>
                                    <button class="mx-1 btn btn-sm btn-icon btn-primary"><i
                                                class="fa-solid fa-eye text-white"></i></button>
                                    <button class="mx-1 btn btn-sm btn-icon btn-success"><i
                                                class="fa-solid fa-floppy-disk text-white"></i></button>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer></footer>
<script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
<script src="bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
<script src="js/dashboard.js"></script>
<script type="module">
    import {createApp} from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

    createApp({
        data() {
            return {
                createUser: {
                    userName: '',
                    userLastName: '',
                    userLastName1: '',
                    userPassword: '',
                    userConfirmPassword: '',
                    userBirthDate: '',
                },
                currentProductType: '',
                user: {!! $userData !!},
                cardsData: {!! $cardsData !!},
                chartsData: {!! $chartsData !!},
                messages: {!! $messages !!},
                urls: {!! $urls !!},
                users: {!! $users !!},
                editUser: {
                    userName: '',
                    userLastName: '',
                    userLastName1: '',
                    userPassword: '',
                    userConfirmPassword: '',
                    userBirthDate: '',
                },
                productsInfo: {!! $productsInfo !!},
                bannerInfo: {!! $banner !!},
                originalBannerUrl: '',
            }
        },
        methods: {
            seePassword: function (id) {
                let passwordInput = document.getElementById(id);
                let passwordIcon = document.getElementById(id + 'Icon');

                if (passwordInput.type === 'text') {
                    passwordInput.type = 'password';
                    passwordIcon.classList.remove('fa-eye-slash');
                    passwordIcon.classList.add('fa-eye');
                    return
                }
                passwordInput.type = 'text';
                passwordIcon.classList.add('fa-eye-slash');
                passwordIcon.classList.remove('fa-eye');
            },
            cleanCreateForm: function () {
                this.createUser = {
                    userName: '',
                    userLastName: '',
                    userLastName1: '',
                    userPassword: '',
                    userConfirmPassword: '',
                    userBirthDate: '',
                }
            },
            saveUser: function () {
                this.createUser['createUserCodeName'] = this.createUserCodeName;
                document.getElementById('saveUserSpinner').classList.remove('d-none');

                axios.post(this.urls.createUser, this.createUser).then(function (response) {
                    if (!response.data.response) {
                        response.data.exceptions.forEach(function (error) {
                            toastr.error(error);
                        });
                        document.getElementById('saveUserSpinner').classList.add('d-none');
                        return
                    }
                    document.getElementById('saveUserSpinner').classList.add('d-none');
                    toastr.success(response.data.message);
                    this.users = response.data.values;
                    this.users = response.data.values;

                    this.createUser = {
                        userName: '',
                        userLastName: '',
                        userLastName1: '',
                        userPassword: '',
                        userConfirmPassword: '',
                        userBirthDate: '',
                    }

                }.bind(this)).catch(function (error) {
                    document.getElementById('saveUserSpinner').classList.add('d-none');
                    toastr.error(error);
                })
            },
            openEditProductGallery: function (product) {
                this.currentProductType = product;
                $('#productModalGallery').modal('show');
            },
            initWeeklyVisitChart: function () {
                let options = {
                    series: [{
                        name: "Visitas",
                        data: this.chartsData.weekVisitsDetail.data.reverse(),
                    }],
                    chart: {
                        height: 350,
                        type: 'line',
                        zoom: {
                            enabled: false
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        curve: 'straight'
                    },
                    title: {
                        text: 'REPORTE DE VISITAS DE LA SEMANA 10/07/2023 - 16/07/2023',
                        align: 'left'
                    },
                    grid: {
                        row: {
                            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                            opacity: 0.5
                        },
                    },
                    xaxis: {
                        categories: this.chartsData.weekVisitsDetail.days.reverse(),
                    }
                };

                let chart = new ApexCharts(document.querySelector("#weeklyVisitsChart"), options);
                document.getElementById('rowWeekVisit').classList.remove('d-none');
                chart.render();
            },
            initMonthVisitChart: function () {
                let options = {
                    series: [{
                        name: "Visitas",
                        data: this.chartsData.monthVisitsDetail.data.reverse(),
                    }],
                    chart: {
                        height: 350,
                        type: 'line',
                        zoom: {
                            enabled: false
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        curve: 'straight'
                    },
                    title: {
                        text: 'REPORTE DE VISITAS DEL MES DE JUNIO ',
                        align: 'left'
                    },
                    grid: {
                        row: {
                            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                            opacity: 0.5
                        },
                    },
                    xaxis: {
                        categories: this.chartsData.monthVisitsDetail.days.reverse(),
                    }
                };

                let chart = new ApexCharts(document.querySelector("#monthVisitChart"), options);
                document.getElementById('rowMonthVisit').classList.remove('d-none');
                chart.render();
            },
            initAllCharts: function () {
                let allMethods = [this.initWeeklyVisitChart, this.initMonthVisitChart]

                allMethods.forEach(function (currentMethod, i) {
                    try {
                        currentMethod()
                    } catch {
                        console.log('An exception has been detected in allMethods, index' + i);
                    }
                });

                document.getElementById('loadingVisitData').classList.add('d-none');
            },
            openCreateUsers: function () {
                $('#createUserModal').modal('show');
            },
            checkCurrentMessage: function (messageId) {
                document.getElementById('checkMessageLoading' + messageId).classList.remove('d-none');

                axios.post(this.urls.checkMessage, {messageId: messageId}).then(function (response) {
                    if (!response.data.response) {
                        document.getElementById('checkMessageLoading' + messageId).classList.add('d-none');
                        toastr.error('Hubo un error al enviar tu solicitud');
                        return
                    }
                    document.getElementById('checkMessageLoading' + messageId).classList.add('d-none');
                    toastr.success(response.data.message);
                    this.messages = response.data.values;
                }.bind(this)).catch(function (error) {
                    toastr.error('Hubo un error al enviar tu solicitud' + messageId);
                    document.getElementById('checkMessageLoading' + messageId).classList.add('d-none');
                });
            },
            loggout: function () {
                document.getElementById('loggoutSpinner').classList.remove('d-none');
                axios.get(this.urls.loggout).then(function (response) {
                    if (response.request.statusText === 'OK') {
                        location.reload();
                        return
                    }
                    toastr.error('Hubo un error, reintenta');
                    document.getElementById('loggoutSpinner').classList.add('d-none');
                }.bind(this)).catch(function (error) {
                    document.getElementById('loggoutSpinner').classList.add('d-none');
                    toastr.error('Hubo un error, reintenta');
                });
            },
            destroyUser: function (userId, index) {
                this.showHideSpinner('deleteUserSpinner' + index, 'show');
                this.showHideSpinner('deleteUserIconSpinner' + index, 'hide');

                axios.post(this.urls.deleteUser, {userId: userId}).then(function (response) {
                    this.showHideSpinner('deleteUserSpinner' + index, 'hide');
                    this.showHideSpinner('deleteUserIconSpinner' + index, 'show');
                    if (!response.data.response) {
                        toastr.error(response.data.message);
                        return;
                    }
                    toastr.success(response.data.message);
                    this.users = response.data.values;
                }.bind(this)).catch(function (error) {
                    toastr.error(error.message);
                    this.showHideSpinner('deleteUserSpinner' + index, 'hide');
                    this.showHideSpinner('deleteUserIconSpinner' + index, 'show');
                }.bind(this));
            },
            showHideSpinner: function (elementId, type) {
                if (type === 'show') {
                    document.getElementById(elementId).classList.remove('d-none');
                    return;
                }
                document.getElementById(elementId).classList.add('d-none');
            },
            getCurrentEditUser: function (user) {
                this.editUser = {};
                this.editUser = {
                    'userId': user.id,
                    'userName': user.first_name,
                    'userLastName': user.last_name.split(' ')[0],
                    'userLastName1': user.last_name.split(' ')[1],
                    'userPassword': '',
                    'userConfirmPassword': '',
                    'userBirthDate': user.birth_date,
                };

                $('#editUserModal').modal('show');
            },
            sendEditUser: function () {
                let editUser = {...this.editUser}
                editUser['email'] = this.editUserCodeName;
                this.showHideSpinner('saveEditUserSpinner', 'show');
                axios.post(this.urls.updateUser, editUser).then(function (response) {
                    this.showHideSpinner('saveEditUserSpinner', 'hide');
                    if (!response.data.response) {
                        toastr.error(response.data.message);
                        return
                    }
                    this.showHideSpinner('saveEditUserSpinner', 'hide');
                    toastr.success(response.data.message);
                    this.users = response.data.values;
                    $('#editUserModal').modal('hide');

                }.bind(this)).catch(function (error) {
                    this.showHideSpinner('saveEditUserSpinner', 'hide');
                    toastr.error(error.message);
                }.bind(this));
            },
            validateSendEditUser: function () {
                let valid = true;

                if (this.editUser.userName === '') {
                    toastr.error('Debes ingresar un nombre valido');
                    valid = false;
                }

                if (this.editUser.userLastName === '') {
                    toastr.error('Debes ingresar un apellido paterno valido');
                    valid = false;
                }

                if (this.editUser.userLastName1 === '') {
                    toastr.error('Debes ingresar un apellido materno valido');
                    valid = false;
                }

                if (this.editUser.userBirthDate === '') {
                    toastr.error('Debes ingresar una fecha de cumpleaños');
                    valid = false;
                }

                if (this.editUser.userPassword !== '' && this.editUser.userConfirmPassword === '') {
                    toastr.error('No has confirmado tu contraseña nueva');
                    valid = false;
                }

                if (this.editUser.userConfirmPassword !== '' && this.editUser.userPassword === '') {
                    toastr.error('No ingresaste una contraseña nueva, solo la confirmacioón');
                    valid = false;
                }

                if ((this.editUser.userConfirmPassword !== '' && this.editUser.userPassword !== '') && (this.editUser.userConfirmPassword !== this.editUser.userPassword)) {
                    toastr.error('Las contraseñas ingresadas no coinciden');
                    valid = false;
                }

                if (!valid) {
                    return
                }

                this.sendEditUser();
            },
            getBannerUpdatedData: function () {
                const file = document.getElementById('inputBanner').files[0] ?? null;

                if (!file) {
                    document.getElementById('saveBannerButton').classList.add('d-none');
                    document.getElementById('deleteBannerChanges').classList.add('d-none');
                    document.getElementById('bannerPrincipal').src = this.originalBannerUrl;
                    document.getElementById('seeCurrentBanner').href = this.originalBannerUrl;
                    return
                }

                document.getElementById('bannerPrincipal').src = URL.createObjectURL(file);
                document.getElementById('seeCurrentBanner').href = URL.createObjectURL(file);
                document.getElementById('saveBannerButton').classList.remove('d-none');
                document.getElementById('deleteBannerChanges').classList.remove('d-none');
                this.getCanvas(URL.createObjectURL(file), 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/001.png')
            },
            getOriginalUrl: function () {
                this.originalBannerUrl = this.bannerInfo.url
            },
            cancelBannerChanges: function () {
                document.getElementById('inputBanner').value = '';
                this.getBannerUpdatedData();
            },
            saveEditBanner: function () {
                let formData = new FormData;
                this.disableBannerButtons('disable');
                this.showHideSpinner('saveBannerSpinner', 'show');
                this.showHideSpinner('saveBannerButtonIcon', 'hide');
                const myCanvas = document.querySelector('#my-canvas')

                myCanvas.toBlob(blob => {
                    const sendFile = new File([blob], 'imagen.png', {type: 'image/png'})
                }, 'image.png')

                formData.append('banner', sendFile);
                axios.post(this.urls.bannerUpdate, formData).then(function (response) {
                    if (!response.data.response) {
                        toastr.error(response.data.message);
                        return
                    }

                    toastr.success(response.data.message);

                    setTimeout(function () {
                        location.reload();
                    }, 3000)

                }.bind(this)).catch(function (error) {
                    toastr.error(error.message);
                }.bind(this));
            },
            disableBannerButtons: function (type) {
                document.getElementById('saveBannerButton').disabled = (type === 'disable');
                document.getElementById('seeCurrentBanner').disabled = (type === 'disable');
                document.getElementById('cancelBannerChangesButton').disabled = (type === 'disable');
                document.getElementById('saveBannerButtonOriginal').disabled = (type === 'disable');
            },
            getProductUpdatedData: function (productId) {
                const file = document.getElementById('productInput' + productId).files[0] ?? null;

                if (!file) {
                    document.getElementById('saveProductDiv' + productId).classList.add('d-none');
                    document.getElementById('productCancelChangesDiv' + productId).classList.add('d-none');
                    document.getElementById('productImageSource' + productId).src = this.getProductOriginalUrl(productId);
                    document.getElementById('seeCurrentProduct' + productId).href = this.getProductOriginalUrl(productId);
                    return
                }

                document.getElementById('productImageSource' + productId).src = URL.createObjectURL(file);
                document.getElementById('seeCurrentProduct' + productId).href = URL.createObjectURL(file);
                document.getElementById('saveProductDiv' + productId).classList.remove('d-none');
                document.getElementById('productCancelChangesDiv' + productId).classList.remove('d-none');
            },
            saveProductImage: function (productId) {
                let formData = new FormData;
                formData.append('productImage', document.getElementById('productInput' + productId).files[0]);
                formData.append('productId', productId);
                this.showHideSpinner('saveProductSpinner' + productId, 'show');
                this.showHideSpinner('saveProductIcon' + productId, 'hide');

                axios.post(this.urls.updateProduct, formData).then(function (response) {
                    this.showHideSpinner('saveProductSpinner' + productId, 'hide');
                    this.showHideSpinner('saveProductIcon' + productId, 'show');

                    if (!response.data.response) {
                        toastr.error(response.data.message);
                        return;
                    }
                    toastr.success(response.data.message);

                    setTimeout(function(){
                        location.reload();
                    }, 1500)

                }.bind(this)).catch(function (error) {
                    toastr.error(error.message)
                    this.showHideSpinner('saveProductSpinner' + productId, 'show');
                    this.showHideSpinner('saveProductIcon' + productId, 'hide');
                }.bind(this))
            },
            getProductOriginalUrl: function (productId) {
                debugger
                return 'img/products/' + productId + '.jpeg'
            },
            cancelProductChanges: function (productId) {
                document.getElementById('productInput' + productId).value = '';
                this.getProductUpdatedData(productId);
            },
            getCanvas: function(img, logo){
                //debugger
                const myImg1 = new Image()
                const myImg2 = new Image()
                myImg1.src = img
                myImg2.src = logo
                const mainContainer = document.getElementById('main_container')
                const getMyCanvas = document.createElement('canvas')

                getMyCanvas.setAttribute('id', 'my-canvas')
                getMyCanvas.width = 200
                getMyCanvas.height = 350
                mainContainer.appendChild(getMyCanvas)
                const ctx = getMyCanvas.getContext('2d')

                myImg1.onload = () => {
                    ctx.drawImage(myImg1,0,0)
                    ctx.fillStyle = "rgba(255, 255, 255, .4)";
                    ctx.fillRect(0, 425, 300, 25)

                    ctx.font = '24px Arial'
                    ctx.fillStyle = 'black'
                }
                myImg2.onload = () => {
                    ctx.globalAlpha = 0.3
                    const miPatron = ctx.createPattern(myImg2, 'repeat');
                    ctx.fillStyle = miPatron;
                    ctx.fillRect(0,0,ctx.canvas.width,ctx.canvas.height);
                }
            }
        },
        watch: {},
        computed: {
            createUserCodeName: function () {
                return (this.createUser.userName === '' && this.createUser.userLastName === '') ? '' : ((this.createUser.userName.split(' ')[0] + '.' + this.createUser.userLastName.split(' ')).toLowerCase());
            },
            editUserCodeName: function () {
                return (this.editUser.userName === '' && this.editUser.userLastName === '') ? '' : ((this.editUser.userName.split(' ')[0] + '.' + this.editUser.userLastName.split(' ')).toLowerCase());
            },
            reactiveBorder: function () {
                if (this.createUser.userPassword === '' && this.createUser.userConfirmPassword === '') {
                    return ''
                }
                return ((this.createUser.userPassword !== this.createUser.userConfirmPassword) ? ' border-danger' : ' border-success');
            },
            reactiveBorderEdit: function () {
                if (this.editUser.userPassword === '' && this.editUser.userConfirmPassword === '') {
                    return ''
                }
                return ((this.editUser.userPassword !== this.editUser.userConfirmPassword) ? ' border-danger' : ' border-success');
            },
        },
        mounted() {
            this.initAllCharts();
            this.getOriginalUrl();
        }
    }).mount('#app')
</script>
</body>
</html>
