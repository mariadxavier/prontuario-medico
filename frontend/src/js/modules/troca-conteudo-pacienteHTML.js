export default function initTrocaConteudo() {
    // Seleção de elementos necessários para a troca de abas:
    const $listAside = document.querySelectorAll(".aside-select"); //seleciona os dois itens do aside, as li PESSOAL e HISTÓRICO
    const $listContainers = document.querySelectorAll(".container"); // lista com containers de conteudo (PESSOAL e HISTÓRICO)
    
    if ($listAside.length && $listContainers.length) {  
        
        function activeDiv (index, itemAside) {
            $listContainers.forEach((div, indexDiv) => {
                let comparacao;
    
                if (index != indexDiv) {
                    comparacao = indexDiv;
                    $listAside[comparacao].classList.remove("aba-selecionada");
                } else {
                    itemAside.classList.add("aba-selecionada");
                }
                div.style.display = "none";
    
            });
            $listContainers[index].style.display = "grid";
            itemAside.classList.add("aba-selecionada");
        }
        
        $listAside.forEach((itemAside, index) => {
            itemAside.addEventListener('click', () => {
                activeDiv(index, itemAside);
            });
            
            
        });
    }

}
