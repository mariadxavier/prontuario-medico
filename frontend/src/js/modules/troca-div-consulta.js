export default function initTrocaDivConsulta() {
    const divs = document.querySelectorAll('[data-consulta="divs"]');
    const buttonsTrocaDiv = document.querySelectorAll('[data-consulta="button"]');
    let cont = 0;

    function proximaTela() {
        divs[cont++];
        divs.forEach((div) => {
            div.classList.remove('div-selecionada');
        })
        divs[cont].classList.add('div-selecionada');
    }

    // Obs: Não sei se a informação (post) é enviado em todas as telas ou só na última quando salvamos e direcionamos a consulta
    buttonsTrocaDiv.forEach((button) => {
        button.addEventListener('click', proximaTela);
    })

}