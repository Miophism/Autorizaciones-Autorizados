document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const contrasena = document.getElementById('contrasena').value;


    if (!contrasena || !email) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            showConfirmButton: false,
            text: 'Por favor, completa todos los campos.',
            timer: 1000
        });
        return;
    }


    Swal.fire({
        title: 'Se inicio sesion correctamente',
        icon: 'success',
        showConfirmButton: false,
        timer: 1000
    }).then((result) => {
        document.getElementById('loginForm').submit();
    });

});
