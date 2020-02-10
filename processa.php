<?php
session_start();
include_once("conexao1.php");
, 
$nome = filter_input(INPUT_POST 'tNome', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST 'tpreco', FILTER_SANITIZE_STRING);
$custo = filter_input(INPUT_POST 'tCusto', FILTER_SANITIZE_STRING);
$qntd = filter_input(INPUT_POST 'tqntd', FILTER_SANITIZE_STRING);

echo "Nome: $Nome  ";<br>
echo "Preço: $tpreco ";<br> 
echo "Custo: $tcusto "; <br>
echo "Quantidade: $tqntd  ";<br>

$result_produto = "INSERT INTO produto(nome,preço,custo,qntd) VALUES ('$nome','$preco','$custo','$qntd')"; 
$resultado_produto = mysql_query($conn, $result_produto);

if(mysql_insert_id($conn));
$_SESSION['msg'] = "<p style='color:green;'>Produto cadastrado com sucesso</p>";
	header("Location: addprodt.php");
	}else{
	$_SESSION['msg'] = "<p style='color:red;'>Produto não foi cadastrado com sucesso</p>";
	header("Location: addprodt.php");
}
