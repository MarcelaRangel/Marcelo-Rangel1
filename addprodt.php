<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionar Produto </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css\materialize" />
    
</head>
<body>
<div class="container">
<h1>Adicionar Produto</h1>
<form method="POST" action="processa.php" >
<fieldset id="Produto">
<legend>Adicionar Produto</legend>
<p>Nome: <input type="text" name="tNome" id="nome" size="20" maxlength="30" required="required" placeholder="Nome do produto"></p>
<p>Preço: <input type="text" name="tpreco" id="preco" size="20" maxlength="30" required="required" placeholder="R$"></p>
<p>Custo: <input type="text" name="tCusto" id="custo" size="20" maxlength="30" required="required" placeholder="R$"></p>
<p>quantidade: <input type="text" name="tqntd" id="qntd" size="15" maxlength="4" required="required" placeholder="10"></p><br><br>
<button class="btn-floating btn-large waves-effect waves-light" type="submit" name="action"><i class="material-icons right">send</i></button>
</fieldset>

</form>
<?php
    if(isset($_SESSION['msg'])):
       echo $_SESSION['msg'];
       session_unset();
       endif;
?>
</div>
</body>
</html>
<?php
include 'resources/footer.php';
?>