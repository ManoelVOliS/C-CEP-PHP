<?php
  require("../conf/conf.php");

  $cep = $_POST['cep'];
  
  ## Verificando se email já foi cadastrado.

  $fp = fopen(DATA_PERSON,"r");

  while(($row = fgetcsv($fp)) !== false){
    if($cep == $row[0]){
      http_response_code(302);
      header("location: ../front/registro.php?err");
      exit();
    }
  }

  ## Adicionando informações no arquivo
  
  $fp = fopen(DATA_PERSON,"a");
  fputcsv($fp, [$cep]);
  fclose($fp);
  
  http_response_code(302);
  header("location: ../front/login.php");
?>