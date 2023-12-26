// Função para filtrar a tabela
function filtrarTabela() {
    var input, filtro, tabela, linhas, colunas, textoFiltro;
    input = document.getElementById("searchInput");
    filtro = input.value.toUpperCase();
    tabela = document.querySelector("table");
    linhas = tabela.getElementsByTagName("tr");

    // Iterar por todas as linhas da tabela e ocultar aquelas que não correspondem ao filtro
    for (var i = 0; i < linhas.length; i++) {
        colunas = linhas[i].getElementsByTagName("td");
        var linhaVisivel = false;
        for (var j = 0; j < colunas.length; j++) {
            if (colunas[j]) {
                textoFiltro = colunas[j].textContent || colunas[j].innerText;
                if (textoFiltro.toUpperCase().indexOf(filtro) > -1) {
                    linhaVisivel = true;
                    break;
                }
            }
        }
        linhas[i].style.display = linhaVisivel ? "" : "none";
    }

    // Adicione este console.log para verificar se a função está sendo chamada
    console.log("Filtrando a tabela...");
}

// Adicionar um evento de input à barra de busca
var inputSearch = document.getElementById("searchInput");
if (inputSearch) {
    inputSearch.addEventListener("input", filtrarTabela);
}
