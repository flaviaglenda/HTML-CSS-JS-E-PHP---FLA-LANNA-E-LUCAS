function exibirReserva(reserva) {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Reserva realizada com sucesso!',
        showConfirmButton: false,
        timer: 1500
    });

    document.getElementById("reservaInfo").innerHTML = `
        Nome do Solicitante: <strong>${reserva.nome}</strong><br>
        Data: <strong>${reserva.data}</strong><br>
        Horário: <strong>${reserva.hora}</strong><br>
        Sala: <strong>${reserva.sala}</strong>
    `;
}
