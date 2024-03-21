export default function initAbrirHistorico() {
    // Botões:
    const $botaoAbrir = document.querySelectorAll(".button-ver-tudo");
    const $botaoFechar = document.querySelectorAll(".button-ver-menos");
    
    // Div maximixada:
    const $divMaximizada = document.querySelectorAll(".item-maximizado");
    
    // nodeList com todos os itens do histórico(consultas):
    const $consultas = document.querySelectorAll(".consulta");
    
    if ($consultas.length) {
        $consultas.forEach((elem, index) => {
            // abre o conteudo ao clicar em "Ver Mais"
            $botaoAbrir[index].addEventListener("click", () => {
                $divMaximizada[index].style.display = "flex";
                $botaoAbrir[index].style.display = "none";
            });        
    
            // minimaliza o conteudo ao clicar em "Ver Menos"
            $botaoFechar[index].addEventListener("click", () => {
                $divMaximizada[index].style.display = "none";
                $botaoAbrir[index].style.display = "block";
            });
        });
    }

}