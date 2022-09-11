<?php

  $valor = array(
    $_POST['q_regata'] * 19.90,
    $_POST['q_cam_social'] * 59.90,
    $_POST['q_blusa'] * 30.90,
    $_POST['q_pullover'] * 119.90,
    $_POST['q_sapato'] * 99.90,
    $_POST['q_calca'] * 38.90,
    $_POST['q_meias'] * 9.90,
    $_POST['q_luvas'] * 24.90,
    $_POST['q_jaqueta'] * 328.90,
    $_POST['q_bermuda'] * 69.90,
    $_POST['q_chinelo'] * 14.90,
    $_POST['q_bone'] * 6.90,
  );

  $valorunit = array(
    19.90,
    59.90,
    30.90,
    119.90,
    99.90,
    38.90,
    9.90,
    24.90,
    328.90,
    69.90,
    14.90,
    6.90,
  );

  $desc = array(
    "Camiseta Regata",
    "Camisa Social",
    "Blusa",
    "Pullover",
    "Sapato",
    "Calças",
    "Meias",
    "Luvas",
    "Jaqueta",
    "Bermuda",
    "Chinelo",
    "Boné",
  );

  $total = 0;

  for($i = 0; $i < 12; $i++){
    $total = $total + $valor[$i];
  }

  $total = number_format($total, 2, ',', '');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="pag.css">
  <title>Document</title>
</head>

<body>
  <header>
    <div class="menu_header">
      <ul style="width: 890px;">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="carrinho.html">Pedido</a></li>
        <li><a href="dev.html">Desenvolvedores</a></li>
      </ul>
    </div>
  </header>
  <br><br><br><br><br>
  <div>
    <a href="carrinho.html"><img class="go-back" src="images/seta.svg" alt=""></a>
  </div>
  <br>
  <h4>Forma de pagamento</h4>
  <br>
  <div class="table" style="align-items: center;">
    <table border=1>
      <tr>
        <td>Quantidade</td>
        <td>Descrição</td>
        <td>Preço Unitário</td>
      </tr>
      <?php

        for($i = 0; $i < 12; $i++){
          if($valor[$i] > 0){
            $unit_form[$i] = number_format($valorunit[$i], 2, ',', '');
            echo "
              <tr>
                <td>".$valor[$i] / $valorunit[$i]."</td>
                <td>$desc[$i]</td>
                <td>$unit_form[$i]</td>
              </tr>
            ";
          }
        }

      ?>
    </table>
  </div>
  <div class="control">
    <label class="radio">
      <input type="radio" name="answer">
      À Vista
    </label>
    <label class="radio">
      <input type="radio" name="answer">
      À Prazo
    </label>
    <br>
    Quantidade de parcelas <select name="">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    <h3>Preço total: R$<?php echo $total; ?> </h3>
  </div>
  <div class="btn-carrinho">
    <a href="pag.html"><button onclick="alert('Pedido feito com sucesso!\nObrigado pela preferência.')" class="btn-carrinho">Pagamento</button></a>
  </div>
</body>

</html>