<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/global.css">
  <title>Adicionar Ponto</title>
</head>

<body>

  <div class="content-wrapper">
    <div class="form-wrapper">
      <h1 >Adicionar ponto</h1>
      <?php if(isset($_GET['errcep'])):?>
        <p style="color:red; padding: 0.5em;">Digite um cep valido!</p>
      <?php endif ?>
        <div class="input-wrapper">
          <input required type="text" name="cep" minlength="8" maxlength="8" placeholder="CEP">
        </div>  
        <div class="input-wrapper"><button type="submit" href ="/src/front/address.php">Adicionar Ponto</button></div>
      </form>
    </div>
  </div>

</body>

</html>