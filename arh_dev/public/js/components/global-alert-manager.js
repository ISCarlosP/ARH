class GlobalAlertManager{
    constructor() {
        this.alertTypes = ['alert', 'modal'];
        this.commonErrors = [
            {id: 'alertType', resume: 'Tipo de alerta no identificado'},
            {id: 2, resume: 'Tipo de alerta no identificado'},
            {id: 3, resume: 'Tipo de alerta no identificado'},
            {id: 4, resume: 'Tipo de alerta no identificado'},
            {id: 5, resume: 'Tipo de alerta no identificado'},
        ]
    }

    dispatchAlert(payload = null){

    }
    validPayloadData(payload){
        const response = { message : 'OK', result : true};

        if(!this.alertTypes.includes(payload.type)){
            const error = this.commonErrors.find(currentError => currentError.id === 'alertType');
            response.message = error.resume;
            response.result = false;
        }
    }
    validateAlertType(){}
    dispatchModal(){}
    dispatchNotification(){}
}
