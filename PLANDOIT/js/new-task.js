// Obtém todos os itens do menu
var menuItems = document.getElementsByClassName("menu-item");

// Percorre cada item do menu e adiciona um evento de clique
for (var i = 0; i < menuItems.length; i++) {
    menuItems[i].addEventListener("click", function(event) {
        event.preventDefault(); // Impede o comportamento padrão do link

        // Obtém o nome do arquivo HTML a ser carregado
        var file = this.getAttribute("data-file");

        // Cria uma nova solicitação XMLHttpRequest
        var xhr = new XMLHttpRequest();

        // Define o callback para o evento onload da solicitação
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Atualiza o conteúdo da div "content" com a resposta do servidor
                document.getElementById("content").innerHTML = xhr.responseText;
            }
        };

        // Abre a solicitação GET para o arquivo HTML
        xhr.open("GET", file, true);
        xhr.send();
    });
}
