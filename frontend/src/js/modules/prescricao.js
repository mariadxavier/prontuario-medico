
export default function initNovaPrescricao() {
    const btnAdd = document.querySelector('#medicamentos-button');
    const mostraPrescricao = document.querySelector('#medicamentos-textarea-show');
    const medicamento = document.querySelector('#medicamento');
    const prescricao = document.querySelector('#prescricao');
    const inputInv = document.querySelector("#inputInv");
    let queryPhp = "";
    function newDiv() {
        mostraPrescricao.innerHTML += `${medicamento.value}: ${prescricao.value}\n`;
        queryPhp += `"${medicamento.value}" => "${prescricao.value}",`
        inputInv.value = queryPhp;
        console.log(queryPhp);
    }
    

    btnAdd.addEventListener('click', newDiv);

}