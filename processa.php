<?php
session_start();
include_once("conexao.php");
$nome = filter_input(INPUT_POST, 'tNome', FILTER_SANITIZE_SPECIAL_CHARS);
$preco = filter_input(INPUT_POST, 'tpreco', FILTER_SANITIZE_SPECIAL_CHARS);
$custo = filter_input(INPUT_POST, 'tCusto', FILTER_SANITIZE_SPECIAL_CHARS);
$qntd = filter_input(INPUT_POST, 'tqntd', FILTER_SANITIZE_SPECIAL_CHARS);


$querySelect= $link->query("select nome from produto");
$array_nomes= [];

while ($nomes = $querySelect->fetch_assoc()):
    $nomes_existentes=$nomes['nome'];
    array_push($array_nomes, $nomes_existentes);
endwhile;
if(in_array($nome, $array_nomes)):
                  $_SESSION['msg']="<p class='center red-text'>".'Este produto ja existe, Portanto nao pode ser re-adicionado. Qualquer duvida contate o administrador do sistema!'."</p>";
                  header("Location:addprodt.php");
      else:
        $queryInsert = $link->query("insert into produto values(default, '$nome', '$preco', '$qntd', '$custo')");
        $affected_rows= mysqli_affected_rows($link);
        if($affected_rows > 0):
            $_SESSION['msg'] = "<p class='center green-text'>".'O produto foi adicionado ao Banco de Dados do sistema'."</p>";
         header("Location:addprodt.php");
        endif;
endif;