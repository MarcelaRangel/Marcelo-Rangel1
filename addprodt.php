
<?php
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionar Produto </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"> 
	
    <link rel="stylesheet" href="css\materialize" />
    
</head>
<body>
<h1>Adicionar Produto</h1>
<form method="POST"action="processa.php" >
<fieldset id="Produto">
<legend>Adicionar Produto</legend>
<p>Nome: <input type="text" name="tNome" id="nome" size="20" maxlength="30" placeholder="Nome do produto"></p>
<p>Preço: <input type="text" name="tpreço" id="preço" size="20" maxlength="30" placeholder="R$"></p>
<p>Custo: <input type="text" name="tCusto" id="custo" size="20" maxlength="30" placeholder="R$"></p>
<p>quantidade: <input type="text" name="tqntd" id="qntd" size="15" maxlength="4" placeholder="10"></p><br><br>
<input type="submit" value="Cadastrar">

</fieldset>

</form>
</body>
</html>
<?php
include 'resources/footer.php';
?>