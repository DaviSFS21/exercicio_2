function apresPrecoFinal() {
    document.getElementById("preco_total").innerHTML = "R$" + preco.replace(".",",");
}

function ativBotao() {
    document.getElementById("btn").disabled = false;
}

function validParcela() {
    if (preco < 10) {
        document.getElementById("preco_total").innerHTML = "O valor da parcela é menor que 10 reais...<br>R$" + preco.replace(".",",");
        document.getElementById("btn").disabled = true;
    }
    else {
        ativBotao();
    }
}

function redirect() {
    alert('Pedido feito com sucesso!\nObrigado pela preferência.');
    window.location.replace("index.html");
}