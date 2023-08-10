

const ContactComponent = {
    props: {
      routes: {
          type: Object,
          required: true
      }
    },
    template: `
    <div class="d-flex align-items-center justify-content-center pb-5 bg-transparent"
             style="width: 100%; height: auto;"
             id="contacto">
            <div class="w-75 h-75">
                <div class="row">
                    <h2 class="text-center mt-5 mb-5 text-white fw-bolder" style="font-family: Arial;">Contactanos</h2>
                    <div class="col-lg-7 col-sm-12">
                        <div class="w-75">
                            <div class="card-body">
                                <h2 class="fw-bolder pb-3 text-white pt-4">Contactanos</h2>
                                    <div class="rounded bg-danger p-3 mb-3 d-flex flex-column justify-content-center d-none" id="error-msg">
                                        <strong class="text-white">º Debe llenar todos los campos del formulario</strong>
                                        <strong class="text-white">º Ingrese un correo valido</strong>
                                        <strong class="text-white">º El numero debe tener 10 digitos</strong>
                                        <strong class="text-white">º Debe ingresar un comentario con mas de 20 caracteres</strong>
                                    </div>
                                    <input type="text" name="" id="name" class="form-control mb-4" placeholder="Nombre" v-model="sendMessage.name">
                                    <input type="text" name="" id="email" class="form-control mb-4" placeholder="Correo Electronico" v-model="sendMessage.email">
                                    <input type="text" name="" id="phoneNumber" class="form-control mb-4" placeholder="Telefono" v-model="sendMessage.phone" maxlength="10" @input="filterNonNumeric">
                                    <div class="form-floating mb-4">
                                    <textarea class="form-control" id="floatingTextarea"
                                          style="height: 120px;" v-model="sendMessage.message"></textarea>
                                        <label for="floatingTextarea">Deje un comentario</label>
                                    </div>
                                    <button class="btn btn-primary w-100" v-on:click="sendData">Enviar</button>
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
    `,
    data(){
        return{
            sendMessage: {
                name: '',
                email: '',
                phone: '',
                message: ''
            }
        }
    },
    methods: {
        filterNonNumeric() {
            this.sendMessage.phone = this.sendMessage.phone.replace(/[^0-9]/g, '');
        },
        //Funcion para mostrar el mensaje de error
        showTimeOut: function(){
            const errorMsg = document.getElementById('error-msg')
            errorMsg.classList.remove('d-none')
            setTimeout(() => {
                errorMsg.classList.add('d-none')
            },10000)
        },
        sendData: function(){
            const { name, email, phone, message} = this.sendMessage

            // Validación del correo electrónico utilizando una expresión regular
            const emailRegex = /^[a-zA-Z0-9._%+-]+@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}$/;
            if (!emailRegex.test(email)) {
                this.showTimeOut();
                return;
            }
            // evalua que el telefono contenga los 10 digitos
            if(phone.length !== 10){
                this.showTimeOut()
                return
            }
            // evalua que el comentario tenga mas de 20 caracteres
            if(message.length < 20){
                this.showTimeOut()
                return
            }
            //Evalua que todos los campos esten llenos
            if(name.length === 0 || email.length === 0 || phone.length === 0 || message.length === 0){
                this.showTimeOut()
                return
            }

            axios.post(this.routes.send_message, { name, email, phone, message })
                .then(response => {
                    console.log(response)
                })
                .catch(err => console.log(err))
        }
    },
}

export default ContactComponent;
