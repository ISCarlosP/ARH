toggleLoginModal = function(){
    $('#loginModal').modal('show');
}

toggleLoader = function(){
    setTimeout(function(){
        document.getElementById('loader').classList.add('d-none');
        document.getElementById('app').classList.remove('d-none');
    }, 2000);
}

toggleSeePassword = function (){
    let iconSeePassword = document.getElementById('iconSeePassword');
    let inputPassword = document.getElementById('inputPassword');

    if(inputPassword.type === 'password'){
        iconSeePassword.classList.remove('bi-eye-fill');
        iconSeePassword.classList.add('bi-eye-slash-fill');
        inputPassword.type = 'text';
        return
    }

    iconSeePassword.classList.remove('bi-eye-slash-fill');
    iconSeePassword.classList.add('bi-eye-fill');
    inputPassword.type =  'password';
}

sendLogin = function(){
    document.getElementById('loginButtonSpinner').classList.remove('d-none');
    document.getElementById('loginButtonText').innerText = 'Ingresando'

    setTimeout(function(){
        location.replace('/dashboard.html');
    }, 2000)
}