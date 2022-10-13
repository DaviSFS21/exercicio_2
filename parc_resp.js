if (total == 0) {
    alert("Não há itens no carrrinho!");
    window.location.replace("carrinho.html");
}

function a_vista() {
    document.getElementById("num_parcelas").innerHTML = "-8,5% de desconto!";
    document.getElementById("btn").disabled = false;
    preco = (total * 0.85).toFixed(2);
    document.getElementById("preco_total").innerHTML = "R$" + preco.replace(".", ",");
}

function parcela2() {
    var x = document.getElementById("vezes2").value;
    document.getElementById("num_parcelas").innerHTML = x + "x";
    preco = ((total * 1.06 / x) + 6.9).toFixed(2);
    apresPrecoFinal();
    validParcela();
}

function parcela3() {
    var x = document.getElementById("vezes3").value;
    document.getElementById("num_parcelas").innerHTML = x + "x";
    preco = ((total * 1.06 / x) + 6.9).toFixed(2);
    apresPrecoFinal();
    validParcela();
}

function parcela4() {
    var x = document.getElementById("vezes4").value;
    document.getElementById("num_parcelas").innerHTML = x + "x";
    preco = ((total * 1.06 / x) + 6.9).toFixed(2);
    apresPrecoFinal();
    validParcela();
}

function parcela5() {
    var x = document.getElementById("vezes5").value;
    document.getElementById("num_parcelas").innerHTML = x + "x";
    preco = ((total * 1.06 / x) + 6.9).toFixed(2);
    apresPrecoFinal();
    validParcela();
}

function validParcela() {
    if (preco < 10) {
    document.getElementById("preco_total").innerHTML = "O valor da parcela é menor que 10 reais...<br>R$" + preco.replace(".", ",");
    document.getElementById("btn").disabled = true;
    } else {
    ativBotao();
    }
}

function apresPrecoFinal() {
    document.getElementById("preco_total").innerHTML = "R$" + preco.replace(".", ",");
}

function ativBotao() {
    document.getElementById("btn").disabled = false;
}

function redirect() {
    alert('Pedido feito com sucesso!\nObrigado pela preferência.');
    window.location.replace("index.html");
}