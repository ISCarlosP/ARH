toggleLoginModal = function(){
    $('#loginModal').modal('show');
}

toggleLoader = function(){
    setTimeout(function(){
        document.getElementById('loader').classList.add('d-none');
        document.getElementById('app').classList.remove('d-none');
    }, 2000);
}