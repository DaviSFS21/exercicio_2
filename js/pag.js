function ativBotao() {
    document.getElementById("btn").disabled = false;
}

function redirect() {
    alert('Pedido feito com sucesso!\nObrigado pela preferência.');
    window.location.replace("index.html");
}