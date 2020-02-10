<?php

$nome = filter_input(INPUT_POST 'tNome', FILTER_SANITIZE_STRING);
$preço = filter_input(INPUT_POST 'tpreço', FILTER_SANITIZE_STRING);
$custo = filter_input(INPUT_POST 'tCusto', FILTER_SANITIZE_STRING);
$qntd = filter_input(INPUT_POST 'tqntd', FILTER_SANITIZE_STRING);

echo "Nome: $nome <br>";
echo "Preço: $preço <br>";
echo "Custo: $custo <br>";
echo "Quantidade: $qntd <br>";
