<?php
require("../../API/cepConsultation.php");

if (isset($data['erro']) || intval($cep) == 0) {
    header("Location: ./registro.php?errcep");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/global.css">
  <title>CEP</title>
</head>
<body>
  <div class="content-wrapper">
    <div class="form-wrapper">
      <h1>Confirme seu endereço</h1>
      <form action="/src/edit/createUser.php" method="POST">
        <div class="input-wrapper">
          <input required readonly type="text" name="cep" placeholder="CEP" value="<?=$cep?>">
        </div>
        <div class="input-wrapper">
          <input required disabled type="text" placeholder="Rua" value="<?=$data['logradouro']?>">
        </div>
        <div class="input-wrapper">
          <input required disabled type="text" placeholder="Estado" value="<?=$data['uf']?>">
        </div>
        <div class="input-wrapper">
          <input required disabled type="text" placeholder="Cidade" value="<?=$data['localidade']?>">
        </div>
        <div class="input-wrapper">
          <input required disabled type="text" placeholder="Bairro" value="<?=$data['bairro']?>">
        </div>
        <div class="input-wrapper">
          <input required disabled type="text" placeholder="Complemento" value="<?=$data['complemento']?>">
        </div>
        <div class="input-wrapper">
          <button>Confirmar</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
