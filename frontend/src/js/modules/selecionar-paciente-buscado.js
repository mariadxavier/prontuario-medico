$divPaciente = document.querySelectorAll(".mostrar-paciente-buscado");
$containerPacientes = document.querySelector(".pacientes-retornados");

idPaciente = "";
if($divPaciente.length) {
    $divPaciente.forEach((elem) => {
        elem.addEventListener('click', () => {
            $idPaciente = elem.id;
            window.location = `http://localhost/prontuario-medico/frontend/pagina-paciente.php?idPaciente=${$idPaciente}`;
        })
        
    });
}
