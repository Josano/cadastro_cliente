<?php

include_once("dados.php");

?>
<!DOCTYPE html>
<html  lang="PT-Br">
<head>
	<meta charset="UTF-8">
	<title>Dados de: <?php echo $clientes[$_GET["cliente"]]->getNome(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Dados Completos:</h3>
            </div>
            <div class="panel-body">
                <p><b>Nome Completo:</b> <?php echo $clientes[$_GET["cliente"]]->getNome(); ?></p>
                <p><b>Cpf:</b> <?php echo $clientes[$_GET["cliente"]]->getCpf(); ?></p>
                <p><b>Endereço:</b> <?php echo $clientes[$_GET["cliente"]]->getEndereco(); ?></p>
               <p><b>CPF:</b> <?php echo $clientes[$_GET["cliente"]]->getCpf() ?></p>
            </div>
        </div>
    </div>
    <div class="container">
    <a class="btn btn-info btn-ln" href='index.php'>Voltar</a>
</div>
</body>
</html> 