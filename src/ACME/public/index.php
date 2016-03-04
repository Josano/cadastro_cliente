<?php

include_once("../Clientes/Dados/dados.php");

?>
<!DOCTYPE html>
<html  lang="PT-Br">
<head>
	<meta charset="UTF-8">
	<title>Clientes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    if(isset($_POST['cres'])){
         ksort($clientes);
    }elseif(isset($_POST['dec'])){
         krsort($clientes);
    }else{
         ksort($clientes);
    }
?>
<div class="container">
  <h2>Clientes</h2>
  	<tr>
        <td>
            <form method="post">
                <button class="btn btn-info btn-xs" type="submit" value="cres" name="cres">Ordem Crescente</button>
        </td>
            <td>
                <button class="btn btn-info btn-xs" type="submit" value="dec" name="dec">Ordem Decrescente</button>
            </form>
        </td>
	</tr>  
  <div class="table-responsive">
	  <table class="table">
	    <thead>
	      <tr>
	        <th>Id</th>
	        <th>Nome</th>
	        <th>Cpf</th>
	      </tr>
	    </thead>
	    <tbody>
	      	<?php foreach($clientes as $cliente) {
                  $documento = ($cliente->getTipo() == 'Pessoa Fisica') ? $cliente->getCpf() : $cliente->getCnpj();
                 
          ?>        
	      	<tr>
            <td><?php echo "<a href='show.php?cliente=".$cliente->getId(). "'>".$cliente->getId()."</a>";?></td>
		        <td><?php echo "<a href='show.php?cliente=".$cliente->getId(). "'>".$cliente->getNome()."</a>";?></td>
		        <td><?php echo "<a href='show.php?cliente=".$cliente->getId(). "'>".$documento."</a>";?></td>
		      </tr>    
	        <?php } ?>
	    </tbody>
	  </table>
  </div>
</div>

</body>
</html>
