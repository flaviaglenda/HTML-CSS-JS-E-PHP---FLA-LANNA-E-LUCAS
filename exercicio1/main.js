// Flávia, Lanna e Lucas

document.addEventListener('DOMContentLoaded', function() {
    const formulario = document.getElementById('formulario');

    formulario.addEventListener('submit', function(event) {
        event.preventDefault();

        if (formulario.method === 'POST' || 'post') {
            Swal.fire({
                title: "Cliente cadastrado com sucesso",
                icon: "success"
            }).then((result) => {
                if (result.isConfirmed) {
                    formulario.submit(); 
                }
            });
        } else {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "O formulário não foi enviado corretamente",
            }).then(() => {
                formulario.reset();
            });
        }
    });
});
